<form action="{{url('productos/'.$productos->idp)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <br>
<input type="text"name="Nombre" placeholder="Ingrese el nombre del producto" value="{{ $productos->Nombre }}" required>
<br>
<input type="number" value="{{ $productos->precio }}" step="0.01" name="precio" placeholder="Ingrese el precio del producto" required>
<br>
<input type="text" placeholder="Ingrese el color del producto" name="color" required value="{{ $productos->color}}">
<br>
<input type="text" placeholder="Ingrese la descripcion del producto" name="descripcion" required value="{{ $productos->descripcion}}">
    <br>
<select name="id_categorias" id="" required>
<option value="NULL">Seleccione una opcion</option>
    @foreach ($categoria as $cat)
        <option value="{{$cat->idc}}" @if ($cat->idc==$productos->id_categorias) @selected(true) @endif > {{$cat->Nombrec}}  </option>
    @endforeach
</select>

<br>
<img src="{{asset('storage'.'/'.$productos->imagen)}}" alt="">
<input type="file" placeholder="Seleccione la foto del producto" name="imagen" value="{{ old('image',$productos->imagen)}}" >
<br>
<br>
<input type="number" placeholder="Ingrese el codigo del producto" name="codproducto"required value="{{ $productos->codproducto}}">
<br>
<input type="text" placeholder="Ingrese todas las tallas disponibles del producto" name="tallas"required value="{{ $productos->tallas}}">
<br>
<br>
<input type="submit">
</form>
<a href="{{route('productos.index')}}">volver</a>