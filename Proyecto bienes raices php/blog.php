<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>
    <article class="entrada-blog">
        <div class="img">
            <picture>
                <source srcset="./build/img/blog1.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/blog1.jpg" alt="Imagen blog">
            </picture>
        </div>
        <div class="txt-entrada">
            <a href="./entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="info-meta">Escrito el: <span>22/05/2023</span> por: <span>Admin</span></p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius distinctio, ipsum aliquam a
                    eos harum nemo quod odio eligendi sed, quo similique veniam repudiandae quaerat, velit hic
                    modi aliquid ducimus!</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="img">
            <picture>
                <source srcset="./build/img/blog2.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/blog2.jpg" alt="Imagen blog">
            </picture>
        </div>
        <div class="txt-entrada">
            <a href="./entrada.php">
                <h4>Guia para la decoración del hogar</h4>
                <p class="info-meta">Escrito el: <span>22/05/2023</span> por: <span>Admin</span></p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius distinctio, ipsum aliquam a
                    eos harum nemo quod odio eligendi sed, quo similique veniam repudiandae quaerat, velit hic
                    modi aliquid ducimus!</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="img">
            <picture>
                <source srcset="./build/img/blog3.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/blog3.jpg" alt="Imagen blog">
            </picture>
        </div>
        <div class="txt-entrada">
            <a href="./entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="info-meta">Escrito el: <span>22/05/2023</span> por: <span>Admin</span></p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius distinctio, ipsum aliquam a
                    eos harum nemo quod odio eligendi sed, quo similique veniam repudiandae quaerat, velit hic
                    modi aliquid ducimus!</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="img">
            <picture>
                <source srcset="./build/img/blog4.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/blog4.jpg" alt="Imagen blog">
            </picture>
        </div>
        <div class="txt-entrada">
            <a href="./entrada.php">
                <h4>Guia para la decoración del hogar</h4>
                <p class="info-meta">Escrito el: <span>22/05/2023</span> por: <span>Admin</span></p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius distinctio, ipsum aliquam a
                    eos harum nemo quod odio eligendi sed, quo similique veniam repudiandae quaerat, velit hic
                    modi aliquid ducimus!</p>
            </a>
        </div>
    </article>
</main>

<?php
include './includes/templates/footer.php';
?>