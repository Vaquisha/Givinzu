@extends('layouts.app')

@section('contenido')
<div class="container-fluid d-flex justify-content-center">
    <form class="formulario">
<!-- Titulo del formulario -->
    <h1>Iniciar Sesión</h1>
<!-- Input de tu usuario -->
<!-- Input de tu correo electrónico -->
        <div class="input-contenedor">
            <input type="email" placeholder="Email">
        </div>
<!-- Input de tu contraseña -->
        <div class="input-contenedor">
            <input type="password" placeholder="Contraseña">
        </div>
<!--Botón de registro -->        
        <input type="submit" value="Iniciar Sesión" class=button>

        <a class="link" href="">Regístrate</a>
    </div>
    </form>
</div>
@endsection