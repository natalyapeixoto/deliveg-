<?php

namespace App\Http\Controllers;
use App\Pedido;

use Request;
// use App\Auth;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function setNewPedido(){
        $pedidos = new Pedido();
        
        $pedidos->user_id = Auth::user()->id;
        $pedidos->items = Request::get('items');
        $pedidos->total = Request::get('total');
        
        $pedidos->save();
        
        return response()->json($pedidos,201);

    }
}