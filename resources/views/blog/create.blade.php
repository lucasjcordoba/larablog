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

<div class="container">
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
        <input type="submit" class="btn btn-danger" value="Agregar">




        <a class="btn btn-success" href="{{ url('blog')}}">Inicio</a>


    </form>

</div>

<footer>Creado por &reg; Lucas Jesús Córdoba</footer>