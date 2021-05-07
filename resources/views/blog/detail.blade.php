Detalle
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
    
        
    
        <tr>
            <td>{{$detail->name}}</td>
            <td>{{$detail->content}}</td>
            <td>
                <img src="{{ asset('storage').'/' .$detail->image}}" alt="" width="200">
            </td>
            <td>{{$detail->created_at}}</td>
        </tr>
        <td>
            <a href="{{url('/blog/'.$detail->id.'/edit')}}">
                Editar
            </a>


            <form action="{{url('blog/'.$detail->id)}}" method="post">
            <!--TOKEN-->
            {{ csrf_field() }}

            <!--Determino el tipo de solicitud que se hace(DELETE)-->
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>


            </form>
        </td>

    </tbody>
</table>