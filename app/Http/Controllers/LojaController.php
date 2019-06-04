<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class LojaController extends Controller
{
    public function mostrarProdutos () {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('loja')->with('categorias', $categorias)->with('produtos', $produtos);
    }

    public function filtrarProdutosPorCategoria ($id) {
        $produtos = Produto::where('id_categoria', '=', $id)->get();
        $categorias = Categoria::all();
        return view('loja')->with('produtos', $produtos)->with('categorias', $categorias);
    }
 }
