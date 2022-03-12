@extends('layout.main')
@section('title', 'Cadastro de Cliente')
@section('content')

    <form action="/saveclient" method="post">
        @csrf
        <div class="form-group col-md-4">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente" required>
        </div>
        <div class="form-group col-md-4">
            <label for="title">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" required placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="form-group col-md-4">
            <label for="title">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua ..., Nº ...">
        </div>
        <div id="btn-submit" class="form-group col-md-4">
            <input type="submit" class="btn btn-dark" value="Cadastrar">
        </div>

    </form>

@endsection
