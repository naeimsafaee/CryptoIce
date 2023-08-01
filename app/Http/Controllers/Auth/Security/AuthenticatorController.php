<?php

namespace App\Http\Controllers\Auth\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\TwoStepAuthenticatorRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Google2FA;
use Illuminate\Validation\ValidationException;

class AuthenticatorController extends Controller {

    public function __invoke() {
        $google2fa = app('pragmarx.google2fa');

        $google2fa_secret = $google2fa->generateSecretKey();
        $client = auth()->guard('clients')->user();
        $client->{"2fa_secret"} = $google2fa_secret;
        $client->save();

        $QR_Image = $google2fa->getQRCodeInline(
            'CryptooIce',
            $client->username,
            $google2fa_secret
        );

        /* $QR_Image = $google2fa->getQRCodeUrl(
             'CryptooIce',
             $client->id,
             $google2fa_secret
         );*/

        return view('auth.pages.auth_2fa', ['QR_Image' => $QR_Image, 'google2fa_secret' => $google2fa_secret]);
    }

    public function show_enter_verify() {
        return view('auth.pages.verify_2fa_enable');
    }

    public function enable(TwoStepAuthenticatorRequest $request) {
        $client = auth()->guard('clients')->user();

        if (Google2FA::verifyKey($client->{"2fa_secret"}, $request->code)) {
            $client->{"2fa_auth"} = true;
            $client->save();

            return redirect()->route('security');
        } else {
            throw ValidationException::withMessages(['code' => "The entered code is wrong"]);
        }

    }

    public function enter(Request $request) {
        
        if (!$request->email && !$request->phone) {
            return redirect()->route('login');
        }
        return view('auth.pages.verify_2fa', ['email' => $request->email, 'phone' => $request->phone]);
    }

    public function verify(TwoStepAuthenticatorRequest $request) {


        if ($request->email) {
            $client = Client::query()->Where('email', $request->email)->firstOrFail();
        } else if ($request->phone) {
            $client = Client::query()->Where('phone', $request->phone)->firstOrFail();
        }else {
            return redirect()->route('login');
        }


        if (Google2FA::verifyKey($client->{"2fa_secret"}, $request->code)) {
            auth()->guard('clients')->login($client, true);
        } else {
            throw ValidationException::withMessages(['code' => "The entered code is wrong"]);
        }

        return redirect()->route('profile');
    }

}
