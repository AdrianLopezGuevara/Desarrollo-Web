<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="./build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="./index.html">
                    <img src="./build/img/logo.svg" alt="Logo">
                </a>
                <div class="movil-menu">
                    <img src="./build/img/barras.svg" alt="Icono menu">
                </div>
                <div class="derecha">
                    <img class="dark-mode-btn" src="./build/img/dark-mode.svg" alt="Btn dark mode">
                    <nav class="navegacion">
                        <a href="./nosotros.html">Nosotros</a>
                        <a href="./anuncios.html">Anuncios</a>
                        <a href="./blog.html">Blog</a>
                        <a href="./contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <div class="img">
                <picture>
                    <source srcset="./build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/nosotros.jpg" alt="Imagen nosotros">
                </picture>
            </div>
            <div class="txt-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit expedita omnis laudantium deserunt
                    sapiente ut quas fugit quaerat illo earum, eligendi voluptas minima natus sed nobis facilis
                    asperiores incidunt harum impedit sit? Beatae sed dolorum assumenda. A illo ipsum mollitia
                    accusantium. Est minima exercitationem necessitatibus tempora adipisci dolor voluptas placeat.
                </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In itaque illo doloribus culpa ut
                    exercitationem vero, debitis consectetur beatae enim fugit est illum molestias corporis, error
                    maxime quia ipsum veniam.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="./build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi temporibus eum eveniet
                    necessitatibus, ad dolore deleniti. Obcaecati debitis laborum quas?</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi temporibus eum eveniet
                    necessitatibus, ad dolore deleniti. Obcaecati debitis laborum quas?</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi temporibus eum eveniet
                    necessitatibus, ad dolore deleniti. Obcaecati debitis laborum quas?</p>
            </div>
        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="./nosotros.html">Nosotros</a>
                <a href="./anuncios.html">Anuncios</a>
                <a href="./blog.html">Blog</a>
                <a href="./contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2023&copy;</p>
    </footer>
    <script src="./build/js/bundle.min.js"></script>
</body>

</html>