@extends('layouts.app')
@section('titulo', 'Registrarse')
@section('cabecera', 'Regístrate Aquí')
@section('contenido')

<div class="flex justify-center">
    <div class="card w-96 shadow-2xl bg-base-100">
        <div class="card-body">
            <form action="{{ route('registros.store') }}" method="POST">
                @csrf
                <!-- Resto de los campos del formulario -->
                <!-- Por ejemplo: -->
                <div class="form-control">
                    <label class="label" for="nombre">
                    <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre" required class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label" for="apellidos">
                        <span class="label-text">Apellidos</span>
                    </label>
                    <input type="text" name="apellidos" placeholder="Apellidos" required class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label" for="correo">
                        <span class="label-text">Correo</span>
                    </label>
                    <input type="email" name="correo" placeholder="Correo" required class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label" for="contrasena">
                        <span class="label-text">Contraseña</span>
                    </label>
                    <input type="password" name="contrasena" placeholder="Contraseña" required class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label" for="confirmar_contrasena">
                        <span class="label-text">Confirmar Contraseña</span>
                    </label>
                    <input type="password" name="confirmar_contrasena" placeholder="Confirmar Contraseña" required class="input input-bordered">
                </div>
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a href="{{route('registros.index')}}" 
                    >
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

