<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrimeiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        Log::debug('Passou pelo PrimeiroMiddleware!');
        return $next($request);
    }
}
