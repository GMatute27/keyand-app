<form action="{{route('/validar-registro')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Ingrese su nombre" autocomplete="disable">
    <input type="text" name="apellido" placeholder="Ingrese su apellido" autocomplete="disable">
    <input type="email" name="email" placeholder="Ingrese su correo" autocomplete="disable">
    <input type="number" name="cedula" placeholder="Ingrese su cedula" autocomplete="disable">
    <input type="text" name="num_telefono" placeholder="Ingrese su numero de telefono" autocomplete="disable">
    <input type="password" name="password" placeholder="Ingrese su contraseña" autocomplete="disable">
    <input type="password" name="password1" placeholder="Ingrese su contraseña nuevamente" autocomplete="disable">
    <input type="submit">
</form>