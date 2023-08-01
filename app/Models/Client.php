<?php

namespace App\Models;

use App\Mail\RequestEnableEmailAuthenticateMail;
use App\Mail\VerificationStatusEmail;
use App\Mail\VerifyEmail;
use App\Notifications\SendSMS;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Laravel\Cashier\Billable;

class Client extends Authenticatable {
    use HasFactory, Notifiable, Billable;

    protected $fillable = [
        "username",
        "email",
        "password",
        "phone",
        'country_code',
        'sms_verify_code'
    ];

    public function send_email() {
        $reset_link = generateRandomString(10);
        $this->email_auth_reset_link = $reset_link;
        $this->email_verify_at = null;
        $this->save();

        session(['email_code' => $reset_link]);

        Mail::to(["email" => $this->email])->send(new VerifyEmail($reset_link));
    }

    public function send_sms($country_code = "98") {

        $reset_link = generateVerifyCode(6);
        $this->sms_verify_code = $reset_link;
        $this->phone_verified_at = null;
        $this->save();

//        $message = "CryptooICE Verification Code: " . PHP_EOL . $reset_link;

        session(['phone_code' => $reset_link]);

        try {
            $this->notify(new SendSMS($this->phone, $reset_link, $country_code));

            return true;
        } catch(\Exception $e){
            return false;
//            throw ValidationException::withMessages(['phone' => "Can not send message to the entered phone number"]);
        }
    }

    public static function send_sms_2($phone , $country_code = "98") {
        $reset_link = generateVerifyCode(6);
//        $message = "CryptooICE Verification Code: " . PHP_EOL . $reset_link;

        session(['phone_code' => $reset_link]);

        Kavenegar($phone, $reset_link , $country_code);
        return $reset_link;
    }

    public function enable_email_2fa() {

        $reset_link = generateRandomString('12');
        $this->email_auth_reset_link = $reset_link;

        $this->save();

        Mail::to(["email" => $this->email])->send(new RequestEnableEmailAuthenticateMail($reset_link));
    }

    public function enable_sms_2fa($country_code = "98") {

        $reset_link = rand(10000, 999999);
        $this->sms_auth_reset_link = $reset_link;

        $this->save();

//        $message = "your cryptoo ice code is: " . PHP_EOL . $reset_link;
        try {
            $this->notify(new SendSMS($this->phone, $reset_link, $country_code));

            return true;
        } catch(\Exception $e){
            return false;
//            throw ValidationException::withMessages(['phone' => "Can not send message to the entered phone number"]);
        }
    }

    public function security_level() {

        $level = 0;
        if ($this->email_verify_at)
            $level++;
        if ($this->sms_auth)
            $level++;
        if ($this->email_auth)
            $level++;

        return $level;
    }

    public function trader() {
        return $this->hasOne(Trader::class);
    }

    public function getWalletAttribute($attr) {
        if (!auth()->guard('clients')->check())
            return 0;
        $not_available_orders = Order::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'has_filled' => false,
            'has_canceled' => false,
            'is_buy' => true
        ])->sum('paid_amount');
        return $attr - $not_available_orders;
    }

    public function copied_traders() {
        return $this->belongsToMany(Trader::class, CopyTrade::class);
    }

    public function copied_clients() {
        return $this->belongsToMany(Client::class, CopyTrade::class,
            'trader_id', 'client_id');
    }

    public function is_this_trader_copied($trader_id) {
        $copied = $this->copied_traders;

        foreach($copied as $trader) {
            if ($trader->id === $trader_id)
                return true;
        }
        return false;
    }

    public function notifications($read = false) {
        return Notification::query()->where('client_id', $this->id)->where('read', $read)->get();
    }

    public function send_verification_email($accept = true, $reason = "") {

        Mail::to(["email" => $this->email])->send(new VerificationStatusEmail($accept, $reason));

    }

    public function check_code_is_correct($code) {

        $twilioConfig = config('services.twilio');

        $twilio = new \Twilio\Rest\Client($twilioConfig['twilio_account_sid'], $twilioConfig['twilio_auth_token']);

        $country_code = $this->country_code;
        $phone = $this->phone;

        if (substr($country_code, 0, 1) != "+") {
            $country_code = '+' . $country_code;
        }

        $verification_check = $twilio->verify->v2->services($twilioConfig["twilio_service_sid"])
            ->verificationChecks
            ->create($code,
                ["to" => $country_code . $phone]
            );

        if ($verification_check->status === "approved")
            return true;

        return false;
    }

}
