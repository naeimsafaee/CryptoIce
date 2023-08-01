<?php

namespace App\Http\Controllers\Trade;

use App\Binance\Binance;
use App\Http\Controllers\Controller;
use App\Http\Requests\ButManualRequest;
use App\Http\Requests\SellManualRequest;
use App\Models\Buy;
use App\Models\ClientCoin;
use App\Models\ClientTransaction;
use App\Models\CoinList;
use App\Models\CoinPrice;
use App\Models\Order;
use App\Models\Sell;
use Illuminate\Http\Request;

class TradeController extends Controller {

    public function __invoke() {

        $client = auth()->guard('clients')->user();

        if (!\request()->has('trade'))
            $trade = "BTC_USDT";
        else
            $trade = \request()->trade;

        $trade = explode('_', $trade);

        $coin = CoinList::query()->where('symbol', $trade[0])->firstOrFail();

        $coin_price = CoinPrice::query()->where('coin_id', $coin->id)->firstOrFail();

        $binance = new Binance('');

        $order_book = $binance->order_book(strtoupper($trade[0] . $trade[1]));
        $price = $binance->price(strtoupper($trade[0] . $trade[1]));

        $recent = $binance->resent_trades(strtoupper($trade[0] . $trade[1]), 1000);
        $recent = collect($recent)->groupBy('price');

        $orders = Order::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
        ])->get();

        $max_buy = $client->wallet / $price;

        $client_max_coin = 0;

        $client_coin = ClientCoin::query()->where([
            'client_id' => $client->id,
            'coin_id' => $coin_price->id
        ])->first();

        if ($client_coin)
            $client_max_coin = $client_coin->amount;

        $transactions = ClientTransaction::query()->where('client_id', $client->id)->orderByDesc('created_at')->get();
        $client_coin = ClientCoin::query()->where('client_id', $client->id)->get();

        return view('trade.trade', compact('coin_price', 'trade', 'order_book', 'price'
            , 'recent', 'orders', 'max_buy', 'client', 'client_max_coin', 'transactions', 'client_coin'));
    }

    public function recentAndOrders(Request $request) {

        $trade = \request()->trade;

        $trade = explode('_', $trade);

        $binance = new Binance('');

        $order_book = $binance->order_book(strtoupper($trade[0] . $trade[1]));

        $recent = $binance->resent_trades(strtoupper($trade[0] . $trade[1]), 1000);
        $recent = collect($recent)->groupBy('price');

        return response()->json([
            'order' => $order_book,
            'recent' => $recent->take(10)
        ]);
    }

    public function buy_crypto(Request $request) {

        $coin = CoinPrice::query()->findOrFail($request->coin_id);

        $price = (float)str_replace(",", "", $request->buy_price_input);

        $client = auth()->guard('clients')->user();
        $wallet = $client->wallet;

        if ($request->has('buy_size_input') && $request->buy_size_input) {
            $size = (float)$request->buy_size_input;
        } else {
            $percent_size = $request->buy_percent_of_size;
            $size = (float)($wallet * $percent_size / 100);
        }

        if ($size > $wallet)
            return response()->json("bad", 400);

        $amount = $size / $price;

        $percent = $size / $wallet * 100;

        if ($client->is_trader) {
            $copied_clients = $client->copied_clients;
            foreach($copied_clients as $copied_client) {

                $client_wallet = $copied_client->wallet;

                $client_size = $client_wallet * $percent / 100;

                if ($size === 0)
                    continue;

                $client_amount = $client_size / $price;

                Order::query()->create([
                    'client_id' => $copied_client->id,
                    'coin_id' => $coin->id,
                    'amount' => $client_amount,
                    'price' => $price,
                    'paid_amount' => $client_size,
                ]);

            }
        }

        Order::query()->create([
            'client_id' => $client->id,
            'coin_id' => $coin->id,
            'amount' => $amount,
            'price' => $price,
            'paid_amount' => $size,
        ]);

        return _response("ok");
    }

    public function sell_crypto(Request $request) {

        $coin = CoinPrice::query()->findOrFail($request->coin_id);

        $price = (float)str_replace(",", "", $request->sell_price_input);
        $client = auth()->guard('clients')->user();

        $client_coin = 0;

        $_client_coin = ClientCoin::query()->where([
            'client_id' => $client->id,
            'coin_id' => $coin->id
        ])->first();

        if ($_client_coin)
            $client_coin = $_client_coin->amount;

        if ($client_coin === 0)
            return response()->json("bad", 400);

        if ($request->has('sell_size_input') && $request->sell_size_input) {
            $size = (float)$request->sell_size_input;
        } else {
            $percent_size = $request->sell_percent_of_size;
            $size = (float)($client_coin * $percent_size / 100);
        }

        if ($size > $client_coin)
            return response()->json("bad", 400);

        $paid_amount = $size * $price;

        $percent = $size / $client_coin * 100;

        if ($client->is_trader) {
            $copied_clients = $client->copied_clients;
            foreach($copied_clients as $copied_client) {

                $_copied_client_coin = ClientCoin::query()->where([
                    'client_id' => $copied_client->id,
                    'coin_id' => $coin->id
                ])->first();

                $copied_client_coin = 0;

                if ($_copied_client_coin)
                    $copied_client_coin = $_copied_client_coin->amount;

                if ($copied_client_coin === 0)
                    continue;

                $client_size = $copied_client_coin * $percent / 100;

                $client_paid_amount = $client_size * $price;

                Order::query()->create([
                    'client_id' => $copied_client->id,
                    'coin_id' => $coin->id,
                    'amount' => $client_size,
                    'price' => $price,
                    'paid_amount' => $client_paid_amount,
                    'is_buy' => false
                ]);
            }
        }

        Order::query()->create([
            'client_id' => $client->id,
            'coin_id' => $coin->id,
            'amount' => $size,
            'price' => $price,
            'paid_amount' => $paid_amount,
            'is_buy' => false
        ]);

        return _response("ok");
    }

    public function cancel_order($order_id) {

        $client = auth()->guard('clients')->user();

        $order = Order::query()->findOrFail($order_id);
        if ($order->client_id != $client->id)
            return abort(403);

        $order->has_canceled = true;
        $order->save();

        return redirect()->back();
    }

    public function show_manual_buy() {
        if (!\request()->has('trade'))
            $trade = "BTC_USDT";
        else
            $trade = \request()->trade;

        $trade = explode('_', $trade);

        $coin = CoinList::query()->where('symbol', $trade[0])->firstOrFail();

        $coin_price = CoinPrice::query()->where('coin_id', $coin->id)->firstOrFail();

        return view('trade.trade_manual', compact('trade', 'coin_price'));
    }

    public function submit_manual_buy(ButManualRequest $request) {
        $req = Buy::query()->create([
            'coin_price_id' => $request->coin,
            'address' => "",
            'amount' => $request->amount,
        ]);

        $client = auth()->guard('clients')->user();

        $price = CoinPrice::query()->find($request->coin)->price;

        $wallet = $request->amount * $price;

        $client_coin = ClientCoin::query()->where([
            'client_id' => $client->id,
            'coin_id' => $request->coin
        ])->first();

        $client->wallet -= $wallet;
        $client->save();

        $client_coin->amount += $request->amount;
        $client_coin->save();

        return view('trade.status_manuall', compact('req'));
    }

    public function show_manual_sell() {

        if (!\request()->has('trade'))
            $trade = "BTC_USDT";
        else
            $trade = \request()->trade;

        $trade = explode('_', $trade);

        $coin = CoinList::query()->where('symbol', $trade[0])->firstOrFail();

        $coin_price = CoinPrice::query()->where('coin_id', $coin->id)->firstOrFail();

        return view('trade.sell_trade_manual', compact('trade', 'coin_price'));
    }

    public function submit_manual_sell(SellManualRequest $request) {
        $req = Sell::query()->create([
            'coin_price_id' => $request->coin,
            'address' => '',
            'amount' => $request->amount,
            'tx_id' => '',
        ]);
        $client = auth()->guard('clients')->user();

        $price = CoinPrice::query()->find($this->coin)->price;

        $wallet = $request->amount * $price;

        $client_coin = ClientCoin::query()->where([
            'client_id' => $client->id,
            'coin_id' => $request->coin
        ])->first();

        $client->wallet += $wallet;
        $client->save();

        $client_coin->amount -= $request->amount;
        $client_coin->save();

        return view('trade.status_manuall', compact('req'));
    }

}
