<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.png">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="nav-item nav-link" href="/">Home</a>
        <a class="nav-item nav-link" href="/cardapio">Cardápio</a>
        <a class="nav-item nav-link" href="/producao">Produção</a>
        <a class="nav-item nav-link" href="/pedidos">Pedidos</a>
        <a class="nav-item nav-link" href="/relatorios">Relatórios</a>
        <a class="nav-item nav-link" href="/register">Cadastrar Funcionário</a>
    </nav>
    @yield('content')

    
</body>

</html>
