<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CoinList;
use App\Models\CoinPrice;
use App\Models\FavoriteCoin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FavoriteController extends Controller{

    public function index(){
        //
    }


    public function store(Request $request){

        $coin_price = CoinPrice::query()->findOrFail($request->coin_id);

        $favorite_coin = FavoriteCoin::query()->updateOrCreate([
            'client_id' => auth()->guard('clients')->user()->id,
            'coin_price_id' => $coin_price->id
        ]);

        $coin = CoinPrice::query()->whereHas('favorite' , function(Builder $query) {
                $query->where('client_id' , auth()->guard('clients')->user()->id);
        })->with('coin')->get();

        return response()->json($coin);
    }


    public function show($id){
        //
    }

    public function update(Request $request, $id){
        //
    }


    public function destroy($id){
        FavoriteCoin::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'coin_price_id' => $id
        ])->firstOrFail()->delete();
        return response()->json("ok");
    }
}
