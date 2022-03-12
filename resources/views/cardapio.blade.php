@extends('layout.main')
@section('title', 'Cardápio')
@section('content')

    <form action="/saveproduct" method="post">
        @csrf
        <div class="form-group col-md-4">
            <label for="title">Produto:</label>
            <input type="text" class="form-control" id="produto" name="produto" placeholder="Pizza de ..." required>
        </div>
        <div class="form-group col-md-4">
            <label for="title">Valor:</label>
            <input type="float" class="form-control" id="valor" name="valor" placeholder="00.00" required>
        </div>
        <div class="form-group col-md-4" id="form-cardapio">
            <label for="title">Ativo: </label>
            <input type="checkbox" class="form-check-input" checked id="ativo" name="ativo">
            <label for="title">Bebida: </label>
            <input type="checkbox" class="form-check-input" id="bebida" name="bebida">
        </div>
        <div id="btn-submit" class="form-group col-md-4">
            <input type="submit" class="btn btn-dark" value="Cadastrar">
        </div>

    </form>

@endsection
