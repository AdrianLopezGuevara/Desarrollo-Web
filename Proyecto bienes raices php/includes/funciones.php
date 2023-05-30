<?php
require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false, bool $admin = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}
