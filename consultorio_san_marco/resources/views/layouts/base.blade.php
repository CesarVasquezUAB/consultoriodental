<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Consultorio Dental San Marcelo')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('logo.png') }}" alt="Consultorio Dental San Marcelo">
            </a>
        </div>

        <button class="menubtn" id="menuBtn">☰</button>

        <nav id="menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/nosotros">Nosotros</a></li>

                <li class="dropdown">
                    <a href="#">Servicios</a>
                    <ul class="submenu">
                        <li><a href="#">Limpieza Dental</a></li>
                        <li><a href="#">Ortodoncia</a></li>
                        <li><a href="#">Blanqueamiento</a></li>
                        <li><a href="#">Odontología General</a></li>
                    </ul>
                </li>

                <li><a href="#" id="abrirModal">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    {{-- Contenido Dinámico --}}
    @yield('content')

    <footer>
        <div class="footer-container">
            <div>
                <h3>Consultorio Dental</h3>
                <p>
                    Sistema de gestión de citas odontológicas diseñado para facilitar
                    la administración de pacientes y mejorar la atención del consultorio.
                </p>
            </div>

            <div>
                <h3>Horario</h3>
                <p>Martes - Miércoles - Jueves - Viernes</p>
                <p>15:00 - 19:00</p>
                <p>Sábados</p>
                <p>08:00 - 12:00</p>
            </div>

            <div>
                <h3>Contáctanos</h3>
                <p>Cochabamba, Bolivia</p>
                <p>+591 70000000</p>
                <p>consultorio@email.com</p>
            </div>
        </div>
    </footer>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="cerrar">&times;</span>
            <h2>Agenda tu cita</h2>
            <form id="formularioCita">
                @csrf
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>

                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Correo" required>

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>

                <label for="date">Fecha</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Horario disponible</label>
                <select id="time" name="time" required disabled>
                    <option value="">-- Primero selecciona una fecha --</option>
                </select>

                <label for="motivoconsulta">Motivo Consulta</label>
                <textarea id="motivoconsulta" name="motivoconsulta" placeholder="Motivo de la consulta" required></textarea>

                <div id="mensajeError" style="color: #dc2626; margin: 10px 0; font-size: 0.9rem;"></div>

                <button type="submit" id="registrarConsulta">Solicitar cita</button>
            </form>
        </div>
    </div>

    <div id="modalConfirmacion" class="modal">
        <div class="modal-content confirmacion">
            <h2>Registro Exitoso</h2>
            <p>
                La cita ha sido registrada correctamente.
                En breve nos comunicaremos con usted para confirmar
                la fecha y hora de atención.
            </p>
            <button id="cerrarConfirmacion">Aceptar</button>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>