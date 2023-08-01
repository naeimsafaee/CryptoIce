<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\RequestTrader;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RequestController extends Controller {

    public function index() {
        return view('profile.trader.request');
    }

    public function store(\App\Http\Requests\RequestTrader $request) {
        $client = auth()->guard('clients')->user();

//        if (password_verify($request->password, $client->password)) {
        RequestTrader::query()->create([
            'client_id' => $client->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'address' => $request->address,
            'min_btc' => $request->min_btc,
            'min_buy' => $request->min_buy,
        ]);

        return redirect()->route('home');
        /*} else {
            throw ValidationException::withMessages(['password' => 'The entered password is invalid']);
        }*/

    }

}
