<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteCoin extends Model{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'coin_price_id',
    ];


}
