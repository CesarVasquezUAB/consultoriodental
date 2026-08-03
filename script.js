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