<form action="{{route('/inicia-sesion')}}" method="POST">
    @csrf
<input type="email" name="email" required >
<input type="password" name="password" required >
<div class="btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="checkbox" name="remember_token"> Recordar sesion?
    </label>
</div>
<input type="submit">
</form>