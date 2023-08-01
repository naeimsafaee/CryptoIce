<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TwoStepAuthenticatorRequest extends FormRequest {

    public function rules() {
        return [
            "code" => ["required", "numeric"],
            "email" => [],
            "phone" => []

        ];
    }
}
