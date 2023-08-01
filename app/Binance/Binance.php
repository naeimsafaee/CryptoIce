<?php

namespace App\Binance;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use TCG\Voyager\Models\Setting;

class Binance {

    private $api;
    private $base_url = "https://api3.binance.com/api/v3/";

    public function __construct($api) {
        $this->api = $api;
    }

    public function order_book($symbol = 'BTCUSDT' , $limit = 10) {
        return $this->request('GET' , $this->get_end_point_api('depth') , ['symbol' => $symbol , 'limit' => $limit]);
    }

    public function price($symbol = 'BTCUSDT') {
        $response = $this->request('GET' , $this->get_end_point_api('ticker/price') , ['symbol' => $symbol]);
        if(!is_array($response))
            return 0;
        return $response["price"];
    }

    public function resent_trades($symbol = 'BTCUSDT' , $limit = 10) {
        return $this->request('GET' , $this->get_end_point_api('trades') , ['symbol' => $symbol , 'limit' => $limit]);
    }


    private function request($method, $url, $data = []){

        $method = strtolower($method);

        if($method === "get"){
            $response = Http::get($url, $data);
        } else {
            $response = Http::post($url, $data);
        }

        if($response->status() != 200)
            return $response->body();

        return json_decode($response, true);
    }

    private function get_end_point_api($end_point) {
        return $this->base_url . $end_point;
    }

}