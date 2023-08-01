<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyTrade extends Model {
    use HasFactory;

    protected $fillable = [
        'trader_id',
        'client_id',
        'api_key'
    ];


}
