<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registra Recolector</h1>

    @if( !is_null($recolector) )
    <form action="editarRecolector" method="post">
    @csrf
        <input type="hidden" name="id" value="{{$recolector->id}}">
        <input type="text" name="nombre" value="{{$recolector->nombre}}" placeholder="nombre">
        <input type="text" name="diasRecoleccion" value="{{$recolector->diasRecoleccion}}" placeholder="diasRecoleccion">
        <input type="submit" value="Guardar cambios">
    </form>
    <!-- <a href="recolectores">Volver</a> -->
    @endif
</body>
</html>