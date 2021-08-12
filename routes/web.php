<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\PrimeiroMiddleware;
use App\Http\Middleware\SegundoMiddleware;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\ProdutoMiddleware;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/usuarios', [UsuarioController::class, 'index'])
//         ->middleware('primeiro','segundo');

// Route::get('/terceiro', function(){
//     return('Teste TerceiroMiddleware com passagem de parâmetro.');
// })->middleware('terceiro:joao,23');


Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/negado', function(){
    return "Acesso negado";
});

Route::post('/login', function(Request $req){

    $login_ok = false;

    switch($req->input('user')){
        case 'joao':
            $login_ok = $req->input('password') === "senhaJoao";
            break;

        case 'amanda':
            $login_ok = $req->input('password') === "senhaAmanda";
            break;
        default: $login_ok = false;
    }

    if($login_ok){
        $login = ['user' -> $req->input('user')];
        $req->session()->put('login', $login);
        return response("Login Ok", 200);
    }else{
        $req->session()->flush();
        return response("Erro ao logar", 404);
    }
});

Route::get('/logout', function(Request $request){
    $request->session()->flush();
    return response("Deslogado com sucesso", 200);
});