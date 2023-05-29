<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="./build/img/destacada3.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/destacada3.jpg" alt="Imagen contacto">
    </picture>
    <h2>Llene el formulario de contacto</h2>
    <form class="form" action="">
        <fieldset>
            <legend>Información personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email">
            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Telefono" id="telefono">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad </legend>
            <label for="opc">Vende o compra</label>
            <select name="" id="opc">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" placeholder="Precio o presupuesto" id="presupuesto">
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-tel">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-tel">
                <label for="contactar-email">Email</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Si eligió telefono elija la fecha y hora para ser contactado</p>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" min="09:00" max="18:00">
        </fieldset>
        <input type="submit" class="btn-verde">
    </form>
</main>

<?php
include './includes/templates/footer.php';
?>