@extends('layout.main')
@section('title', 'Confirmação do Pedido')
@section('content')

    <div class="row d-flex justify-content-center" id="card-confirma">
        <div class="card border-dark mb-3" style="max-width: 20rem;" id="conf-itens">
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
                    <button class="btn btn-outline-success">Confirmar</button>
                </a>
                <button class="btn btn-outline-danger">Cancelar</button>
            </div>
        </div>
    </div>


@endsection
