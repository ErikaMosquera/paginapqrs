@extends('layouts.app')
@section('titulo', 'Editar Servicio')
@section('cabecera', 'Editar Servicio ' . $servicio->nombre)

@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
    @csrf
    @method('PUT')

<!-- Edición de la tabla-->

    <div class="form-control">
    <label class="label" for="nombre">
    <span class="label-text">Nombre</span>
    </label>
    <input type="text" name="nombre" value="{{ $servicio->nombre }}" class="input input-bordered" required />
    </div>

    <div class="form-control">
    <label class="label" for="descripcion">
    <span class="label-text">Descripción</span>
    </label>
    <input type="text" name="descripcion" value="{{ $servicio->descripcion }}" class="input input-bordered" />
    </div>

    <div class="form-control">
        <label class="label" for="solicitud_id">
        <span class="label-text">solicitud_id</span>
        </label>
        <input type="text" name="solicitud_id" value="{{ $servicio->solicitud_id }}" class="input input-bordered" />
        </div>

    <div class="form-control mt-6">
    <button class="btn btn-primary">Actualizar Servicio</button>
    <a href="{{ route('servicios.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
    </div>
    </form>
    </div>
    </div>
</div>
@endsection
