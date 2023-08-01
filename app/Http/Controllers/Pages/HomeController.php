<?php

namespace App\Http\Controllers\Pages;

use App\CoinPrice\CoinPrice;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function __invoke(Request $request){

        new CoinPrice(setting('site.update') , 30);

        $last_blog = Blog::query()->orderByDesc('created_at')->take(4)->get();

        $home_coins = \App\Models\CoinPrice::query()->where('is_home' , true)->get();

        return view('pages.home' , compact('last_blog' , 'home_coins'));
    }
}
