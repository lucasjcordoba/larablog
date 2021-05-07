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
            <td>{{$blog->image}}</td>
        </tr>
        <td>Editar | Borrar</td>

        @endforeach

    </tbody>
</table>