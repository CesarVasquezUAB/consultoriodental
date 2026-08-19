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

formulario.addEventListener("submit", function(e){
    e.preventDefault();
    modal.style.display = "none";
    modalConfirmacion.style.display = "flex";
});

cerrarConfirmacion.addEventListener("click", function(){
    modalConfirmacion.style.display = "none";
});

boton.addEventListener("click", function () {
    menu.classList.toggle("activo");
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

    // Falta Actualizar horarios disponibles 
   
});