@extends('layouts.app')
@section('titulo', 'Lista de Usuarios Registrados')
@section('cabecera', 'Usuarios Registrados')
@section('contenido')
<div class="flex justify-end m-4">
    <a href="{{ route('registros.create') }}" class="btn btn-outline btn-sm">Registrarse</a>
</div>
<div class="flex justify-center">
    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Confirmar Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->apellidos }}</td>
                    <td>{{ $registro->correo }}</td>
                    <td>{{ $registro->confirmar_contrasena }}</td>
                    <td class="flex space-x-2">
                        <a href="{{ route('registros.edit', $registro->id) }}" class="btn btn-warning btn-xs">Actualizar</a>
                        {{-- si el registro no está asociado a otros elementos, se puede eliminar --}}
                      
                        <form action="{{ route('registros.destroy', $registro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar el registro de {{ $registro->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
                        </form>
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
