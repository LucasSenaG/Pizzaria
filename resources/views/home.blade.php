@extends('layout.main')
@section('title', 'Confraria 340')
@section('content')

    <div id="image-container" class="col-md-12">
        <img src="/img/logo.png" class="img-fluid" alt="logo.png">
    </div>

    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
@endsection
