<?php

// Datos login
$nombre       = $_POST['nombre'];
$apellido     = $_POST['apellido'];
$correo       = $_POST['correo'];
$passLogin    = $_POST['password'];
$passRepetida = $_POST['pass-repetida'];

if ($passLogin !== $passRepetida) {
	$signupError = "Las contraseñas ingresadas no coinciden. Por favor, vuelve a ingresar tus datos.";
	include_once "signup.php";
}

// Crea el hash de la contraseña
$hash = password_hash( $passLogin, PASSWORD_DEFAULT );

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
   "INSERT INTO Usuarios (correo, password, nombre, apellido) 
	VALUES (?, ?, ?, ?)"
);
$sql->bind_param( "ssss", $correo, $hash, $nombre, $apellido );
$sql->execute();

$signupExito = "El registro del usuario se ha realizado con éxito. ";
include_once "signup.php";

?>