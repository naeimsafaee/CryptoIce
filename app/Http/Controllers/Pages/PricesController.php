<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CoinPrice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PricesController extends Controller{

    public function __invoke(){

        $home_coins = CoinPrice::query()->where('is_home', true)->get();

        return view('pages.prices', compact('home_coins'));
    }

    public function prices_api(){

        $coins = CoinPrice::query();
        if(\request()->has('search') && \request()->search){
            $search = \request()->search;
            $coins = $coins->whereHas('coin', function(Builder $query) use($search) {
                $query->where('coin_name' , 'LIKE' , "%$search%")->orWhere('symbol' , 'LIKE' , "%$search%");
            });
        }

        $coins = $coins->with('coin')->paginate(10);

        return _response($coins);
    }

    public function home_prices_api(){

        $coins = CoinPrice::query()->where('is_home' , true)->with('coin')->get();

        return _response($coins);
    }

}
