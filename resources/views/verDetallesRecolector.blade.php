<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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