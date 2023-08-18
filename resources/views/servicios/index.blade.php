@extends('layouts.app')
@section('titulo', 'Lista  PQRS')
@section('cabecera', 'Lista Solicitudes PQRS')
@section('contenido')
<div class="flex justify-end m-4">
<a href="{{ route('servicios.create') }}" class="btn btn-outline btn-sm">Crear Servicio</a>
</div>
<div class="flex justify-center">
<div class="overflow-x-auto">
<table class="table table-zebra">
<thead>
<tr>
<th>Nombre</th>
<th>Descripción</th>
<th>Codigo Servicio</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach  ($servicios as $servicio)
<tr>
<td>{{ $servicio->nombre }}</td>
<td>{{ $servicio->descripcion }}</td>
<td>{{ $servicio->solicitud_id }}</td>
<td class="flex space-x-2">
<a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning btn-xs">Editar</a>
{{-- si la categoria no tiene productos asociados, se puede eliminar --}}
@if($servicio->clientes->count() == 0)
<form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('¿Desea eliminar los servicios {{ $servicio->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
</form>
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
