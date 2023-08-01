<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\CoinPrice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __invoke() {

        $client = auth()->guard('clients')->user();

        $favorite_coins = CoinPrice::query()->whereHas('favorite', function(Builder $query) use ($client) {
            $query->where('client_id', $client->id);
        })->get();

        $coins = CoinPrice::all();

        return view('profile.dashboard', compact('client', 'favorite_coins', 'coins'));
    }

}
