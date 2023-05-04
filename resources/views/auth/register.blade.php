@extends('layouts.app')

@section('contenido')
<div class="container-fluid d-flex justify-content-center">
    <form class="mb-3">
<!-- Titulo del formulario -->
    <h1>Regístrate</h1>
<!-- Input de tu usuario -->
    <div class="contenedor">
        <div class="input-contenedor">
            <input type="text" placeholder="Nombre">
        </div>
<!-- Input de tu correo electrónico -->
        <div class="input-contenedor">
            <input type="email" placeholder="Email">
        </div>
<!-- Input de tu contraseña -->
        <div class="input-contenedor">
            <input type="password" placeholder="Contraseña">
        </div>
<!--Botón de registro -->        
        <input type="submit" value="Regístrate" class=button>

        <a class="link" href="">Iniciar sesión</a>
    </div>
    </form>
</div>
@endsection