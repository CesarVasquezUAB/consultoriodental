const modal = document.getElementById("modal");
const abrir = document.getElementById("abrirModal");
const boton = document.getElementById("menuBtn");
const menu = document.getElementById("menu");

abrir.addEventListener("click", function(e){
    e.preventDefault();
    modal.style.display = "flex";
});

//Evento que al darle click al fondo oscuro, el modal (Formulario) desaparece.
window.addEventListener("click", function(e){
    if(e.target === modal){
        modal.style.display = "none";
    }
});


boton.addEventListener("click", function(){
    menu.classList.toggle("activo");
});