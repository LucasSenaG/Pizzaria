<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    public function index (Request $request){
        
        $clientes = new Cliente;
        $clientes->nome = $request->nome;
        $clientes->telefone = $request->telefone;
        $clientes->endereco = $request->endereco;

        $clientes->save();

        return redirect('/')->with('msg','Cliente "' . $clientes->nome.'" cadastrado com sucesso!');
    }
}
