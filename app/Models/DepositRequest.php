<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Model {
    use HasFactory;

    protected $fillable = [
        'tx_id',
        'coin_price_id',
        'network_id',
        'client_id',
        'amount',
    ];

}
