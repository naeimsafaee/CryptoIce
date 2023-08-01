<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Mail\ChangePasswordMail;
use App\Mail\VerifyEmail;
use App\Models\Client;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm() {

        if (auth()->guard('clients')->check())
            return redirect()->route('profile');

        session(['url.intended' => url()->previous()]);


//        \request()->session()->flush();

        $countries = json_decode(file_get_contents('assets/countries.json'), true);

        return view('auth.pages.login', ['countries' => $countries]);
    }

    protected function create(array $data) {

        /*   if (isset($data["username"]) && Client::query()->where('username', $data["username"])->get()->count() > 0)
               $client = Client::query()->where('username', $data["username"])->firstOrFail();

           elseif (isset($data["username"]) && Client::query()->where('email', $data["username"])->get()->count() > 0)
               $client = Client::query()->where('email', $data["username"])->firstOrFail();

           elseif (isset($data["phone"]) && Client::query()->where('phone', $data["country_code"] . $data["phone"])->get()->count() > 0)
               $client = Client::query()->where('phone', $data["country_code"] . $data["phone"])->firstOrFail();*/

        $client = false;
        if (array_key_exists('username', $data))
            $client = Client::query()->orWhere('username', $data["username"])->orWhere('email', $data["username"])->first();
        if (array_key_exists('phone', $data))
            $client = Client::query()->where([
                'phone' => $data["phone"],
            ])->first();

        if (!$client)
            throw ValidationException::withMessages(['password' => text('error login')]);

        if (password_verify($data["password"], $client->password)) {
            return $client;
        } else {
            throw ValidationException::withMessages(['password' => text('error login')]);
        }
    }

    public function login(LoginRequest $request) {

        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret = '6LeVauwdAAAAAHNmxx0aQjMNw__pKCzKh2cR3ahB';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if (!$responseData->success)
                throw ValidationException::withMessages(['password' => "CAPTCHA not validated!"]);
        } else {
            throw ValidationException::withMessages(['password' => "CAPTCHA not validated!"]);
        }

        $request->session()->flush();

        $client = $this->create($request->all());


        if ($client->sms_auth) {
            if(!$client->send_sms($client->country_code)){
                throw ValidationException::withMessages(['password' => "Can not send message to the entered phone number"]);
            }
            return redirect()->route('verify_phone.index',  ['email' => $client->email, 'phone' => $client->phone]);
        }

        if ($client->email_auth) {
            $client->send_email();
            return redirect()->route('verify_email.index', ['email' => $client->email, 'phone' => $client->phone]);
        }

        if ($client->{"2fa_auth"}) {
            return redirect()->route('enter_2fa', ['email' => $client->email, 'phone' => $client->phone]);
        }

        auth()->guard('clients')->login($client, true);

        return redirect()->route('profile');
    }

    public function logout() {
        auth()->guard('clients')->logout();
        \request()->session()->flush();
        return redirect()->route('login');
    }

}
