const boton = document.querySelector("#btn-confirmar");

boton.addEventListener("click", TurnoConfirmado);

function TurnoConfirmado() {
    const mensaje = document.querySelector("#mensaje");

    mensaje.textContent = `Turno recibido - te atiende Cesar Romulo Vaquez Soto`;

    mensaje.classList.remove("oculto");
}