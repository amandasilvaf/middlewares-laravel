<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtos = ["Notebook", "Mouse", "SmartWatch"];

    public function __construct(){
        $this->middleware('produtoAdmin');
    }

    public function index(){
        echo "<h3>Produtos:</h3>";
        echo "<ol>";
            foreach($this->produtos as $p){
                echo "<li>{$p}</li>";
            }
        echo"</ol>";
    }
}
