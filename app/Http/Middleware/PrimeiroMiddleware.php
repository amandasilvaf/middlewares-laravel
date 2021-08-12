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
        
        Log::debug('Passou pelo PrimeiroMiddleware! ANTES');
        // Se eu quisesse interceptar a requisição antes de chegar ao controller,
        // seria aqui que eu faria alguma operação com ela!
        //return response('Parando a cadeia de chamadas!');
        $response = $next($request); 
        Log::debug('Passou pelo PrimeiroMiddleware! DEPOIS');
        //return $response;
        return response('Alterei o que veio do UsuarioController@index!');
    }
}
