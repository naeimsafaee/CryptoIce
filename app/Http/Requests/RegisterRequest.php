<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class RegisterRequest extends FormRequest{

    public function rules(){
        return [
            'username' => ['required', 'unique:clients,username' , 'unique:clients,email'],
            'phone' => ['unique:clients,phone' , 'nullable'],
            'email' => ['email:rfc,dns', 'unique:clients,email','unique:clients,username' , 'indisposable'],
            'password' => ['required', 'min:8'],
        ];
    }
}
