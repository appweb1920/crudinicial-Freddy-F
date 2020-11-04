@extends('layouts.base')

@section('contenido')

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

@endsection