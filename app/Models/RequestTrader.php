<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTrader extends Model {
    use HasFactory;

    protected $fillable = [
        'client_id',
        'firstname',
        'lastname',
        'email',
        'username',
        'address',
        'min_btc',
        'min_buy',
    ];

    public function setStatusAttribute($status) {
        if ($status == 1) {
            $client_id = $this->client_id;

            $client = Client::query()->find($client_id);
            if ($client) {
                $client->is_trader = 1;
                $client->save();

                Trader::query()->create([
                    'client_id' => $client_id,
                    'percent' => 0,
                    'description' => '',
                    'price' => 0,
                    'average_profit' => 0,
                    'average_loss' => 0,
                ]);

            }

        }

        $this->attributes["status"] = $status;
    }

}
