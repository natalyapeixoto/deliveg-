<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;
use App\Http\Requests;


class LojaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
