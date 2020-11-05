@extends('layouts.base')

@section('contenido')
    @if(Auth::user()->tipoUsuario == 1)
    <div class="container">
        <h3>Registra Recolector</h3>
        
        <form action="guardaRecolector" method="post">
        @csrf
            <input type="text" name="nombre" placeholder="nombre" size="50">
            <input type="text" name="diasRecoleccion" placeholder="diasRecoleccion ('LMXJVSD')" size="30">
            <input type="submit" value="Registrar" class="waves-effect waves-light btn-small">
        </form>
    </div>
    @endif
@endsection