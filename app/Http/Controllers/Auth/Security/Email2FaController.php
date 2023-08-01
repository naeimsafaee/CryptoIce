<?php

namespace App\Http\Controllers\Auth\Security;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Email2FaController extends Controller {

    public function __invoke() {
        return view('auth.pages.email_2fa');
    }

    public function request_enable_email(Request $request) {

        $client = auth()->guard('clients')->user();
        if(!$client->email){
            $client->email = $request->email;
            $client->save();
        }

        $client->enable_email_2fa();

        return redirect()->back();
    }

    public function enable_email($rest_link) {

        $client = Client::query()->where('email_auth_reset_link', $rest_link)->firstOrFail();

        if ($client->email_auth === true)
            $client->email_auth = false;
        else
            $client->email_auth = true;

        $client->email_verify_at = Carbon::now();

        $client->save();

        return redirect()->route('security');
    }

}
