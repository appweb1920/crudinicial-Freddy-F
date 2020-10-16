<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registra Punto de Reciclaje</h1>


    <form action="guardaPuntoReciclaje" method="post">
    @csrf
        <input type="text" name="tipoDeBasura" placeholder="tipoDeBasura">
        <input type="text" name="direccion" placeholder="direccion">
        <input type="text" name="horaApertura" placeholder="horaApertura">
        <input type="text" name="horaCierre" placeholder="horaCierre">
        <input type="submit" value="Registrar">
    </form>

</body>
</html>