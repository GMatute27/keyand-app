<title>HOMEPAGE</title>
BIENVENIDO @auth {{Auth::user()->name}} {{Auth::user()->apellido}} @endauth
<a href="{{route('logout')}}">Salir</a>