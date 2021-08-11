<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;


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
        // Se eu quisesse interceptar a requisição antes de chegar ao controller,
        // seria aqui que eu faria alguma operação com ela!
        return $next($request);
    }
}
