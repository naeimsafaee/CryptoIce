<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HostMiddleware {

    public function handle(Request $request, Closure $next) {

        $domains = ['cryptooice.com', '127.0.0.1'];
        if (!in_array($_SERVER['SERVER_NAME'], $domains)) {
            abort(403);
        }

        return $next($request);
    }
}
