<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTransaction extends Model {
    use HasFactory;

    protected $fillable = ['client_id' , 'is_deposit' , 'status' , 'amount' , 'coin_id' , 'network_id'];

    public function coin() {
        return $this->belongsTo(CoinPrice::class , 'coin_id' , 'id');
    }

    public function network() {
        return $this->belongsTo(Network::class , 'network_id' , 'id');
    }

}
