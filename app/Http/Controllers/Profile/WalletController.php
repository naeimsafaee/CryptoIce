<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ClientCoin;
use App\Models\CoinPrice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class WalletController extends Controller {

    public function __invoke() {

        $client = auth()->guard('clients')->user();

        $coin_price = CoinPrice::all();

        $client_coin = ClientCoin::query()->where('client_id', $client->id)->with('coin_price')->orderByDesc('amount')->get();

        if ($coin_price->count() != $client_coin->count()) {
            foreach($coin_price as $coinPrice) {
                ClientCoin::query()->updateOrCreate([
                    'coin_id' => $coinPrice->id,
                    'client_id' => $client->id
                ], [
                    'client_id' => $client->id
                ]);
            }
            $client_coin = ClientCoin::query()->where('client_id', $client->id)->with('coin_price')->orderByDesc('amount')->get();
        }

        return view('profile.wallet.index', compact('client_coin'));
    }

}
