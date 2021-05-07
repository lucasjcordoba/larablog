Crear Blog

<form action="{{ url('/blog') }}" method="post" enctype="multipart/form-data">

<!-- Seguridad -->
{{ csrf_field() }}

<label for="name">{{'Nombre'}}</label>
<input type="text" name="name" id="name"> <br>

<label for="content">{{'Descripcion'}}</label>
<input type="text" name="content" id="content"> <br>

<label for="image">{{'Cargar Imagen'}}</label>
<input type="file" name="image" id="image"> <br>

<input type="submit"  value="Agregar" >

<a href="{{ url('blog')}}">Inicio</a>


</form>