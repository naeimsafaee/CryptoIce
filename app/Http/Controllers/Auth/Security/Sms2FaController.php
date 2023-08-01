<?php

namespace App\Http\Controllers\Auth\Security;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Sms2FaController extends Controller {

    public function __invoke() {

        $countries = json_decode(file_get_contents('assets/countries.json') , true);

        return view('auth.pages.sms_2fa' , compact('countries'));
    }

    public function request_enable_sms(Request $request) {
        $client = auth()->guard('clients')->user();

        if($client->phone_verified_at){
            $phone = $client->phone;
            $pre_phone = $client->country_code;

        } else {
            $phone = $request->phone;
            $pre_phone = $request->pre_phone;

            if(Client::query()->where('phone' , str_replace("+", "", $phone))->count() > 0)
                return throw ValidationException::withMessages(['phone' => 'phone number exists']);
        }

        $client = Client::query()->findOrFail($client->id);
//        $phone = $request->pre_phone . $request->phone;
        if(substr($phone , 0 , 1) == "0"){
            $phone = substr($phone , 0);
        }


        if(!$client->enable_sms_2fa($client->country_code)){
            return throw ValidationException::withMessages(['phone' => 'phone number exists']);
        }

        $client->country_code = str_replace("+", "", $pre_phone);
        $client->phone = $phone;
        $client->save();


        return true;
    }

    public function enable_sms(Request $request) {
        if(!$request->has('rest_link') || !$request->rest_link)
            throw ValidationException::withMessages(['reset_link' => "The entered code is wrong"]);

        $VE = session('phone_code');

        $client = Client::query()->where('VE', $VE)->firstOrFail();
        if ($client->id !== auth()->guard('clients')->user()->id)
            return abort(403);

        if (!$client->check_code_is_correct($request->rest_link)) {
            throw ValidationException::withMessages(['reset_link' => "The entered code is wrong"]);
        }

        $client->phone_verified_at = Carbon::now();

        if ($client->sms_auth)
            $client->sms_auth = false;
        else
            $client->sms_auth = true;

        $client->sms_auth_reset_link = "";

        $client->save();

        return redirect()->route('security');
    }

}
