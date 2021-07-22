<!DOCTYPE html>
<html lang="es">
<?php
session_start();
$file = __FILE__;
$pagetitle = "BOLSA DE TRABAJO - DIICC UDA";
include_once "../include/functions.php";
include_once "../config/config.php";
include_once "../include/dashboard/head.php";
?>

<body>
    <div class="container-contenido">
        <?php include_once "../include/dashboard/header.php"; ?>
        <div class="capa"></div>
        <!--	--------------->
        <?php include_once "../include/dashboard/navbar.php"; ?>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                    <div class="container-formulario">
                        <?php
                        $sql = sprintf("select * from trabajos where id=%s", $_GET['id']);
                        $resultado = mysqli_query($conexion, $sql);
                        $mostrar = mysqli_fetch_array($resultado);
                        ?>
                        <form class="form" action="../database/trabajo/modificar.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name='id' <?php echo sprintf('value="%s"', $_GET['id']); ?>>

                            <div class="input-group">
                                <input class="form-control" type="file" name="img">
                                <span class="input-group-addon" id="basic-addon1"><i class="bi bi-file-image"></i></span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"><i class="bi bi-briefcase"></i></span>
                                <input type="text" name='cargo' class="form-control" placeholder="Titulo" aria-describedby="basic-addon1" <?php echo sprintf('value="%s"',$mostrar['cargo']); ?>>
                            </div>
                           <div class="input-group">
                                <span class="input-group-addon" id="basic-addon6"><i class="bi bi-building"></i></span>
                                <input  class="form-control" name="empresa" placeholder="Empresa" <?php echo sprintf('value="%s"',$mostrar['empresa']); ?>>
                            </div>
                             <div class="input-group">
                                <span class="input-group-addon" id="basic-addon6"><i class="bi bi-geo-alt-fill"></i></span>
                                <input  class="form-control" name="ciudad" placeholder="ciudad" <?php echo sprintf('value="%s"',$mostrar['ciudad']); ?>>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3"><i class="bi bi-file-font"></i></span>
                                <textarea class="form-control" name="descripcion" placeholder="Descripcion" style="height: 250px;"><?php echo   $mostrar['descripcion']; ?></textarea>
                            </div>

                            <div class="container-bttn p-3 row">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

<?php include_once fromroot($file, "include/dashboard/footer.php", TRUE); ?>

</html>