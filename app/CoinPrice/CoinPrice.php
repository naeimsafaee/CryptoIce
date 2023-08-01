<?php

namespace App\CoinPrice;

use App\Models\CoinList;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Http;
use TCG\Voyager\Models\Setting;

class CoinPrice{

    private $coin_prices;
    private $vs_currencies;
    private $ids;

    public function __construct($time , $minute){

        if($this->need_update($time , $minute)){

            $this->coin_prices = \App\Models\CoinPrice::query()->with('coin')->get();

            $this->vs_currencies();
            $this->ids();

            $this->fetch_price();

            Setting::query()->where('key' , 'site.update')->update(['value' => Carbon::now()]);
        }

    }

    public function fetch_lists(){

        $response = $this->request("get", "coins/list");

        foreach($response as $coin){
            CoinList::query()->create([
                'coin_name' => $coin["id"],
                "symbol" => $coin["symbol"],
            ]);
        }

        return count($response);
    }

    public function fetch_price(){

        $response = $this->request("get", "simple/price", [
            "ids" => $this->ids(),
            'vs_currencies' => $this->vs_currencies,
            'include_24hr_change' => "true",
        ]);

        $vs_currencies = $this->vs_currencies(true);

        foreach($response as $key => $data){

            foreach($vs_currencies as $currency){

                \App\Models\CoinPrice::query()->whereHas('coin', function(Builder $query) use ($key){
                    $query->where('coin_name', $key);
                })->where('vs_currencies', $currency)->update([
                    'price' => $data[$currency],
                    '24_change' => $data[$currency . "_24h_change"],
                ]);
            }

        }

        $this->fetch_history();

        return count($response);
    }

    public function fetch_history(){

        foreach($this->coin_prices as $coin){

            $coin_name = $coin->coin->coin_name;

            $response = $this->request("get", "coins/$coin_name/market_chart", [
                'vs_currency' => $coin->vs_currencies,
                'days' => "5",
                'interval' => "daily",
            ]);

            $prices = [];

            foreach($response["prices"] as $price){
                $prices[] = $price[1];
            }

            $coin->update(['history' => $prices]);

        }

    }

    private function ids($need_array = false){

        if(!$this->ids)
            $this->ids = implode(",", $this->coin_prices->map(function($coin){
                return $coin->coin->coin_name;
            })->toArray());

        if($need_array)
            return explode(",", $this->ids);

        return $this->ids;
    }

    private function vs_currencies($need_array = false){

        if(!$this->vs_currencies)
            $this->vs_currencies = implode(",", $this->coin_prices->map(function($coin){
                return $coin->vs_currencies;
            })->unique()->toArray());

        if($need_array)
            return explode(",", $this->vs_currencies);

        return $this->vs_currencies;
    }

    private function to_array($response){
        return json_decode($response, true);
    }

    private function request($method, $url, $data = []){

        $url = config('constants.coin_gecko_url') . $url;

        if($method === "get"){
            $response = Http::get($url, $data);
        } else {
            $response = Http::post($url, $data);
        }

        if($response->status() != 200)
            return $response->status();

        return $this->to_array($response);
    }

    private function need_update($time , $minute){
        $dateTime = Carbon::createFromDate($time);

        return $dateTime->addMinutes($minute)->isPast();
    }

}
