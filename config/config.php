<?php

// Datos admin SQL
$servidor = "localhost";
$usuario  = "root";
$password = "";
$database = "paginaDIICC";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: ".$conexion->connect_error);
}

?>