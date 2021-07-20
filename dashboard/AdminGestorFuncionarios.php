<!DOCTYPE html>
<html lang="es">
<?php

	session_start();
    $file = __FILE__;
    $pagetitle = "ACADEMICOS - DIICC UDA";
    include_once "../config/config.php";
    include_once "../include/functions.php";

	if (!isset($_SESSION['usuario'])){
		header(sprintf('Location:%s', fromroot($file, "index.php", True)));
	}
	include_once fromroot($file, "include/dashboard/head.php", TRUE);
?>

<body>
    <div class="container-contenido">
        <?php include_once fromroot($file, "include/dashboard/header.php", TRUE); ?>
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <?php include_once fromroot($file, "include/dashboard/navbar.php", TRUE); ?>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                    <div class="container-boton">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcourse-modal">Añadir funcionario</button>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</body>

<?php include_once fromroot($file, "include/dashboard/footer.php", TRUE); ?>
</html>