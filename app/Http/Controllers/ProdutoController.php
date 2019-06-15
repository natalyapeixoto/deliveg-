<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function getProdutos(){
        $produto = Produto::all();

       return response()->json($produto);
    }
}
