<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducaoController extends Controller
{
        public function exibirpedidos()
        {
            $pedidos = DB::table('pedidos')->where('status', 'Pendente')->get();
            return view('producao', ['pedidos' => $pedidos]);
        }
    
        public function encerrarpedido($idpedido){
            //Alterar status do pedido para Encerrado
        }
    
        public function canlearpedido($idpedido){
            //Alterar status do pedido para Cancelado
        }
    
        public function editarpedido($idpedido){
            //Alterar qualquer campo do pedido
        }
    
}
