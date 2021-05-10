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
    <title>Larablog-Crear Entrada</title>
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

    <div id="main ">
        <div class="card card-body my-5 container ">
            <form action="{{ url('/blog') }}" method="post" enctype="multipart/form-data">

                <!-- Seguridad -->
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="name" class="form-label">{{'Nombre'}}</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">{{'Descripcion'}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="image">{{'Cargar Imagen'}}</label>
                    <input class="form-control" type="file" name="image" id="image"> <br>
                </div>
                <input type="submit" class="btn btn-warning" value="Agregar">




                <a class="btn btn-success" href="{{ url('blog')}}">Inicio</a>


            </form>
        </div>
    </div>

    

    <footer id="footer" class="text-center">
        <h1 id="creador">
            Creado por &reg; Lucas Jesús Córdoba
        </h1>
        
    </footer>


</body>

</html>
