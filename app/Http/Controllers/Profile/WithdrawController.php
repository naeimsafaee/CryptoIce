<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawRequest;
use App\Models\ClientTransaction;
use App\Models\CoinPrice;
use App\Models\Withdraw;
use App\Models\WithdrawFiat;
use Illuminate\Http\Request;

class WithdrawController extends Controller {

    public function index() {
        return view('profile.wallet.withdraw');
    }

    public function store(WithdrawRequest $request) {
        $transaction = ClientTransaction::query()->create([
            'client_id' => auth()->guard('clients')->user()->id,
            'amount' => $request->amount,
            'coin_id' => $request->selected_coin,
            'is_deposit' => false,
            'status' => 0
        ]);

        \App\Models\WithdrawRequest::query()->create([
            'client_id' => auth()->guard('clients')->user()->id,
            'address' => $request->address,
            'tx_id' => '',
            'transaction_id' => $transaction->id,
            'amount' => $request->amount,
            'coin_id' => $request->selected_coin,
        ]);

        return redirect()->route('transaction');
    }

    public function withdraw_fiat(\App\Http\Requests\WithdrawFiat $request) {

        WithdrawFiat::query()->create([
            'amount' => $request->amount,
            'selected_type' => $request->selected_type,
            'fullname' => $request->fullname,
            'bic_code' => $request->bic_code,
            'iban_account_number' => $request->iban_account_number,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'post_code' => $request->post_code,
            'ach_routing' => $request->ach_routing,
            'account_number' => $request->account_number
        ]);

        return redirect()->route('profile');
    }
}
