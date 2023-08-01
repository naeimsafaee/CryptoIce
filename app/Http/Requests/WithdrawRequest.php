<?php

namespace App\Http\Requests;

use App\Models\ClientCoin;
use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequest extends FormRequest {

    public function rules() {


        if($this->selected_coin == 0){
            $wallet = auth()->guard('clients')->user()->wallet;
        } else {

            $client_coin = ClientCoin::query()->where([
                'client_id' => auth()->guard('clients')->user()->id,
                'coin_id' => $this->selected_coin
            ])->first();

            if(!$client_coin){
                $wallet = 0;
            } else {
                $wallet = $client_coin->amount;
            }
        }

        return [
            'amount' => ['required', 'string' , 'lte:' . $wallet],
            'desc' => ['required', 'string'],
        ];
    }
}
