<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoración del hogar</h1>
    <picture>
        <source srcset="./build/img/destacada2.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/destacada2.jpg" alt="Anuncio">
    </picture>
    <p class="info-meta">Escrito el: <span>26/05/2023</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">
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