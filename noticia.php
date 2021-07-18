<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académicos - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";

    $id = $_GET['id'];
    $sql = "select * from noticias where id = {$id}";// mejorar query falta nombre del que subio la noticia
    $resultado = mysqli_query($conexion,$sql);
    $mostrar = mysqli_fetch_array($resultado);
?>
<!doctype html>
<html class="no-js" lang="en">
    <?php include_once "include/head.php"; ?>
    <body>
        <!-- HEADER -->
        <?php include_once "include/header2.php"; ?>
        <!-- HEADER -->
		
        <!-- Blog Start -->
        <div class="blog-details-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            <div class="blog-details-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></a>
                            </div>
                            <div class="blog-details-content">
                                <h2><?php echo $mostrar['titulo']; ?></h2>
                                <h6>Escrito por <?php echo $mostrar['correo']; ?>  / <?php echo $mostrar['fecha']; ?></h6>
                                <p><?php echo $mostrar['descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>Buscar Noticias</h3>
                                <div class="blog-search">
                                    <form id="search" action="#">
                                        <input type="search" placeholder="Buscar..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-blog-widget mb-47">
                                <h3>Noticias por año</h3>
                                <ul>
                                    <li><a href="noticias.html">2019 (10)</a></li>
                                    <li><a href="noticias.html">2018 (12)</a></li>
                                    <li><a href="noticias.html">2017 (08)</a></li>
                                    <li><a href="noticias.html">2016 (15)</a></li>
                                    <li><a href="noticias.html">2015 (20)</a></li>
                                    <li><a href="noticias.html">2014 (23)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
