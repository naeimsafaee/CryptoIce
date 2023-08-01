<?php

namespace App\Http\Requests;

use App\Models\CoinPrice;
use Illuminate\Foundation\Http\FormRequest;

class DepositRequest extends FormRequest {

    public function rules() {
        return [
            'transaction_id' => ['required', 'string'],
            'coin_price_id' => ['required', 'string', 'exists:coin_prices,id'],
            'network_id' => ['required', 'string', 'exists:networks,id'],
            'amount' => ['required', 'string'],
        ];
    }
}
