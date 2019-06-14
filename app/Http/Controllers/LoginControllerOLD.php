<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class LoginController extends Controller
{

    public function mostrarLogin(){
        return view('entrar');
    }

    public function loginUsuario(){
       $usuarios = Usuario::all();           
       return view('login')->with($usuarios);   
    }
}
