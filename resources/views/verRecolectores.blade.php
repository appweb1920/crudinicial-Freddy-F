@extends('layouts.base')

@section('contenido')

    <div class="container">
        <h3>Recolectores:</h3>
        <a href="/inicio">Volver</a>

        <table class="highlight">
            <thead>
                <tr>
                    <th>Nombre del Recolector</th>
                    <th>Días de recolección</th>
                </tr>
            </thead>

            <tbody>
                @if( !is_null($recolectores) )
                    @foreach($recolectores as $r)
                        <tr>
                            <td>{{$r->nombre}}</td>
                            <td>{{$r->diasRecoleccion}}</td>
                            <td>
                                <a href="detallesRecolector/{{$r->id}}" class="waves-effect waves-light btn-small blue-grey darken-1">Detalles</a>
                                @if(Auth::user()->tipoUsuario == 1)
                                <a href="editarRecolector/{{$r->id}}" class="waves-effect waves-light btn-small amber">Editar</a> 
                                <a href="borrarRecolector/{{$r->id}}" class="waves-effect waves-light btn-small red darken-1">Borrar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

@endsection