<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model {
    use HasFactory;

    protected $fillable = [
        'client_id',
        'percent',
        'description',
        'price',
        'average_profit',
        'average_loss',
    ];

    public function trades() {
        return $this->hasMany(Trade::class);
    }

    public function copier() {
        return $this->hasMany(CopyTrade::class);
    }

}
