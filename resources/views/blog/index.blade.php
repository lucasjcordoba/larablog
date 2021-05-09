<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://allfont.es/allfont.css?fonts=star-jedi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/mi_estilo.css?v=<?php echo(rand()); ?>" />
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title> Larablog-Home</title>
</head>

<body>


    <nav id="nav" class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ url('blog')}}" class="navbar-brand">
                <img id="logo" src="{{asset('../public/img/logoSW.png')}}" alt="">
            </a>
            <div class="d-flex">
                <a class="btn btn-warning" href="{{ url('blog/create')}}">Agregar entrada</a>
            </div>
        </div>
    </nav>


    <div id="main" class="album py-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <!-- Recorre la variable $blogs creada en el método index del Controller -->
                @foreach ($blogs as $blog)

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage').'/' .$blog->image}}" class="card-img-top h-100" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">{{$blog->name}}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('blog/'.$blog->id)}}" class="btn btn-primary">Ver</a>
                                </div>
                                <small class="text-muted">{{$blog->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach




            </div>
        </div>
    </div>

    <footer id="footer" class="text-center bg-secondary">
        <h1 id="creador">
            Creado por &reg; Lucas Jesús Córdoba
        </h1>
    </footer>
</body>

</html>
