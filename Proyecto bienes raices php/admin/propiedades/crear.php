<?php
require '../../includes/config/database.php';
$db = connect();

$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedor = $_POST['vendedor'];
    if (!$titulo) {
        $errores[] = "Debes agregar un titulo";
    }

    $query = "INSERT INTO `propiedades` (`titulo`, `precio`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `vendedores_id`) VALUES
    ('$titulo', '$precio', '$descripcion','$habitaciones','$wc','$estacionamiento','$vendedor');";

    $insert = mysqli_query($db, $query);
    if ($insert) {
        echo ("Todo bien");
    }
}

require '../../includes/funciones.php';
incluirTemplate('header', $inicio = false, $admin = true);
?>
<main class="contenedor seccion">
    <h1>Crear</h1>

    <form method="POST" action="./crear.php" class="form">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpg, image/png">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Infromación de la propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1">
            <label for="wc">Baños</label>
            <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1">
            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option selected disabled value="">-- Selecciona --</option>
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>
        <div class="alinear-derecha">
            <input type="submit" class="btn-verde" value="Crear propiedad">
        </div>
    </form>
    <a class="btn-verde" href="../index.php">Volver</a>
</main>

<?php
incluirTemplate('footer', $inicio = false, $admin = true);
?>