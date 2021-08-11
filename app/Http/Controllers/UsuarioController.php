<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // OBS: simulação de uma view apenas para demonstrar o uso do middleware,
    //obviamente o index retornaria a view('usuarios'). 
    public function index(){
        return '<h3>Todos os usuários</h3>' .
            '<ul>' . 
                '<li>Amanda</li>' . 
                '<li>Ana</li>' .
                '<li>Maria</li>' . 
            '</ul>' ;
    }
}
