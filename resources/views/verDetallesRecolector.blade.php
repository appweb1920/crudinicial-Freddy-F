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
    
    <title>Document</title>
</head>
<body class="blue-grey lighten-5">
    
    <nav>
        <div class="green darken-3 nav-wrapper">
            <a href="inicio" class="left brand-logo"><i>  </i><b>S. Recolección de Basura</b></a>
            <div>
                <ul class="right">
                    <li><a href="recolectores">
                        <i class="material-icons left">people</i>Recolectores</a></li>
                    <li><a href="puntosRecoleccion">
                        <i class="material-icons left">map</i>Puntos de Reciclaje</a></li>
                    <li><a href="registraRecolector">
                        <i class="material-icons left">person_add</i>Nuevo Recolector</a></li>
                    <li><a href="registraPuntoReciclaje">
                        <i class="material-icons left">place</i>Nuevo Punto de Reciclaje</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @if( !is_null($recolector) )
        <h1>Datos del recolector</h1>
        <p><b>Nombre: </b> {{$recolector->nombre}} | 
           <b>Dias de recolección:</b>{{$recolector->diasRecoleccion}} <br>
           <a href="recolectores">Volver a lista de recolectores</a> 
        </p>
        
        <h1>Puntos de recoleccion asignados</h1>
        @if( is_null($puntosAgregados) ) <p>Ninguno disponible </p>  @endif
        <!-- Agregar puntos -->
        <!-- Buequeda con el id recolector y todos sus puntos -->
        <ul>
        @foreach($puntosAgregados as $p)
            <li>{{$p->tipoDeBasura}} | 
                {{$p->direccion}} | 
                {{$p->horaApertura}} - {{$p->horaCierre}} 
                <a href="borrarPuntoRecolector/{{$recolector->id}}/{{$p->id}}">Eliminar</a> 
            </li>
        @endforeach
        </ul>

        <h1>Agregar nuevo punto de recoleccicón</h1>
        @if( is_null($puntosNoAgregados) ) <p>Ninguno disponible </p>  @endif
        <!-- Agregar puntos -->
        <!-- Buequeda con el id recolector sin todos sus puntos -->
        <ul>
        @foreach($puntosNoAgregados as $p)
            <li>{{$p->tipoDeBasura}} | 
                {{$p->direccion}} | 
                {{$p->horaApertura}} - {{$p->horaCierre}} 
                <a href="asignarPuntoRecolector/{{$recolector->id}}/{{$p->id}}">Asignar</a> 
            </li>
        @endforeach
        </ul>

    @endif
</body>
</html>