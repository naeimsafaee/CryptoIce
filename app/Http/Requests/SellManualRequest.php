<?php

namespace App\Http\Requests;

use App\Models\CoinPrice;
use Illuminate\Foundation\Http\FormRequest;

class SellManualRequest extends FormRequest {

    public function rules() {

        $wallet = 0;
        $min_withdraw = 0;

        if ($this->coin) {
            $coin_price = CoinPrice::query()->find($this->coin);
            $price = $coin_price->price;
            $client_coin = $coin_price->client_coin();

            $wallet = $client_coin;

            $min_withdraw = $coin_price->withdraw;
        }


        return [
//            'tx_id' => ['required', 'string'],
            'coin' => ['required', 'string', 'exists:coin_prices,id'],
            'amount' => ['required', 'string' , 'lte:' . $wallet , 'gte:'. $min_withdraw],
        ];
    }

}
