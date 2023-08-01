<?php

namespace App\Http\Requests;

use App\Models\ClientCoin;
use App\Models\CoinPrice;
use Illuminate\Foundation\Http\FormRequest;

class ButManualRequest extends FormRequest {

    public function rules() {

        $wallet = 0;
        $min_withdraw = 0;

        if ($this->coin) {

            $coin_price = CoinPrice::query()->find($this->coin);
            $price = $coin_price->price;

            $wallet = auth()->guard('clients')->user()->wallet / $price;

            $min_withdraw = $coin_price->withdraw;

        }


        return [
//            'address' => ['required', 'string'],
            'coin' => ['required', 'string', 'exists:coin_prices,id'],
            'amount' => ['required', 'string', 'lte:' . $wallet , 'gte:' . $min_withdraw],
        ];
    }
}
