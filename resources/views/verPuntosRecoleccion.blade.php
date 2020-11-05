@extends('layouts.base')

@section('contenido')
    
    <div class="container">
        <h3>Puntos De Recolección:</h3>
        <a href="/inicio">Volver</a>
    
        <table class="highlight">
            <thead>
                <tr>
                    <th>Tipo de Reciclaje</th>
                    <th>Dirección</th>
                    <th class="centered">Hora de Apertura - Cierre</th>
                </tr>
            </thead>

            <tbody>
                @if( !is_null($puntosReciclaje) )
                    @foreach($puntosReciclaje as $p)
                        <tr>
                            <td>{{$p->tipoDeBasura}}</td>
                            <td>{{$p->direccion}}</td>
                            <td>{{$p->horaApertura}} - {{$p->horaCierre}} </td>
                            <td>
                                @if(Auth::user()->tipoUsuario == 1)
                                <a href="editarPunto/{{$p->id}}" class="waves-effect waves-light btn-small amber">Editar</a>
                                <a href="borrarPunto/{{$p->id}}" class="waves-effect waves-light btn-small red darken-1">Borrar </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>

@endsection