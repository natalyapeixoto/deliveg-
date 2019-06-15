<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class PerfilController extends Controller
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

        
    public function mostrarPerfil (){
        $usuarios = Usuario::all();         
        return view('perfil')->with('usuarios', $usuarios);   
    }
}
