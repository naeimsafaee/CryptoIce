<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller {

    protected $redirectTo = RouteServiceProvider::HOME;

    public function showRegistrationForm() {

        if (auth()->guard('clients')->check())
            return redirect()->route('profile');

        session(['url.intended' => url()->previous()]);

        $countries = json_decode(file_get_contents('assets/countries.json') , true);
//        \request()->session()->flush();

        return view('auth.pages.register', ['countries' => $countries]);
    }

    public function register(RegisterRequest $request) {
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

        if ($request->has('phone')) {

            try {
                $reset_link = Client::send_sms_2($request->phone, $request->country_code);

            } catch(\Exception $e){
                throw ValidationException::withMessages(['phone' => "Can not send message to the entered phone number"]);
            }

            $client = Client::query()->create([
                'username' => $request->username,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'country_code' => $request->country_code,
                'sms_verify_code' => $reset_link
            ]);

            return redirect()->route('verify_phone.index', ["phone" => $client->phone ?? "", "email" => $client->email ?? ""]);

        } else {

            $client = Client::query()->create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if (!$client->email_verify_at) {
                $client->send_email();

                return redirect()->route('verify_email.index', ["phone" => $client->phone ?? "", "email" => $client->email ?? ""]);
            }
        }

//        auth()->guard('clients')->login($client, true);

        return redirect()->route('profile');
    }
}
