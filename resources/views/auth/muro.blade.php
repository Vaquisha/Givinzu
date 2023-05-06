@extends('layouts.app')

@section('contenido')
<div class="container-fluid d-flex justify-content-center">
    <form class="mb-3">
<!-- Titulo del formulario -->
    <h1>Regístrate</h1>
<!-- Input de tu usuario -->
    <div class="contenedor">
        <div class="input-contenedor">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" placeholder="Nombre" class="form-control mt-auto">
        </div>
<!-- Input de tu correo electrónico -->
        <div class="input-contenedor">
        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" placeholder="Email" class="form-control mt-auto">
        </div>
<!-- Input de tu contraseña -->
        <div class="input-contenedor">
        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="password" placeholder="Contraseña" class="form-control mt-auto">
        </div>
<!--Botón de registro -->        
        <input type="submit" value="Regístrate" class="btn btn-primary p-auto mb-3">

        <a class="link" href="/">Iniciar sesión</a>
    </div>
    </form>
</div>
@endsection