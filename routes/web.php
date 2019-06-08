<?php

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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/entrar', function () {
    return view('entrar');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/loja',  'LojaController@mostrarProdutos');
Route::get('/loja/{id_categoria}', 'LojaController@filtrarProdutosPorCategoria');

Route::get('/perfil', function() {
    return view('perfil');
});

Route::get('/cadastro', function() {
    return view('cadastro');
});







