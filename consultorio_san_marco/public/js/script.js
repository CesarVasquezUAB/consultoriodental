const modal = document.getElementById("modal");
const abrir = document.getElementById("abrirModal");
const cerrar = document.querySelector(".cerrar");

const boton = document.getElementById("menuBtn");
const menu = document.getElementById("menu");

const formulario = document.getElementById("formularioCita");

const modalConfirmacion = document.getElementById("modalConfirmacion");
const cerrarConfirmacion = document.getElementById("cerrarConfirmacion");

abrir.addEventListener("click", function(e){
    e.preventDefault();
    modal.style.display = "flex";
});

cerrar.addEventListener("click", function(){
    modal.style.display = "none";
});

window.addEventListener("click", function(e){
    if(e.target === modal){
        modal.style.display = "none";
    }
});


cerrarConfirmacion.addEventListener("click", function() {
    modalConfirmacion.style.display = "none";
});

boton.addEventListener("click", function() {
    menu.classList.toggle("activo");
});

// Envío del formulario
formulario.addEventListener("submit", async function(e) {
    e.preventDefault();

    try {
        const response = await fetch('/guardar-cita', {
            method: 'POST',
            body: new FormData(formulario)
        });

        const data = await response.json();

        if (response.ok && data.success) {
            formulario.reset();
            modal.style.display = "none";
            modalConfirmacion.style.display = "flex";
        } else {
            alert(data.error || 'Ocurrió un error al guardar la cita.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('No se pudo conectar con el servidor.');
    }
});




document.addEventListener('DOMContentLoaded', () => {
    const inputFecha = document.getElementById('date');
    const selectHora = document.getElementById('time');
    const mensajeError = document.getElementById('mensajeError');

    const hoy = new Date();
    const manana = new Date(hoy);
    
    const diasentresemanas = [
        "15:00 - 15:30",
        "16:00 - 16:30",
        "17:00 - 17:30",
        "18:00 - 18:30"
    ];

    const sabado = [
        "08:00 - 08:30",
        "09:00 - 09:30",
        "10:00 - 10:30",
        "11:00 - 11:30"
    ];

    const agendaSemanal = {
        2: diasentresemanas, 
        3: diasentresemanas, 
        4: diasentresemanas, 
        5: diasentresemanas, 
        6: sabado    
    };

    manana.setDate(manana.getDate() + 1);
    inputFecha.min = manana.toISOString().split('T')[0];

    inputFecha.addEventListener('change', async () => {
        mensajeError.textContent = '';
        selectHora.innerHTML = '';

        if (!inputFecha.value) {
            selectHora.disabled = true;
            selectHora.innerHTML = '<option value="">-- Primero selecciona una fecha --</option>';
            return;
        }

        const fechaSeleccionada = new Date(inputFecha.value + 'T00:00:00');
        const diaSemana = fechaSeleccionada.getDay(); 

        if (!agendaSemanal[diaSemana]) {
            mensajeError.textContent = 'No atendemos los domingos ni lunes. Por favor, selecciona de martes a sábado.';
            selectHora.disabled = true;
            selectHora.innerHTML = '<option value="">-- Sin disponibilidad --</option>';
            inputFecha.value = '';
            return;
        }

        let ocupados = [];
        try {
            const res = await fetch(`/citas-ocupadas?fecha=${inputFecha.value}`);
            ocupados = await res.json();
        } catch (error) {
            console.error('Error al obtener citas:', error);
        }

        selectHora.disabled = false;
        selectHora.innerHTML = '<option value="">-- Selecciona un horario --</option>';

        agendaSemanal[diaSemana].forEach(horario => {
            const opcion = document.createElement('option');
            opcion.value = horario;

            if (ocupados.includes(horario)) {
                opcion.textContent = `${horario} (Ocupado)`;
                opcion.disabled = true;
            } else {
                opcion.textContent = horario;
            }

            selectHora.appendChild(opcion);
        });
    });
});