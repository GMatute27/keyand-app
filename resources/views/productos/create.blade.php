

Mostrar todos los productos

<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
<input type="text"name="Nombre" placeholder="Ingrese el nombre del producto" required>
<br>
<input type="number" value="0.01" step="0.01" name="precio" placeholder="Ingrese el precio del producto" required>
<br>
<input type="text" placeholder="Ingrese el color del producto" name="color" required>
<br>
<input type="text" placeholder="Ingrese la descripcion del producto" name="descripcion" required>
    <br>
<select name="id_categorias" id="" required>
<option value="NULL">Seleccione una opcion</option>
    @foreach ($categoria as $cat)
        <option value="{{$cat->idc}}"> {{$cat->Nombrec}}  </option>
    @endforeach
</select>

<br>
<input type="file" placeholder="Seleccione la foto del producto" name="imagen" required>
<br>
<br>
<input type="number" placeholder="Ingrese el codigo del producto" name="codproducto"required>
<br>
<input type="text" placeholder="Ingrese todas las tallas disponibles del producto" name="tallas"required>
<br>
<br>
<input type="submit">
</form>
<a href="{{route('productos.index')}}">volver</a>