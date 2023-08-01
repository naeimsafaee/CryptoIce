<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaswordRequest extends FormRequest
{

    public function rules()
    {
        return [
            'password' => ['required', 'min:8' , 'confirmed'],
        ];
    }
}
