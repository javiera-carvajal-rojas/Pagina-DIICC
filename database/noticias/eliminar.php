<?php
// Datos login
$id       = $_POST['id'];

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
	"DELETE FROM `noticias` WHERE `noticias`.`id` = {$id};;"
);
$sql->execute();

$Exito = "La eliminacion de la noticias se ha realizado con éxito. ";
include_once "AdminGestorDeNoticias.php";

?>