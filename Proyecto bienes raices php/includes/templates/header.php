<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="<?php echo $admin ? '../..' : '.' ?>/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="<?php echo $admin ? '../..' : '.' ?>/index.php">
                    <img src="<?php echo $admin ? '../..' : '.' ?>/build/img/logo.svg" alt="Logo">
                </a>
                <div class="movil-menu">
                    <img src="<?php echo $admin ? '../..' : '.' ?>/build/img/barras.svg" alt="Icono menu">
                </div>
                <div class="derecha">
                    <img class="dark-mode-btn" src="<?php echo $admin ? '../..' : '.' ?>/build/img/dark-mode.svg" alt="Btn dark mode">
                    <nav class="navegacion">
                        <a href="<?php echo $admin ? '../..' : '.' ?>/nosotros.php">Nosotros</a>
                        <a href="<?php echo $admin ? '../..' : '.' ?>/anuncios.php">Anuncios</a>
                        <a href="<?php echo $admin ? '../..' : '.' ?>/blog.php">Blog</a>
                        <a href="<?php echo $admin ? '../..' : '.' ?>/contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) {?>
                <h1>Venta de casa y departamentos exclusivos de lujo</h1>
            <?php } ?>
            
            
        </div>
    </header>