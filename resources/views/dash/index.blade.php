@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>HOLA..........</h1>
@stop

@section('content')
    <p>Bienvenido a este hermoso panel de administración.</p>
    <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center bg-primary">
                Perfil
            </div>
            <div class="card-body text-center">
                <img src="../resources/img/perfil.png" alt="perfil">
            </div>
            <div class="card-footer text-muted text-center">
                <a href="#">IR</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center bg-orange">
                Servicios
            </div>
            <div class="card-body text-center">
                <img src="../resources/img/servicio.png" alt="perfil">
            </div>
            <div class="card-footer text-muted text-center">
            <a href="#">IR</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center bg-gray">
                Usuarios
            </div>
            <div class="card-body text-center">
                <img src="../resources/img/usuarios.png" alt="perfil">
            </div>
            <div class="card-footer text-muted text-center">
            <a href="#">IR</a>
            </div>
        </div>
    </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop