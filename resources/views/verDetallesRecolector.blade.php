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
        @if( !is_null($recolector) )
            <h3>Datos del recolector</h3>
            <p><b>Nombre: </b> {{$recolector->nombre}} | 
            <b>Dias de recolección:</b>{{$recolector->diasRecoleccion}} <br>
            <a href="/recolectores">Volver a lista de recolectores</a> 
            </p>
            
            <h3>Puntos de recoleccion asignados</h3>
            @if( is_null($puntosAgregados) ) <p>Ninguno disponible </p>  @endif
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Tipo de Reciclaje</th>
                        <th>Dirección</th>
                        <th class="centered">Hora de Apertura - Cierre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($puntosAgregados as $p)
                        <tr>
                            <td>{{$p->tipoDeBasura}}</td>
                            <td>{{$p->direccion}}</td>
                            <td>{{$p->horaApertura}} - {{$p->horaCierre}} </td>
                            <td><a href="borrarPuntoRecolector/{{$recolector->id}}/{{$p->id}}"
                                    class="waves-effect waves-light btn-small red darken-1">Remover punto</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <h3>Agregar nuevo punto de recolección</h3>
            @if( is_null($puntosNoAgregados) ) <p>Ninguno disponible </p>  @endif
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Tipo de Reciclaje</th>
                        <th>Dirección</th>
                        <th class="centered">Hora de Apertura - Cierre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($puntosNoAgregados as $p)
                        <tr>
                            <td>{{$p->tipoDeBasura}}</td>
                            <td>{{$p->direccion}}</td>
                            <td>{{$p->horaApertura}} - {{$p->horaCierre}} </td>
                            <td><a href="asignarPuntoRecolector/{{$recolector->id}}/{{$p->id}}"
                                    class="waves-effect waves-light btn-small">Asignar punto</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif
    </div>

</body>
</html>