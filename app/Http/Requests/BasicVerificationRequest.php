<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BasicVerificationRequest extends FormRequest {

    public function rules() {
        return [
            'full_name' => ['string', 'nullable'],
            'email' => ['required', 'email:rfc,dns', Rule::unique('clients', 'email')->ignore(auth()->guard('clients')->user()->id, 'id')],
            'phone' => ['string', 'nullable' , Rule::unique('clients', 'phone')->ignore(auth()->guard('clients')->user()->id, 'id')],
        ];
    }
}
