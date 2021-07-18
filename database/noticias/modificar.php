<?php
session_start();
// Datos login
$id       = $_POST['id'];
$titulo       = $_POST['titulo'];
$descripcion     = $_POST['descripcion'];

require_once 'config.php';

if(is_file(addslashes($_FILES["img"]["tmp_name"]))) {
	$img= addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
	$query="UPDATE noticias SET imagen=$img WHERE id=$id";
	$conexion->query($query);
}
// Insertar usuario
$sql = $conexion->prepare(
	"UPDATE `noticias` SET `titulo` = ?, `descripcion` = ? WHERE `noticias`.`id` = {$id};"
);
$sql->bind_param( "ss", $titulo, $descripcion);
$sql->execute();

$Exito = "El registro del noticias se ha realizado con éxito. ";
include_once "AdminGestorDeNoticias.php";

?>