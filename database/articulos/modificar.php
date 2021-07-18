<?php
	session_start();
	// Datos login
	$id= $_POST['id'];
	$Titulo=$_POST['titulo'];
	$Revision=$_POST['Revision'];
	$Autores=$_POST['Autores'];
	$fecha=$_POST['fecha'];
	$paginas=$_POST['paginas'];
	$base=$_POST['base'];
	$Cuartil=$_POST['Cuartil'];
	$Acceso=$_POST['Acceso'];

	require_once 'config.php';

	$query="UPDATE publicaciones SET TituloPublicacion='$Titulo',Revision='$Revision',Autores='$Autores',
	Fecha='$fecha',paginas='$paginas',Basesdedatos='$base',Cuartil='$Cuartil',Acceso='$Acceso'
	WHERE id=$id";
	$res= $conexion->query($query);
	$Exito = "La Modificacin del Articulo se ha realizado con éxito. ";
	include_once "AdminGestorDeArticulos.php";
?>