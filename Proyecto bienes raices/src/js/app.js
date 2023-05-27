document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    darkMode();
});

function darkMode() {
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