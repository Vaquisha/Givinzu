@extends('layouts.app')

@section('contenido')
<div class="d-flex justify-content-center gap-3 align-items-center p-5">
    <div class="col-md-4 bg-light p-4 rounded shadow-lg">
        {{-- Tomamos el metodo post para enviar informacion  --}}
        <form action="/register" method="POST">
            {{-- Evita acaques -> solucion error 419 --}}
            @csrf
            {{--Nombre--}}
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input 
                    id="name" 
                    name="name" 
                    type="text" 
                    placeholder="Tu Nombre" 
                    class="form-control"">
            </div>
            {{-- Nombre de Usuario --}}
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input 
                    id="username" 
                    name="username" 
                    type="text" 
                    placeholder="Tu Nombre de Usuario" 
                    class="form-control">
            </div>
            {{-- Correo Electronico --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    id="email" 
                    name="email" 
                    type="text" 
                    placeholder="Tu Email de Registro" 
                    class="form-control">
            </div>
            {{-- Contraseña --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    placeholder="Password de Registro" 
                    class="form-control">
            </div>
            {{-- Repetir Contraseña --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repetir Password</label>
                <input 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    type="password" 
                    placeholder="Repite tu Password" 
                    class="form-control">
            </div>
            {{-- Boton Registrar --}}
            <button type="submit" class="btn btn-primary w-100">Crear Cuenta</button>
        </form>
    </div>
</div> 
@endsection