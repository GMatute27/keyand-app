<a href="{{route('categoria.create')}}">Nueva categoria</a>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach($categoria as $cat)<tr>
            <td>{{$cat->Nombrec}}</td>
            <td>{{$cat->Descripcion}}</td>
            <td>
                <a href="{{url( '/categoria/'.$cat->idc.'/edit' )}}"> 
                Modificar
            </a> 
                <form action="{{url( '/categoria/'.$cat->idc)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('Realmente desea eliminar los datos?')" value="Eliminar">
                </form></td>
            @endforeach
        
    </tbody>
</table>