<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCoin extends Model {
    use HasFactory;

    protected $fillable = ['client_id', 'coin_id'];

    public function getAmountAttribute($attr) {
        if(!auth()->guard('clients')->check())
            return $attr;
        $not_available_orders = Order::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'has_filled' => false,
            'has_canceled' => false,
            'is_buy' => false,
            'coin_id' => $this->coin_id
        ])->sum('amount');

        $last_sell_orders = Order::query()->where([
            'client_id' => auth()->guard('clients')->user()->id,
            'has_filled' => true,
            'has_canceled' => false,
            'is_buy' => false,
            'coin_id' => $this->coin_id
        ])->sum('amount');

        return $attr - $not_available_orders - $last_sell_orders;
    }

    public function coin_price() {
        return $this->belongsTo(CoinPrice::class, 'coin_id', 'id');
    }

}
