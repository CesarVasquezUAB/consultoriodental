@extends('layouts.base')

@section('title', 'Inicio - Consultorio Dental San Marcelo')

@section('content')
<section class="hero">
    <div class="overlay"></div>

    <div class="contenido">
        <h2>MODERNIZANDO LA ATENCIÓN ODONTOLÓGICA</h2>
        <h1>Clínica Dental San Marcelo</h1>
        <p>
            Este proyecto consiste en el desarrollo de un sitio web para el consultorio
            dental del odontólogo que me está atendiendo. Su finalidad es digitalizar
            la administración de citas, permitiendo consultar la disponibilidad de
            horarios en tiempo real. Así, cuando un paciente se comunique por teléfono
            y el dentista no tenga su agenda física consigo, podrá verificar al instante
            si existe un espacio disponible, optimizando la organización del consultorio
            y ofreciendo un servicio más eficiente.
        </p>
        <a href="#" class="boton" onclick="document.getElementById('modal').style.display='flex'; return false;">
            Agenda tu consulta
        </a>
    </div>
</section>
@endsection