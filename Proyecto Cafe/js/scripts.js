const datos = {
    nombre: "",
    email: "",
    mensaje: ""
}

const nombre = document.querySelector("#nombre")
const email = document.querySelector("#email")
const mensaje = document.querySelector("#mensaje")
const form = document.querySelector(".form")

nombre.addEventListener("input", leerTexto)
email.addEventListener("input", leerTexto)
mensaje.addEventListener("input", leerTexto)
form.addEventListener("submit", function (e) {
    e.preventDefault()
    const { nombre, email, mensaje } = datos

    if (nombre === "" || email === "" || mensaje === "") {
        mostrarAlerta("Todos los campos son obligatorios", true)
    }
    else {
        mostrarAlerta("Envio correcto")
    }
})

function leerTexto(e) {
    datos[e.target.id] = e.target.value
}

function mostrarAlerta(mensaje, error = null) {
    const ultimaAlerta = document.querySelector(".alerta")
    if (ultimaAlerta) {
        ultimaAlerta.remove()
    }
    const alerta = document.createElement("p")
    alerta.textContent = mensaje
    alerta.classList.add("alerta")
    if (error) {
        alerta.classList.add("alerta--error")
    }
    else {
        alerta.classList.add("alerta--correcto")
    }
    form.appendChild(alerta)
    setTimeout(() => {
        alerta.remove()
    }, 3000)
}

