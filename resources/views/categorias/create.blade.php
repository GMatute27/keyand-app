@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
<form action="{{url('/categoria')}}" method="post">
    @csrf
<input type="text" name="Nombrec" placeholder="Ingrese aqui el nombre de la categoria" required>
<br>
<input type="text" name="Descripcion" placeholder="Ingrese aqui una breve descripcion del producto" required>
<br>
<input type="submit">
</form>
<a href="{{route('categoria.index')}}">Volver</a>