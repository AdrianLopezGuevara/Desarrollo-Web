document.addEventListener("DOMContentLoaded", function () {
    startApp();
});

function startApp() {
    navFija();
    crearGaleria();
}

function navFija() {
    const nav = document.querySelector(".header");
    const sobrefestival = document.querySelector(".sobre-festival");
    const body = document.querySelector("body");
    window.addEventListener("scroll", function () {
        if (sobrefestival.getBoundingClientRect().bottom < 0) {
            nav.classList.add("fijo");
            body.classList.add("body-scroll");
        } else {
            nav.classList.remove("fijo");
            body.classList.remove("body-scroll");
        }
    });
}

function crearGaleria() {
    const galeria = document.querySelector(".galeria-imagenes");
    for (let i = 1; i <= 12; i++) {
        const img = document.createElement("picture");
        img.innerHTML = `    
        <source srcset = "./build/img/thumb/${i}.webp" type = "image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/thumb/${i}.jpg"
            alt="Imagen vocalista"></img>
        `;
        img.onclick = function () {
            mostrarImg(i);
        };
        galeria.appendChild(img);
    }
}

function mostrarImg(id) {
    const img = document.createElement("picture");
    img.innerHTML = `    
        <source srcset = "./build/img/grande/${id}.webp" type = "image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/grande/${id}.jpg"
            alt="Imagen vocalista"></img>
        `;

    /* Crea Overlay */
    const overlay = document.createElement("div");
    overlay.appendChild(img);
    overlay.classList.add("overlay");
    overlay.onclick = function () {
        const body = document.querySelector("body");
        overlay.remove();
        body.classList.remove("fijar-body");
    };
    /* Añade al html */
    const body = document.querySelector("body");
    body.appendChild(overlay);
    body.classList.add("fijar-body");

    /* Cerrar modal */
    const close = document.createElement("p");
    close.textContent = "X";
    close.classList = "btn-cerrar";
    close.onclick = function () {
        overlay.remove();
        body.classList.remove("fijar-body");
    };
    overlay.appendChild(close);
}
