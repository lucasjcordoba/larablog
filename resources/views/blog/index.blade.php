<!--CDN Bootstrap -->
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


<div class="bg-dark album py-5 bg-light">
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

<footer>Creado por &reg; Lucas Jesús Córdoba</footer>
