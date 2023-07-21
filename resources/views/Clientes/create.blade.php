@extends('layouts.app')
@section('titulo', 'Registrar Cliente')
@section('cabecera', 'Registrar Cliente Servicio')

@section('contenido')
<div class="flex justify-center">
    <div class="card w-96 shadow-2xl bg-base-100">
        <div class="card-body">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <div class="form-control">
                    <label class="label" for="nombre">
                        <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre Cliente Solicitante" maxlength="100" class="input input-bordered" required />
                </div>

                <div class="form-control">
                    <label class="label" for="direccion">
                        <span class="label-text">Dirección</span>
                    </label>
                    <input type="text" name="direccion" placeholder="Escriba la dirección servicio" maxlength="255" class="input input-bordered" />
                </div>

                <div class="form-control">
                    <label class="label" for="telefono">
                        <span class="label-text">Telefono</span>
                    </label>
                    <input type="text" name="telefono" placeholder="Telefono" maxlength="255" class="input input-bordered" />
                </div>

                <div class="form-control">
                    <label class="label" for="solicitud_id">
                        <span class="label-text">Servicio a Solicitar</span>
                    </label>
                    <select name="solicitud_id" class="select select-bordered w-full">
                        <option value="Asesoria Juridica">Asesoria Juridica</option>
                        <option value="Red de Apoyo Educativo">Red de Apoyo Educativo</option>
                        <option value="Por el Derecho a Ser y Estar">Por el Derecho a Ser y Estar</option>
                        <option value="Casa Hogar">Casa Hogar</option>
                        <option value="Capacitaciones">Capacitaciones</option>
                    </select>
                </div>

                <div class="form-control mt-6">
                    <button class="btn btn-primary">Crear Solicitud</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
