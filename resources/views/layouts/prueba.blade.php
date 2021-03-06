<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Layout</title>
    <!--NOTA: 
        Este es un "layout" nos sirve de plantilla para llenar 
         con diversas secciones que tengan elementos en común, 
         tales como barras de navegación, encabezados, secciones,
         entre otros.

         Para usarla, debe crearse una vista que "HEREDE" de esta
         para que pueda usar todos los campos de la misma.
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="misEstilos.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
</head>
<body class="blue-grey lighten-5">
    
    <!-- NOTA: Este es un campo o "yield", permite ser remplazado por contenido espeificado en otra vista-->
    @yield('barra_navegacion')

</body>
</html>