<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa de lujo en el lago</h1>
    <picture>
        <source srcset="./build/img/destacada.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/destacada.jpg" alt="Anuncio">
    </picture>
    <div class="resumen-propiedad">
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ipsa facilis. Cum vero necessitatibus
            quaerat similique libero ex quae velit excepturi consequuntur dolor omnis obcaecati harum ducimus, ipsam
            iste eligendi? Perferendis ipsa fugiat eveniet voluptates ad facere, atque libero voluptas cupiditate
            dolorum optio doloribus modi necessitatibus maiores ducimus eum cumque.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci aut, amet sequi ipsum aperiam saepe
            exercitationem quod laudantium alias voluptatum non iste animi pariatur repudiandae dicta voluptatibus
            iure? Accusamus, non.</p>
    </div>


</main>

<?php
include './includes/templates/footer.php';
?>