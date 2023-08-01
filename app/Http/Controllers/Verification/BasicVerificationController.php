<?php

namespace App\Http\Controllers\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicVerificationRequest;
use Illuminate\Http\Request;

class BasicVerificationController extends Controller{

    public function index(){

        $client = auth()->guard('clients')->user();

        return view('profile.verification.basic' , compact('client'));
    }

    public function store(BasicVerificationRequest $request){

        $client = auth()->guard('clients')->user();

        $client->full_name = $request->full_name;
        $client->phone = $request->phone;
        if($client->email != $request->email)
            $client->send_email();

        $client->email = $request->email;

        $client->save();

        return redirect()->route('profile');
    }

}
