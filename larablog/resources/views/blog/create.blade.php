Crear Blog

<form action="{{ url('/blog') }}" method="post" enctype="multipart/form-data">

<!-- Seguridad -->
{{ csrf_field() }}

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre"> <br>

<label for="descripcion">{{'Descripcion'}}</label>
<input type="text" name="descripcion" id="descripcion"> <br>

<label for="image">{{'Cargar Imagen'}}</label>
<input type="file" name="image" id="image"> <br>

<input type="submit"  value="Agregar" >


</form>