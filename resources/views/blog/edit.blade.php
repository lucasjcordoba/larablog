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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Larablog-Editar Entrada</title>
</head>

<body>

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

    <div class="container">

        <form action="{{url('blog/'.$blog->id)}}" method="post" enctype="multipart/form-data">
            <!--TOKEN-->
            {{ csrf_field() }}

            <!--Determino el tipo de solicitud que se hace(PATCH), en éste caso se accede al método update del Controller-->
            {{method_field('PATCH')}}


            <div class="mb-3">
                <label for="name" class="form-label">{{'Nombre'}}</label>
                <input value="{{$blog->name}}" type="text" class="form-control" id="exampleFormControlInput1" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">{{'Descripcion'}}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3">{{$blog->content}}</textarea>
            </div>


            <label for="image"></label>
            <img class="rounded my-3" src="{{ asset('storage').'/' .$blog->image}}" alt="" width="200">
            <br>
            <input type="file" name="image" id="image" value="{{$blog->image}}"> <br>

            
            <input class="btn btn-warning mt-2" type="submit" value="Editar">\


        </form>

    </div>

    <footer class="text-center bg-secondary">
        Creado por &reg; Lucas Jesús Córdoba
    </footer>


</body>

</html>
