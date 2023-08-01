<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawRequest extends Model {
    use HasFactory;

    protected $fillable = [
        'client_id',
        'address',
        'tx_id',
        'transaction_id',
        'amount',
        'coin_id',
    ];

}
