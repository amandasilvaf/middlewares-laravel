<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class UsuarioController extends Controller
{

    public function __construct(){
       // $this->middleware('primeiro');
    }

    // OBS: simulação de uma view apenas para demonstrar o uso do middleware,
    //obviamente o index retornaria a view('usuarios'). 
    public function index(){
        Log::debug('UsuarioController@index');
        return '<h3>Todos os usuários</h3>' .
            '<ul>' . 
                '<li>Amanda</li>' . 
                '<li>Ana</li>' .
                '<li>Maria</li>' . 
            '</ul>' ;
    }
}
