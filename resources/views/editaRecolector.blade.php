<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="misEstilos.css">
    <title>Document</title>
</head>
<body class="blue-grey lighten-5">
    
    <nav>
        <div class="green darken-3 nav-wrapper">
            <a href="/inicio" class="left brand-logo"><i>  </i><b>S. Recolección de Basura</b></a>
            <div>
                <ul class="right">
                    <li><a href="/recolectores">
                        <i class="material-icons left">people</i>Recolectores</a></li>
                    <li><a href="/puntosRecoleccion">
                        <i class="material-icons left">map</i>Puntos de Reciclaje</a></li>
                    <li><a href="/registraRecolector">
                        <i class="material-icons left">person_add</i>Nuevo Recolector</a></li>
                    <li><a href="/registraPuntoReciclaje">
                        <i class="material-icons left">place</i>Nuevo Punto de Reciclaje</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Registra Recolector</h1>

        @if( !is_null($recolector) )
        <form action="editarRecolector" method="post">
        @csrf
            <input type="hidden" name="id" value="{{$recolector->id}}">
            <input type="text" name="nombre" value="{{$recolector->nombre}}" placeholder="nombre">
            <input type="text" name="diasRecoleccion" value="{{$recolector->diasRecoleccion}}" placeholder="diasRecoleccion">
            <input type="submit" value="Guardar cambios" class="waves-effect waves-light btn-small">
        </form>
        @endif
    </div>
</body>
</html>