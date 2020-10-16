<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recolectores:</h1>
    <a href="inicio">Volver</a>
    <p><b>Nombre | Dias de recolección</b></p>
    <ul>
    @if( !is_null($recolectores) )
        @foreach($recolectores as $r)
            <li>
                {{$r->nombre}} | {{$r->diasRecoleccion}} 
                <a href="detallesRecolector/{{$r->id}}">Detalles</a> 
                <a href="editarRecolector/{{$r->id}}">Editar</a> 
                <a href="borrarRecolector/{{$r->id}}">Borrar</a>
            </li>
            
        @endforeach
    @endif
    </ul>
</body>
</html>