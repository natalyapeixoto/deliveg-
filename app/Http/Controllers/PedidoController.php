<?php

namespace App\Http\Controllers;
use App\Pedido;
use Illuminate\Http\Request;

// use App\Auth;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function setNewPedido(Request $request){
        $jsonPedido = $request->input('pedido');
        $arrayPedido = json_decode($jsonPedido);

        var_dump($arrayPedido);  
        echo '<br>';
        var_dump($arrayPedido->items);  


        // {"items":"{\"30\":3,\"Pimentão Vermelho\":1}",
        // "items_id":"{\"30\":1}",
        // "total":3,
        // "status":"nao-pago"}

        $pedidos = new Pedido();
       
        $pedidos->user_id = Auth::user()->id;
        $pedidos->items = $arrayPedido->items;
        $pedidos->items_id = $arrayPedido->items_id;
        $pedidos->total = $arrayPedido->total;
        $pedidos->status = $arrayPedido->status;
       
        $pedidos->save();

        return view('pagamento')
        


    }

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
