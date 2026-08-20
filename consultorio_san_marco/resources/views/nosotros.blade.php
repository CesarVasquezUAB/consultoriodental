@extends('layouts.base')

@section('title', 'Sobre Nosotros - Consultorio Dental San Marcelo')

@section('content')
<main>
    <section>
        <div class="contenedor">

            <div class="section-header">
                <span class="subtitle">Conócenos</span>
                <h2>Sobre Nuestro Consultorio</h2>
            </div>

            <div class="perfil-grid">
                <div class="about-image">
                    <img src="{{ asset('Fondo.jpg') }}" alt="Dr. Marco en su consultorio">
                    <div class="experiencia-campo">
                        <span>+10</span>
                        <span class="text">Años de Experiencia</span>
                    </div>
                </div>

                <div class="contenido-nosotros">
                    <h3>Liderado por el <span>Dr. Marcelo</span></h3>
                    <p class="negrilla">
                        Apasionado por la salud bucodental y comprometido con devolverle la confianza y funcionalidad a cada sonrisa.
                    </p>
                    <p>
                        En nuestro consultorio combinamos tecnología de vanguardia, técnicas avanzadas y un trato cálido y personalizado. Entendemos que cada paciente es único, por lo que nos enfocamos en brindar tratamientos sin dolor y en un ambiente cómodo.
                    </p>

                    <div class="carts">
                        <div class="negrillas">
                            <h4>Atención Personalizada</h4>
                            <p>Tratamientos adaptados a tus necesidades específicas.</p>
                        </div>
                        <div class="negrillas">
                            <h4>Tecnología Moderna</h4>
                            <p>Contamos con equipo especializado para diagnósticos precisos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-overview">
                <h3>Especialidades del Dr. Marco</h3>
                <div class="services-grid">

                    <article class="service-card">
                        <img src="images/cepillo.png" alt="Cepillo">
                        <h4>Limpieza Dental</h4>
                        <p>Profilaxis profunda para prevenir caries, eliminar sarro y mantener tus encías saludables.</p>
                    </article>

                    <article class="service-card">
                        <img src="images/ortodoncia.png" alt="Diente">
                        <h4>Ortodoncia</h4>
                        <p>Alineación dental mediante brackets o alineadores invisibles para una sonrisa perfecta.</p>
                    </article>

                    <article class="service-card">
                        <img src="images/blanqueamiento.png" alt="Diente Limpio">
                        <h4>Blanqueamiento</h4>
                        <p>Tratamientos estéticos para aclarar el tono de tus dientes de forma segura.</p>
                    </article>

                    <article class="service-card">
                        <img src="images/general.png" alt="Consulta General">
                        <h4>Odontología General</h4>
                        <p>Diagnósticos, resinas, curaciones y restauración integral de los dientes.</p>
                    </article>

                </div>
            </div>

        </div>
    </section>
</main>
@endsection