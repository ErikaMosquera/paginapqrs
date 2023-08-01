

@extends('layouts.app')
@section('titulo', 'Solicitudes FICADES')
@section('cabecera', 'FICADES - Registra el servicio deseado')
@section('contenido')

<div class="hero min-h-screen" style="background-image: url(/images/imagenpqrs.jpg);"> 
<div class="hero-overlay bg-opacity-60"></div>
<div class="hero-content text-center text-neutral-content">
<div class="max-w-md">
    <h1 class="mb-5 text-5xl font-bold text-center max-w-full">
        Radica tus solicitudes de servicios a los que deseas acceder. En FICADES queremos ayudarte
    </h1>
    
    <p class="mb-5 text-center max-w-screen-lg">
        Estamos comprometidos con nuestros clientes.
    </p>

<a href="{{route('clientes.index')}}" class="btn    btn-primary">Iniciar Solicitud</a>
</div>
</div>
</div>
@endsection