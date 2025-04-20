<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role != 1) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
