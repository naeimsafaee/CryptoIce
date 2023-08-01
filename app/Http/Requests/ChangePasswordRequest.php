<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest{

    public function rules(){
        return [
            'old_password' => 'min:8|required',
            'password' => 'min:8|required|confirmed'
        ];
    }
}
