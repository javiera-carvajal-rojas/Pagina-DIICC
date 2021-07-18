<?php
session_start();
// Datos login
$titulo       = $_POST['Titulo'];
$descripcion     = $_POST['descripcion'];
$img= addslashes(file_get_contents($_FILES["img"]["tmp_name"]));

require_once 'config.php';

// Insertar usuario
$query="INSERT INTO noticias(titulo,fecha,descripcion,imagen,correo)
        VALUES('$titulo',current_timestamp(),'$descripcion','$img','{$_SESSION["USUARIO"]}')";
$res= $conexion->query($query);

$Exito = "El registro del noticias se ha realizado con éxito. ";
include_once "AdminGestorDeNoticias.php";

?>