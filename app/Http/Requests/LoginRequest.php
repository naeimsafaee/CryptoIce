<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest{

    public function rules(){
        return [
            'password' => ['required'],
        ];
    }
}
