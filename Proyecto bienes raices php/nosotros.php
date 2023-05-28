<?php
include './includes/templates/header.php';
?>

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

<?php
include './includes/templates/footer.php';
?>