<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $fillable = [
        'client_id',
        'coin_id',
        'amount',
        'price',
        'paid_amount',
        'is_buy',
        'has_canceled',
        'has_filled',
    ];

    public function coin() {
        return $this->belongsTo(CoinPrice::class , 'coin_id' , 'id');
    }

}
