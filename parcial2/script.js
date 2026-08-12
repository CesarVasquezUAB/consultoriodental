const formularioOp = document.querySelector("#form-cita");
const aviso = document.querySelector("#aviso-cita");

function revisarFormulario(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {
        event.preventDefault();

        aviso.textContent = "Completa tu nombre y tu correo para reservar la cita.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else if (correo.includes("@") === false) {
        event.preventDefault();

        aviso.textContent = "Ese correo está mal escrito: le falta el arroba.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else {
        aviso.textContent = "Cita reservada - te atiende Cesar Romulo Vasquez Soto";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
}

formularioOp.addEventListener("submit", revisarFormulario);