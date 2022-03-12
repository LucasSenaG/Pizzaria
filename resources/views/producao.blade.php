@extends('layout.main')
@section('title', 'Registrar Pedido')
@section('content')

<div id="itens-producao">
 @foreach ($pedidos as $pedido)
         <div class="card border-dark mb-3" style="max-width: 20rem;" id="itens-producao-in">
             <div class="card-header bg-transparent border-success">
                 <h5 class="card-title">{{ $pedido->sabor }} + {{ $pedido->bebida }}</h5>
             </div>
             <div class="card-body text-dark">
                 <p class="card-text">Cliente: {{$pedido->cliente}}<br> Valor: R$ {{$pedido->valor}} <br> 
                     Entrga em domicílio: {{$pedido->entrega}}
                     <br> Forma de pagamento: {{$pedido->pagamento}} <br>
                      Obs: {{$pedido->obs}} <br> </p>
             </div>
             <div class="card-footer bg-transparent border-success" id="botoes-pedido">
                 <a href="/">
                     <button class="btn btn-outline-success">Entregar</button>
                 </a>
                 <a href="/">
                     <button class="btn btn-outline-danger">Cancelar</button>
                 </a>
             </div>
         </div>
         
         @endforeach
        </div>


@endsection
