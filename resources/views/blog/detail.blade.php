<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ url('blog')}}" class="navbar-brand">Larablog</a>
        <div class="d-flex">
            <a class="btn btn-warning" href="{{ url('blog/create')}}">Agregar entrada</a>
        </div>
    </div>
</nav>


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

<footer>Creado por &reg; Lucas Jesús Córdoba</footer>