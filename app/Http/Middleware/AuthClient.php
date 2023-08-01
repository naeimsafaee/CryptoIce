<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthClient{

    public function handle($request, Closure $next){

        if(!Auth::guard('clients')->check())
            return redirect()->route('login');

        return $next($request);
    }
}
