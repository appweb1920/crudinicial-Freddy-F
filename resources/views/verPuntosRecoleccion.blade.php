<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Puntos De Recoleccion:</h1>
    <a href="inicio">Volver</a>
    <p><b>Tipo | Direccion | Apertura - Cierre</b></p>
    <ul>
    @if( !is_null($puntosReciclaje) )
        @foreach($puntosReciclaje as $p)
            <li>{{$p->tipoDeBasura}} | 
                {{$p->direccion}} | 
                {{$p->horaApertura}} - {{$p->horaCierre}} 
                <a href="detallesPunto/{{$p->id}}">Detalles</a> 
                <a href="editarPunto/{{$p->id}}">Editar</a> 
                <a href="borrarPunto/{{$p->id}}">Borrar </a>
            </li>
        @endforeach
    @endif
    </ul>
</body>
</html>