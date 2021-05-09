@extends('index.blade.php');
@section('content')

<nav id="nav" class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ url('blog')}}" class="navbar-brand">
            <img src="{{asset('../public/img/logoSW.png')}}" alt="">
        </a>
        <div class="d-flex">
            <a class="btn btn-warning" href="{{ url('blog/create')}}">Agregar entrada</a>
        </div>
    </div>
</nav>

@endsection('content')