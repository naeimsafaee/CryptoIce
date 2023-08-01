<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResendEmailRequest extends FormRequest {

    public function rules() {
        return [
            "email" => [
                'required',
                'regex:/(.+)@(.+)\.(.+)/i',
                'email:rfc,dns'
            ]
        ];
    }
}
