<?php
    session_start();
    $rut=$_POST["rut"];
    $titulo=$_POST["Titulo"];
    $revisar=$_POST["descripcion"];
    $autores=$_POST["autores"];
    $fecha=$_POST["fecha"];
    $Paginas=$_POST["Paginas"];
    $base=$_POST["Base"];
    $Cuartil=$_POST["Cuartil"];
    $Acceso=$_POST["Acceso"];

    require_once 'config.php';

    $query="INSERT INTO publicaciones (TituloPublicacion, Revision, Autores, Fecha, paginas, Basesdedatos, Cuartil, Acceso, rut)
    VALUES ('$titulo', '$revisar', '$autores', '$fecha', '$Paginas', '$base', '$Cuartil', '$Acceso', '$rut')";
    $res= $conexion->query($query);
    if($res){
        include_once "AdminGestorDeArticulos.php";
    }
?>