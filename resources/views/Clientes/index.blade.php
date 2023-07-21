@extends('layouts.app')
@section('titulo', 'Lista Clientes')
@section('cabecera', 'Lista de Clientes')

@section('contenido')
<div class="flex justify-end m-4">
    <a href="{{ route('clientes.create') }}" class="btn btn-outline btn-sm">Crear Cliente Solicitante</a>
</div>
<div class="flex justify-center">
    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Servicio a Solicitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->solicitud_id }}</td>
                    <td class="flex space-x-2">
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-xs">Editar</a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar la solicitud {{ $cliente->solicitud }}?')" class="btn btn-error btn-xs">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
