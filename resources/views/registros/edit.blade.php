@extends('layouts.app')
@section('titulo', 'Editar Usuario')
@section('cabecera', 'Editar Usuario ' . $registro->nombre)

@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
    <form action="{{ route('registros.update', $registro->id) }}" method="POST">
    @csrf
    @method('PUT')

<!-- Edición de la tabla-->

    <div class="form-control">
    <label class="label" for="nombre">
    <span class="label-text">Nombre</span>
    </label>
    <input type="text" name="nombre" value="{{ $registro->nombre }}" class="input input-bordered" required />
    </div>

    <div class="form-control">
    <label class="label" for="apellidos">
    <span class="label-text">apellidos</span>
    </label>
    <input type="text" name="descripcion" value="{{ $registro->apellidos }}" class="input input-bordered" />
    </div>

    <div class="form-control">
        <label class="label" for="correo">
        <span class="label-text">correo</span>
        </label>
        <input type="text" name="correo" value="{{ $registro->correo }}" class="input input-bordered" />
        </div>


    <div class="form-control mt-6">
    <button class="btn btn-primary">Actualizar Usuario</button>
    <a href="{{ route('registros.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
    </div>
    </form>
    </div>
    </div>
</div>
@endsection
