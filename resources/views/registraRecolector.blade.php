@extends('layouts.base')

@section('contenido')

    <div class="container">
        <h1>Registra Recolector</h1>
        <form action="guardaRecolector" method="post">
        @csrf
            <input type="text" name="nombre" placeholder="nombre" size="50">
            <input type="text" name="diasRecoleccion" placeholder="diasRecoleccion ('LMXJVSD')" size="30">
            <input type="submit" value="Registrar" class="waves-effect waves-light btn-small">
        </form>
    </div>

@endsection