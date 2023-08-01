<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Exception\NotFoundException;

class PhoneVerifyController extends Controller {

    public function index(Request $request) {
        if (auth()->guard('clients')->check() &&
            auth()->guard('clients')->user()->phone_verified_at)
            return redirect()->route('profile');

        $client = Client::query()->where('phone', $request->phone)->first();
        if (!$client) {
            throw new NotFoundException();
        }


        return view('auth.pages.verify_phone', ['phone' => $client->phone, 'email' => $client->email]);
    }

    public function sumbit(Request $request) {
        if(!$request->has('code') || !$request->code)
            throw ValidationException::withMessages(['code' => "The entered code is wrong"]);


        $email = $request->email;
        $phone = $request->phone;

        if($email != null){
            $client = Client::query()->Where('email' , $email)->firstOrFail();
        } else if($phone != null){
            $client = Client::query()->Where('phone' , $phone)->firstOrFail();
        }else {
            return redirect()->route('login');
        }


        if ($client->check_code_is_correct($request->code)) {

            $client->phone_verified_at = Carbon::now();
            $client->sms_verify_code = null;
            $client->save();
        } else {
            throw ValidationException::withMessages(['code' => "The entered code is wrong"]);
        }

        if ($client->email_auth) {
            $client->send_email();
            return redirect()->route('verify_email.index', ['phone' => $client->phone, 'email' => $client->email]);
        }

        if ($client->{"2fa_auth"}) {
            return redirect()->route('enter_2fa', ['phone' => $client->phone, 'email' => $client->email]);
        }

        auth()->guard('clients')->login($client, true);

        return redirect()->route('profile');
    }

}
