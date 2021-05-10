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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Larablog-Detalle de la entrada</title>
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


    <div id="main">
        <div class="container border-0 card my-3">
            <div class="card-body">
                <h5 class="card-title">{{$detail->name}}</h5>
                <p class="card-text">{{$detail->content}}</p>
                <p class="card-text"><small class="text-muted">{{$detail->created_at}}</small></p>
            </div>
            <img class="my-3 rounded" src="{{ asset('storage').'/' .$detail->image}}" alt="">




            <form action="{{url('blog/'.$detail->id)}}" method="post">
                <a class="btn btn-warning btn-sm" href="{{url('/blog/'.$detail->id.'/edit')}}">
                    Editar
                </a>
                <br>
                <!--TOKEN-->
                {{ csrf_field() }}

                <!--Determino el tipo de solicitud que se hace(DELETE)-->
                {{method_field('DELETE')}}
                <button class="btn btn-danger my-2" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>



            </form>
        </div>

    </div>

    <footer id="footer" class="text-center position-relative bg-secondary">
        <h1 id="creador">
            Creado por &reg; Lucas Jesús Córdoba
        </h1>

    </footer>


</body>

</html>
