<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registra Recolector</h1>


    <form action="guardaRecolector" method="post">
    @csrf
        <input type="text" name="nombre" placeholder="nombre" size="50">
        <input type="text" name="diasRecoleccion" placeholder="diasRecoleccion ('LMXJVSD')" size="30">
        <input type="submit" value="Registrar">
    </form>

</body>
</html>