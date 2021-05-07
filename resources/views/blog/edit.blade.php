Editar Blog

<form action="{{url('blog/'.$blog->id)}}" method="post" enctype="multipart/form-data">
    <!--TOKEN-->
    {{ csrf_field() }}

    <!--Determino el tipo de solicitud que se hace(PATCH), en éste caso se accede al método update del Controller-->
    {{method_field('PATCH')}}

    
    <label for="name">{{'Nombre'}}</label>
    <input type="text" name="name" id="name" value="{{$blog->name}}"> <br>
    
    <label for="content">{{'Descripcion'}}</label>
    <input type="text" name="content" id="content" value="{{$blog->content}}"> <br>
    
    <label for="image">{{'Cargar Imagen'}}</label>
    <img src="{{ asset('storage').'/' .$blog->image}}" alt="" width="200">
    <br>
    <input type="file" name="image" id="image" value="{{$blog->image}}"> <br>
    
    <input type="submit"  value="Editar" >

    <a href="{{ url('blog')}}">Inicio</a>
    
    
</form>