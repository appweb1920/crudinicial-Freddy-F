@extends('layouts.base')

@section('contenido')

    <div class="container">
        <h1>Registra Punto de Reciclaje</h1>


        <form action="guardaPuntoReciclaje" method="post">
        @csrf
            <input type="text" name="tipoDeBasura" placeholder="tipoDeBasura">
            <input type="text" name="direccion" placeholder="direccion">
            <input type="text" name="horaApertura" placeholder="horaApertura">
            <input type="text" name="horaCierre" placeholder="horaCierre">
            <input type="submit" value="Registrar" class="waves-effect waves-light btn-small">
        </form>
    </div>

@endsection