<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model {
    use HasFactory;

    public function coin() {
        return $this->hasOne(CoinPrice::class , 'id' , 'coin_price_id');
    }

}
