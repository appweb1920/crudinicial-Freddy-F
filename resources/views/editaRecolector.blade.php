@extends('layouts.base')

@section('contenido')

    <div class="container">
        <h1>Registra Recolector</h1>

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

@endsection