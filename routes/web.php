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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/loja', function() {
    return view('loja');
});

Route::get('/perfil', function() {
    return view('perfil');
});

Route::get('/cadastro', function() {
    return view('cadastro');
});







