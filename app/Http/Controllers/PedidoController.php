<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;


class PedidoController extends Controller
{
    public function buscainfo()
    {
        $cardapios = DB::table('cardapios')->get();
        return view('pedidos', ['cardapios' => $cardapios]);
    }

    public function buscanmcliente($nome)
    {
        if ($nome) {
            $cardapios = DB::table('cardapios')->get();
            $nmcliente = DB::table('clientes')->where('nome', 'like', '%' . $nome . '%')->value('nome');
            return view('pedidos', ['cliente' => $nmcliente, 'cardapios' => $cardapios]);
        } else {
            $cardapios = DB::table('cardapios')->get();
            $nmcliente = 'Cliente não cadastrado';
            return view('pedidos', ['cliente' => $nmcliente, 'cardapios' => $cardapios]);
        }
    }

    public function somavalorpedido($pizza, $bebida)
    {
        $vlrpizza = DB::table('cardapios')->where('produto', $pizza)->value('valor');
        $vlrbebida = DB::table('cardapios')->where('produto', $bebida)->value('valor');

        $valorfinal = $vlrbebida + $vlrpizza;

        return $valorfinal;
    }

    public function confpedido(Request $request)
    {
        $pedido = new Pedido;

        $pedido->cliente = $request->nome;
        $pedido->qtd = $request->qtd;
        $pedido->sabor = $request->sabor;
        $pedido->bebida = $request->bebida;
        $pedido->obs = $request->obs;
        $pedido->entrega = $request->entrega;
        $pedido->valor = $this->somavalorpedido($request->sabor, $request->bebida);
        $pedido->pagamento = $request->pagamento;
        $pedido->status = "Pendente";

        $pedido->save();

        return view('confpedido', ['pedido' => $pedido]);
    }

}
