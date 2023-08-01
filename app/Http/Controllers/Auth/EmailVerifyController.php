<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResendEmailRequest;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class EmailVerifyController extends Controller {

    public function index(Request $request) {

        $email = $request->email;
        $phone = $request->phone;

        if ($email != null) {
            $client = Client::query()->Where('email', $email)->firstOrFail();
        } else if ($phone != null) {
            $client = Client::query()->Where('phone', $phone)->firstOrFail();
        } else {
            return redirect()->route('login');
        }

        return view('auth.pages.email_verify', ['phone' => $client->phone, 'email' => $client->email]);
    }

    public function show($id) {

        /*if($id != session('email_code'))
            return view('auth.pages.email_verify-expire');*/

        $client = Client::query()->where('email_auth_reset_link', $id)->first();
        if (!$client)
            return view('auth.pages.email_verify-expire');

        $client->email_verify_at = Carbon::now();
        $client->email_auth_reset_link = "";
        $client->reset_link = "";
        $client->sms_verify_code = "";
        $client->save();

        if ($client->{"2fa_auth"}) {
            return redirect()->route('enter_2fa', ['phone' => $client->phone, 'email' => $client->email]);
        }

        auth()->guard('clients')->login($client, true);

        return redirect()->route('profile');
    }

    public function resend_email(ResendEmailRequest $request) {

        if (!auth()->guard('clients')->check()) {

            $email = $request->email;
            $client = Client::query()->where('email', $email)->firstOrFail();

        } else {
            $client = auth()->guard('clients')->user();
            if ($client->email_verify_at)
                return redirect()->route('login');
        }

        $client->send_email();

        return redirect(url()->previous());
    }

}
