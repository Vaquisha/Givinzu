@extends('layouts.app')

@section('contenido')
<div class="container-sm d-flex justify-content-center mb-3">
    <form class="formulario">
<!-- Titulo del formulario -->
    <h1>Iniciar Sesión</h1>
<!-- Input de tu correo electrónico -->
        <div class="input-contenedor">
        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control mt-auto" placeholder="Email">
        </div>
<!-- Input de tu contraseña -->
        <div class="input-contenedor">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control mb-3" placeholder="Contraseña">
        </div>
<!--Botón de registro -->        
        <input type="submit" value="Iniciar Sesión" class="btn btn-primary p-auto mb-3">

        <a class="link" href="/crear-cuenta">Regístrate</a>
    </div>
    </form>
</div>
@endsection