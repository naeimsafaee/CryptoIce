<?php

namespace App\Http\Controllers\Auth\Security;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Notifications\SendSMS;
use Illuminate\Http\Request;

class SecurityController extends Controller{

    public function __invoke(){

        $client = auth()->guard('clients')->user();
        $number = 0;

        if($client->sms_auth)
            $number++;
        if($client->email_auth)
            $number++;
        if($client->{"2fa_auth"})
            $number++;

        return view('auth.pages.security' , compact('number' , 'client'));
    }

}
