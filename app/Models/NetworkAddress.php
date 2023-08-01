<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkAddress extends Model {
    use HasFactory;

    protected $fillable = ['client_id', 'network_id', 'address', 'coin_price_id', 'balance' , 'contract_address'];

    public function network() {
        return $this->hasOne(Network::class);
    }

}
