document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    darkMode();
});

function darkMode() {
    const preferencia = window.matchMedia('(prefers-color-scheme: dark)')

    if (preferencia.matches) {
        document.body.classList.add('dark-mode');
    }
    else {
        document.body.classList.remove('dark-mode');
    }

    preferencia.addEventListener('change', function () {
        if (preferencia.matches) {
            document.body.classList.add('dark-mode');
        }
        else {
            document.body.classList.remove('dark-mode');
        }
    });

    const btndarkMode = document.querySelector('.dark-mode-btn');
    btndarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    })
}

function eventListeners() {
    const movilmenu = document.querySelector('.movil-menu');
    movilmenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}