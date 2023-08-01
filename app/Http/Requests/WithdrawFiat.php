<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WithdrawFiat extends FormRequest {

    public function rules() {

        $wallet = auth()->guard('clients')->user()->wallet;

        return [
            'amount' => ['required', 'string', 'max:' . $wallet],
            'selected_type' => ['required'],
            'fullname' => ['required' , 'string'],
            'bic_code' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'iban_account_number' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'country' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'city' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'address' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'post_code' => [Rule::requiredIf($this->selected_type == "SWIFT")],
            'ach_routing' => [Rule::requiredIf($this->selected_type == "local bank account")],
            'account_number' => [Rule::requiredIf($this->selected_type == "local bank account")],
        ];
    }
}
