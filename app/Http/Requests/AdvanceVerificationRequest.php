<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvanceVerificationRequest extends FormRequest{

    public function rules(){

        $is_natural = $this->is_natural;

        if($is_natural){
            return [
                'address' => ['required' , 'string'],
                'zip_code' => ['required' , 'string'],
                'proof_of_address' => ['required' , 'image'],
            ];
        } else {
            return [
                'business_name' => ['required' , 'string'],
                'email' => ['required' , 'email:rfc,dns'],
                'business_mailing_address' => ['required' , 'email:rfc,dns'],
                'zip_code' => ['required' , 'string'],
            ];
        }

    }
}
