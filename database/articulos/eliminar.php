<?php
// Datos login
$id       = $_POST['id'];

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
	"DELETE FROM `publicaciones` WHERE `publicaciones`.`id` = {$id};;"
);
$sql->execute();

$Exito = "La eliminacion del articulo se ha realizado con éxito. ";
include_once "AdminGestorDeArticulos.php";

?>