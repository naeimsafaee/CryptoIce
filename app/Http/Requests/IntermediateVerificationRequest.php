<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntermediateVerificationRequest extends FormRequest{

    public function rules(){
        return [
            'id' => ['required'],
            'id_card_photo' => ['required' , 'image'],
            'facial_photo' => ['required' , 'image'],
        ];
    }
}
