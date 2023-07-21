@extends('layouts.app')
@section('titulo', 'Crear Servicio')
@section('cabecera', 'Crear Servicio')
@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
<form action="{{ route('servicios.store') }}" method="POST">
@csrf

    <div class="form-control">
    <label class="label" for="nombre">
    <span class="label-text">Nombre del Servicio</span>
    </label>
    <input type="text" name="nombre" placeholder="Nombre servicio" maxlength="100" class="input input-bordered" required />
    
    </div>
    <div class="form-control">
    <label class="label" for="descripcion">
    <span class="label-text">Descripción del Servicio</span>
    </label>
    <textarea name="descripcion" placeholder="Escriba la descripción" maxlength="255" class="input input-bordered" required></textarea>
                
    </div>
    <div class="form-control">
    <label class="label" for="solicitud_id">
    <span class="label-text">ID de Solicitud</span>
    </label>
    <input type="text" name="solicitud_id" placeholder="ID de solicitud" maxlength="255" class="input input-bordered" required />
                
    </div>
    <div class="form-control mt-6">
    <button class="btn btn-primary">Crear Servicio</button>
    <a href="{{ route('servicios.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
    </div>
    
    </form>
    </div>
    </div>
</div>
@endsection
