<!-- Esta es una vista (.blade.php) que hereda de la vista (layout): 
        "<proyecto>/public/views/layouts/prueba.blade.php"
-->
@extends('layouts.prueba')


@section('barra_navegacion')
<nav>
    <div class="green darken-3 nav-wrapper">
        <div class="left">
            <a href="/login" class=""><b>Iniciar</b></a> /
            <a href="/register" class=""><b>Registrar</b></a>
            <a href="/inicio" class="left brand-logo"><i>  </i><b>S. Recolección de Basura</b></a>
        </div>
        
        <div>
            <ul class="right">
                <li><a href="/recolectores">
                    <i class="material-icons left">people</i>Recolectores</a></li>
                <li><a href="/puntosRecoleccion">
                    <i class="material-icons left">map</i>Puntos de Reciclaje</a></li>
                <li><a href="/registraRecolector">
                    <i class="material-icons left">person_add</i>Nuevo Recolector</a></li>
                <li><a href="/registraPuntoReciclaje">
                    <i class="material-icons left">place</i>Nuevo Punto de Reciclaje</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection