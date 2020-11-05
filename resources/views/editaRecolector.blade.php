@extends('layouts.base')

@section('contenido')
    @if(Auth::user()->tipoUsuario == 1)
    <div class="container">
        <h3>Registra Recolector</h3>

        @if( !is_null($recolector) )
        <form action="editarRecolector" method="post">
        @csrf
            <input type="hidden" name="id" value="{{$recolector->id}}">
            <input type="text" name="nombre" value="{{$recolector->nombre}}" placeholder="nombre">
            <input type="text" name="diasRecoleccion" value="{{$recolector->diasRecoleccion}}" placeholder="diasRecoleccion">
            <input type="submit" value="Guardar cambios" class="waves-effect waves-light btn-small">
        </form>
        @endif
    </div>
    @endif
@endsection