<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model {
    use HasFactory;

    protected $fillable = [
        'coin_price_id',
        'address',
        'amount',
    ];

    public function coin() {
        return $this->belongsTo(CoinPrice::class , 'coin_price_id' , 'id');
    }

}
