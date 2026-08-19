@extends('layouts.base')

@section('contenido')

<title>Ferretería El Tornillo</title>

<h1>Ferretería El Tornillo</h1>

<p>
    En Ferretería El Tornillo encontrarás herramientas de calidad
    para tus proyectos y trabajos, herramienta que busques herramienta que tenemos,
    contamos con productos de calidad.
</p>

<p>
    Hay {{ count($herramientas) }} herramientas en el inventario.
</p>

@foreach ($herramientas as $herramienta)
<p>
    {{ $herramienta->nombre }} - Bs {{ $herramienta->precio }}
</p>
@endforeach

<p>
    Inventario atendido por Cesar Romulo Vasquez Soto
</p>

<a href="/herramientas/nuevo">Agregar nueva herramienta</a>

@endsection