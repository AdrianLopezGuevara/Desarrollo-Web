<?php
$hostname = 'localhost';
$username = 'root';
$password = 'admin';
$database = 'bienesraices_crud';
/* $port;
$socket; */
function connect($hostname = 'localhost', $username = 'root', $password = 'admin', $database = 'bienesraices_crud'): mysqli
{
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if (!$connection) {
        echo ("Error en al conexión a la base");
        exit;
    }
    return $connection;
}