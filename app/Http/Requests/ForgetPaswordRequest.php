<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPaswordRequest extends FormRequest{

    public function rules(){
        return [
            'email' => ['required', 'email:rfc,dns', 'exists:clients,email'],
        ];
    }
}
