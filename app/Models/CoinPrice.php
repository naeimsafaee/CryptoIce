<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinPrice extends Model {

    use HasFactory;

    protected $fillable = ['history'];

    protected $appends = ['is_favorite' , 'buy_price' , 'sell_price'];

    public function coin() {
        return $this->belongsTo(CoinList::class, 'coin_id', 'id');
    }

    public function favorite() {
        return $this->hasOne(FavoriteCoin::class, 'coin_price_id', 'id');
    }

    public function networks() {
        return $this->belongsToMany(Network::class, CoinNetwork::class);
    }

    public function client_coin() {

        $client_coin = ClientCoin::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'coin_id' => $this->id
        ])->get();

        if ($client_coin->count() > 0) {
            return $client_coin->firstOrFail()->amount;
        } else {
            return 0;
        }
    }

    public function getIsFavoriteAttribute() {
        if (!auth()->guard('clients')->check())
            return false;

        return FavoriteCoin::query()->where([
                'coin_price_id' => $this->id,
                'client_id' => auth()->guard('clients')->user()->id
            ])->count() > 0;
    }

    public function getBuyPriceAttribute() {
        return $this->price;
    }

    public function getSellPriceAttribute() {
        if($this->tolerance == 0)
            return $this->price;
        return $this->price - ((float)$this->tolerance * $this->price / 100);
    }

}
