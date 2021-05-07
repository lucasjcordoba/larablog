Inicio

<a href="{{ url('blog/create')}}">Agregar entrada</a>

<table class="table table-light">

    <!--Nombres de las columnas-->
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Imagen</th>
            <th>Fecha</th>

        </tr>
    </thead>

    <!--Contenido de cada columna-->
    <tbody>
    
    <!-- Recorre la variable $blogs creada en el método index del Controller -->
    @foreach ($blogs as $blog)
        
    
        <tr>
            <td>{{$blog->name}}</td>
            <td>{{$blog->content}}</td>
            <td>
                <img src="{{ asset('storage').'/' .$blog->image}}" alt="" width="200">
            </td>
            <td>{{$blog->created_at}}</td>
        </tr>
        <td>

            <a href="{{url('blog/'.$blog->id)}}">
                Ver
            </a>
        </td>

        @endforeach

    </tbody>
</table>