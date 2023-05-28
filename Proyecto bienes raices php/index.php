<?php
$inicio = true;
include './includes/templates/header.php';
?>

<main class="contenedor seccion">
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
</main>

<section class="section contenedor">
    <h2>Casas y departamentos en venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio1.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/anuncio1.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, neque.</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="./build/img/icono_wc.svg" alt="Icono WC">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="./anuncio.html" class="btn-amarillo-block">
                    Ver propiedad
                </a>
            </div>
        </div>
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio2.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/anuncio2.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, neque.</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="./build/img/icono_wc.svg" alt="Icono WC">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="./anuncio.html" class="btn-amarillo-block">
                    Ver propiedad
                </a>
            </div>
        </div>
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio3.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="./build/img/anuncio3.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, neque.</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="./build/img/icono_wc.svg" alt="Icono WC">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="./anuncio.html" class="btn-amarillo-block">
                    Ver propiedad
                </a>
            </div>
        </div>
    </div>
    <div class="alinear-derecha">
        <a href="./anuncios.html" class="btn-verde">Ver todas</a>
    </div>
</section>

<section class="img-contacto seccion">
    <h2>Encuentra la case de tus sueños</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sapiente?</p>
    <a href="./contacto.html" class="btn-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro blog</h3>
        <article class="entrada-blog">
            <div class="img">
                <picture>
                    <source srcset="./build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/blog1.jpg" alt="Imagen blog">
                </picture>
            </div>
            <div class="txt-entrada">
                <a href="./entrada.html">
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
                <a href="./entrada.html">
                    <h4>Guia para la decoración del hogar</h4>
                    <p class="info-meta">Escrito el: <span>22/05/2023</span> por: <span>Admin</span></p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius distinctio, ipsum aliquam a
                        eos harum nemo quod odio eligendi sed, quo similique veniam repudiandae quaerat, velit hic
                        modi aliquid ducimus!</p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore recusandae possimus, nobis
                reiciendis fugit quae magni cum facere odio velit?
            </blockquote>
            <p>- Adrian López</p>
        </div>
    </section>
</div>

<?php
include './includes/templates/footer.php';
?>