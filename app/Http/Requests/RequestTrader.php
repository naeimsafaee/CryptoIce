<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTrader extends FormRequest
{

    public function rules()
    {
        return [
            'username' => ['required', 'exists:clients,username'],
            'email' => ['required', 'exists:clients,email'],
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'address' => ['required', 'string'],
            'min_buy' => ['required', 'string'],
            'min_btc' => ['required', 'string'],
        ];
    }
}
