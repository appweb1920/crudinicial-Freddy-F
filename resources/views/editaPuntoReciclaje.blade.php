<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registra Punto de Reciclaje</h1>

    @if( !is_null($puntoReciclaje) )
        <form action="editarPunto" method="post">
        @csrf
            <input type="hidden" name="id" value="{{$puntoReciclaje->id}}">
            <input type="text" name="tipoDeBasura" value="{{$puntoReciclaje->tipoDeBasura}}" placeholder="tipoDeBasura">
            <input type="text" name="direccion" value="{{$puntoReciclaje->direccion}}" placeholder="direccion">
            <input type="text" name="horaApertura" value="{{$puntoReciclaje->horaApertura}}" placeholder="horaApertura">
            <input type="text" name="horaCierre" value="{{$puntoReciclaje->horaCierre}}" placeholder="horaCierre">
            <input type="submit" value="Guardar cambios">
        </form>
        <!-- <a href="puntosRecoleccion">Volver</a> -->
    @endif

</body>
</html>