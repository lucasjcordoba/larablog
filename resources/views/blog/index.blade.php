Inicio

<table class="table table-light">

    <!--Nombres de las columnas-->
    <thead class="thead-light">
        <tr>
            <th>Posicion</th>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Imagen</th>
        </tr>
    </thead>

    <!--Contenido de cada columna-->
    <tbody>
    
    <!-- Recorre la variable $blogs creada en el método index del Controller -->
    @foreach ($blogs as $blog)
        
    
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$blog->name}}</td>
            <td>{{$blog->content}}</td>
            <td>
                <img src="{{ asset('storage').'/' .$blog->image}}" alt="" width="200">
            </td>
        </tr>
        <td>
            <a href="{{url('/blog/'.$blog->id.'/edit')}}">
                Editar
            </a>


            <form action="{{url('blog/'.$blog->id)}}" method="post">
            <!--TOKEN-->
            {{ csrf_field() }}

            <!--Determino el tipo de solicitud que se hace(DELETE)-->
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
        </td>

        @endforeach

    </tbody>
</table>