<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function index(Request $request){
        $cardapio = new Cardapio();
        $cardapio->produto = $request->produto;
        $cardapio->valor = $request->valor;
        $cardapio->ativo = $request->input('ativo', 0);
        $cardapio->bebida = $request->input('bebida', 0);

        $cardapio->save();

        return redirect('/')->with('msg','Produto "' . $cardapio->produto . '" cadastrado com sucesso!');
    }
}
