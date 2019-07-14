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
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/entrar', function(){
    return view('entrar');
});



Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/loja',  'LojaController@mostrarProdutos');
Route::get('/loja/{id_categoria}', 'LojaController@filtrarProdutosPorCategoria');

Route::get('/perfil', 'PerfilController@mostrarPerfil');

Route::get('/cadastro', function() {
    return view('cadastro');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('produtos', 'ProdutoController@getProdutos');

Route::post('pedidos', 'PedidoController@setNewPedido');

Route::get('/pedidos', function(){
    return view('pagamento');
});

Route::get('/sucesso', function(){
    return view('sucesso');
});

Route::post('/pagamentos', 'PagamentoController@pagar');

Route::get('/pagapedido', 'PagamentoController@pagamento');