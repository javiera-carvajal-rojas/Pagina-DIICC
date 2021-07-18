<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académico - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>

<body>

    <body>
        <!-- Header -->
        <?php include_once "include/header2.php"; ?>
        <!-- Header Area End -->
        <!-- Banner Area Start
        <div class="banner-area-wrapper">
            <div class="banner-area text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Detalles </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Banner Area End -->
        <!-- Teacher Start -->
        <div class="teacher-details-area pt-150 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="teacher-details-img">
                            <img src="img/academicos/img1.jpg" alt="teacher">
                        </div>
                        <style type="text/css">
                            table,
                            th,
                            td {
                                border: 1px solid black;
                            }
                        </style>
                        <h3>Artículos</h3>
                        <table style="width: 100%">
                            <tr align="center">
                                <td>Título</td>
                                <td>Autores</td>
                                <td>Fecha de Publicación</td>
                                <td>Número de Páginas</td>
                                <td>Ver artículo</td>
                            </tr>
                            <?php
                            $query = "SELECT `titulo`, `Autores`, `Fecha`, `Acceso` FROM `publicaciones`";
                            $res = $conexion->query($query);
                            while ($row = $res->fetch_assoc()) {
                            ?>
                                <tr align="center">
                                    <td><?php echo $row['TituloPublicacion']; ?></td>
                                    <td><?php echo $row['Autores']; ?></td>
                                    <td><?php echo $row['Fecha']; ?></td>
                                    <td><?php echo $row['paginas']; ?></td>
                                    <td><a href="<?php echo $row['Acceso']; ?>">Ver Artículo</a></td>
                                </tr>
                                <?php
                            } ?>
                        </table>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="teacher-details-content ml-50">
                            <h2>Servando Campillay</h2>
                            <h5>Profesor</h5>
                            <h4></h4>
                            <p> </p>
                            <ul>
                                <li><span>Grado Academico: </span>Magister en Ingeniería de Software, Universidad de Tarapacá,Licenciado en Ciencias de la Ingeniería, Universidad de Tarapacá.
                                </li>
                                <li><span>Areas de interes: </span>Lenguajes de programación,Base de datos,Inteligencia de negocios,Inteligencia artificial.
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="teacher-contact">
                            <h4>Informacion de contacto:</h4>
                            <p><span>Correo: </span>servando.campillay@uda.cl</p>
                            <p><span>FONO: </span>(52) 2 255683</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>