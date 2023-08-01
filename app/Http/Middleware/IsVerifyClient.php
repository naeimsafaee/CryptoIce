<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class IsVerifyClient {

    public function handle($request, Closure $next) {

        $client = \auth()->guard('clients')->user();
        if ($client && $client->email) {
            if (!$client->email_verify_at) {
                $client->send_email();
                return redirect()->route('verify_email.index');
            }
        }
        if ($client && $client->phone) {
            if (!$client->phone_verified_at) {
                if($client->send_sms($client->country_code))
                    return redirect()->route('verify_phone.index');
            }
        }

        return $next($request);
    }
}
