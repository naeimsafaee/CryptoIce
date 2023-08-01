<?php

namespace App\Http\Controllers\Profile\Trader;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CopyTrade;
use App\Models\Trade;
use App\Models\Trader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CopyTraderController extends Controller {

    public function index(Request $request) {

        $most_copied_trader = Client::query()->where('is_trader' , true)->take(3)->with('trader')->get();
        $trending_trader = Client::query()->where('is_trader' , true)->take(3)->get();
        $long_terms_trader = Client::query()->where('is_trader' , true)->take(3)->get();
        $short_terms_trader = Client::query()->where('is_trader' , true)->take(3)->get();

        if($request->has('sort')){
            if($request->sort === "most_copied"){
                $sort_trader = clone($most_copied_trader);
                $title = "Most Copied";
            } elseif($request->sort === "trending"){
                $sort_trader = clone($trending_trader);
                $title = "Trending";
            } elseif($request->sort === "long"){
                $sort_trader = clone($long_terms_trader);
                $title = "Long-Term Stock Investors";
            } else {
                $sort_trader = clone($short_terms_trader);
                $title = "Short-Term Stock Investors";
            }

            return view('profile.copy_trade.copy_trade_sort' , compact('sort_trader' , 'title'));
        }

        return view('profile.copy_trade.copy_trade_all' , compact('most_copied_trader' ,
            'trending_trader' , 'long_terms_trader' , 'short_terms_trader'));
    }

    public function show($user_name) {

        if(auth()->guard('clients')->user()->username === $user_name)
            return redirect()->route('profile');

        $client = Client::query()->where('username' , $user_name)->firstOrFail();

        $trades = Trade::query()->where('trader_id' , $client->trader->id)
            ->select('*',
                DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->orderBy('created_at')->get();

        $grouped_trades = $trades->groupBy('month');

        $copiers = CopyTrade::query()->where('trader_id' , $client->trader->id)
            ->whereDate('created_at' , '>' , Carbon::now()->subDays(7))
            ->select('*',
                DB::raw('YEAR(created_at) year, MONTH(created_at) month, Day(created_at) day'))
            ->get();

        $last_7_days_copiers_count = $copiers->count();

        $copiers = $copiers->groupBy('day');

        $last_last_7_days_copiers_count = CopyTrade::query()->where('trader_id' , $client->trader->id)
            ->whereDate('created_at' , '>=' , Carbon::now()->subDays(14))
            ->whereDate('created_at' , '<' , Carbon::now()->subDays(7))
            ->count();

        $is_copied = CopyTrade::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'trader_id' => $client->trader->id
        ])->count() > 0;

        return view('profile.trader.view_trader_profile' , compact('client' , 'trades' , 'copiers'
            , 'last_last_7_days_copiers_count' , 'last_7_days_copiers_count' , 'grouped_trades' , 'is_copied'));
    }

    public function store(Request $request) {

        $client = auth()->guard('clients')->user();

        $trader = Trader::query()->findOrFail($request->trader_id);
        if($client->wallet < $trader->price)
            return response()->json("not enough money!" , 400);

        CopyTrade::query()->create([
            'trader_id' => $trader->id,
            'client_id' => $client->id,
            'api_key' => $request->api_key
        ]);

        return _response("ok");
    }

}
