<form action="{{url('/categoria/'. $categoria->idc)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
<input type="text" name="Nombrec" placeholder="Ingrese aqui el nombre de la categoria" required value="{{ $categoria->Nombrec }}">
<br>
<input type="text" name="Descripcion" placeholder="Ingrese aqui una breve descripcion del producto" required value="{{$categoria->Descripcion}}">
<br>
<input type="submit">
</form>
<a href="{{route('categoria.index')}}">Volver</a>