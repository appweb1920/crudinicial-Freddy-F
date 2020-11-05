@extends('layouts.base')

@section('contenido')

    <div class="container center">
        <h1>Opciones</h1>
        
        <div class="row">
            @if(Auth::user()->tipoUsuario == 1 || Auth::user()->tipoUsuario == 2)
            <div class="col s4">
                <a href="/recolectores" class="grey-text text-darken-3">
                    <i class="large material-icons">people</i><br>
                    <p>Ver Recolectores</p>
                </a>
            </div>

            <div class="col s4">
                <a href="/puntosRecoleccion" class="grey-text text-darken-3">
                    <i class="large material-icons">map</i><br>
                    <p>Ver Puntos de Reciclaje</p>
                </a>
            </div>
            @endif
            @if(Auth::user()->tipoUsuario == 1)
            <div class="col s4">
                <a href="/registraRecolector" class="grey-text text-darken-3">
                    <i class="large material-icons">person_add</i><br>
                    <p>Registra Recolector</p>
                </a>
            </div>
            
            <div class="col s4">
                <a href="/registraPuntoReciclaje" class="grey-text text-darken-3">
                    <i class="large material-icons">place</i><br>
                    <p>Registra Punto de Reciclaje</p>
                </a>
            </div>
            @endif
        </div>
    </div>

@endsection