<?php

namespace App\Http\Controllers;
use App\Pedido;


use Request;
// use App\Auth;
use Illuminate\Support\Facades\Auth;

class PagamentoController extends Controller
{
    
    public function pagamento() {
        $pedido = Pedido::all()->last();

        return response()->json($pedido);
    }

    public function pagar() {
        $pedido = Pedido::all()->last();

        $pedido->status = Request::get('status');

        $pedido->save();

        return response()->json($pedido, 201);
    }
}
