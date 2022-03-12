@extends('layout.main')
@section('title', 'Registrar Pedido')
@section('content')

    <form action="/pedidos/confpedido" method="get">
        @csrf
        {{-- <div class="icon-cadastro">
            <a href="/registerclient">
                <button type="button" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
                        </path>
                    </svg>
                    <p>Adicionar Novo Cliente</p>
                </button>
            </a>
        </div> --}}

        <label id="title">Nome:</label>
        <div class="form-group col-md-4" id="consulta">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" required>
        </div>

        <label id="title">Sabor:</label>
        <div class="form-group col-md-4">
            <select class="form-select" aria-label="Default select example" id="sabor" name="sabor">
                @foreach ($cardapios as $cardapio)
                    @if ($cardapio->bebida == '0' && $cardapio->ativo == 'on')
                        <option selected> {{ $cardapio->produto }} </option>
                    @endif
                @endforeach
                <option selected>Pizza sabor ...</option>
            </select>
        </div>

        <label id="title">Bebida:</label>
        <div class="form-group col-md-4">
            <select class="form-select" aria-label="Default select example" id="bebida" name="bebida">
                @foreach ($cardapios as $cardapio)
                    @if ($cardapio->bebida == 'on' && $cardapio->ativo == 'on')
                        <option selected> {{ $cardapio->produto }} </option>
                    @endif
                @endforeach
                <option selected>Escolha a bebida </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="title">Observações:</label>
            <input type="text" class="form-control" id="obs" name="obs" placeholder="Observações">
        </div>
        <div class="form-group col-md-4">
            <select class="form-select" aria-label="Default select example" id="pagamento" name="pagamento">
                <option selected>Escolha a forma de pagamento</option>
                <option value="1">Dinheiro</option>
                <option value="2">Cartão Crédtio/Débito</option>
                <option value="3">PIX</option>
            </select>

            <input class="form-check-input" type="checkbox" name="entrega" id="entrega">
            <label class="form-check-label" for="entrega">Entregar em casa</label>
        </div>

        <input type="submit" id="btn-submit" class="btn btn-dark" value="Fazer Pedido">
    </form>

@endsection
