@extends('layouts.base')

@section('contenido')

    <div class="container">
        <h1>Registra Punto de Reciclaje</h1>

        @if( !is_null($puntoReciclaje) )
            <form action="editarPunto" method="post">
            @csrf
                <input type="hidden" name="id" value="{{$puntoReciclaje->id}}">
                <input type="text" name="tipoDeBasura" value="{{$puntoReciclaje->tipoDeBasura}}" placeholder="tipoDeBasura">
                <input type="text" name="direccion" value="{{$puntoReciclaje->direccion}}" placeholder="direccion">
                <input type="text" name="horaApertura" value="{{$puntoReciclaje->horaApertura}}" placeholder="horaApertura">
                <input type="text" name="horaCierre" value="{{$puntoReciclaje->horaCierre}}" placeholder="horaCierre">
                <input type="submit" value="Guardar cambios" class="waves-effect waves-light btn-small">
            </form>
        @endif
    </div>
    
@endsection