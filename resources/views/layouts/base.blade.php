<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Recolección de Basura</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="misEstilos.css">

</head>
<body class="blue-grey lighten-5">
    @guest
        <script>
            window.location.replace("/home");
        </script>
    @else
        <!-- BARRA DE NAVEGACION -->
        <nav>
            <div class="green darken-3 nav-wrapper">
                <div class="left">
                    <a href="/inicio" class="left brand-logo"><i>  </i><b>S. Recolección de Basura</b></a>
                </div>
                
                <div>
                    <ul class="right">
                    @if(Auth::user()->tipoUsuario == 1 || Auth::user()->tipoUsuario == 2)
                        <li><a href="/recolectores">
                            <i class="material-icons left">people</i>Recolectores</a></li>
                        <li><a href="/puntosRecoleccion">
                            <i class="material-icons left">map</i>Puntos de Reciclaje</a></li>
                    @endif
                    @if(Auth::user()->tipoUsuario == 1)
                        <li><a href="/registraRecolector">
                            <i class="material-icons left">person_add</i>Nuevo Recolector</a></li>
                        <li><a href="/registraPuntoReciclaje">
                            <i class="material-icons left">place</i>Nuevo Punto de Reciclaje</a></li>
                    @endif

                    @if(Auth::user()->tipoUsuario == 1 || Auth::user()->tipoUsuario == 2)
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                                @csrf
                            </form>
                        </li>
                    @endif
                    </ul>
                </div>
            
            </div>
        </nav>

        @yield('contenido')
    
    @endguest

</body>
</html>