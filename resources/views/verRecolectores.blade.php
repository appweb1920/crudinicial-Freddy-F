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
        <h1>Recolectores:</h1>
        <a href="/inicio">Volver</a>

        <table class="highlight">
            <thead>
                <tr>
                    <th>Nombre del Recolector</th>
                    <th>Días de recolección</th>
                </tr>
            </thead>

            <tbody>
                @if( !is_null($recolectores) )
                    @foreach($recolectores as $r)
                        <tr>
                            <td>{{$r->nombre}}</td>
                            <td>{{$r->diasRecoleccion}}</td>
                            <td>
                                <a href="detallesRecolector/{{$r->id}}" class="waves-effect waves-light btn-small blue-grey darken-1">Detalles</a>
                                <a href="editarRecolector/{{$r->id}}" class="waves-effect waves-light btn-small amber">Editar</a> 
                                <a href="borrarRecolector/{{$r->id}}" class="waves-effect waves-light btn-small red darken-1">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

</body>
</html>