<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocal{

    public function handle(Request $request, Closure $next){

        if(!in_array($request->segment(1), ['en', 'fr' , 'de'])){
            App::setLocale("en");
            URL::defaults(['locale' => "en"]);
        } else {
            App::setLocale($request->segment(1));
            URL::defaults(['locale' => $request->segment(1)]);
        }


        $request->route()->forgetParameter('locale');

        return $next($request);
    }
}
