<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;

class TerceiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $nome, $idade)
    {

        Log::debug("Passou pelo TerceiroMiddleware![nome = $nome, idade = $idade]");
        return $next($request);
    }
}
