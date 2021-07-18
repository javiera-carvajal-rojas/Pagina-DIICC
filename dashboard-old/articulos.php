<?php
require_once 'config.php';
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gestor de Articulos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-icon.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- HEADER -->

    <nav class="navbar navbar-fixed-top verde">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="AdminMenu.php">Admin UDA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="AdminMenu.php" class="Blancol">Volver</a></li>
                <li><a href="signup.php" class="Blancol">Registrar usuario</a></li>
                <li><a href="login.php">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- HEADER -->
<!-- Inicio de Actividades -->
<div class="content-box-large">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
            <button type="button" class="btn btn-basic btn-lg" data-toggle="modal" data-target="#AnNot">Añadir
            Investigación</button>
            <?php
            if (isset($Exito)) {
                echo "<div class='alert alert-success'>".$Exito."</div>";
                unset($Exito);
            }
            ?>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">

                        <thead>
                            <tr>
                                <th>Titulo Publicación</th>
                                <th>Revisar/Congreso</th>
                                <th>Autores</th>
                                <th>Fecha</th>
                                <th>Paginas</th>
                                <th>Base de datos</th>
                                <th>Cuartil(FI)</th>
                                <th>Acceso</th>

                                <th></th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $sql = "select * from publicaciones";// mejorar query falta nombre del que subio la noticia
                                    $resultado = mysqli_query($conexion,$sql);
                                    while ($mostrar = mysqli_fetch_array($resultado)) {
                                        ?>
                                        <form action="ModificarArticulo.php" autocomplete="off" method="POST" enctype="multipart/form-data">
                                            <tr>
                                                <td style="display: none;"><input type="text" name="id"
                                                    value="<?php echo $mostrar['id']; ?>" size="50" maxlength="50"></td>
                                                    <td><input type="text" name="titulo" value="<?php echo $mostrar['TituloPublicacion']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="text" name="Revision" value="<?php echo $mostrar['Revision']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="text" name="Autores" value="<?php echo $mostrar['Autores']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="date" name="fecha" value="<?php echo $mostrar['Fecha']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="number" name="paginas" value="<?php echo $mostrar['paginas']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="text" name="base" value="<?php echo $mostrar['Basesdedatos']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="text" name="Cuartil" value="<?php echo $mostrar['Cuartil']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        <td><input type="text" name="Acceso" value="<?php echo $mostrar['Acceso']; ?>"
                                                        size="50" maxlength="50"></td>
                                                        </td>
                                                        <td><button type="submit" class="btn btn-success">Modificar Articulo</button></td>
                                                    </form>
                                                    <form action="eliminarArticulo.php" method="post" autocomplete="off">
                                                        <td>
                                                            <input type="text" name="id" value="<?php echo $mostrar['id']; ?>"
                                                            style="display: none;">
                                                            <button type="submit" class="btn btn-danger">Eliminar Articulo</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php }/*cierre while*/ ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--<div class="col-xs-3"></div>-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="modal fade" id="AnNot" role="dialog">
                                <div class="modal-dialog modal-sm modal-xs modal-md modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title">Añadir Artículo</h2>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h3>Llena los siguientes campos:</h3>
                                                </div>
                                            </div>

                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form" action="crearPublicacion.php" method="POST" enctype="multipart/form-data">
                                                   <div class="form-group">
                                                        <label for="Titulo" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Academico: </label>
                                                        <div class="col-md-10">
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>-----</option>
                                                            <?php
                                                            session_start();
                                                            require_once"config.php";
                                                            $query="SELECT Nombre, rut FROM academicos";
                                                            $res= $conexion->query($query);
                                                            while($row=$res->fetch_assoc()){
                                                                ?>
                                                                <option>
                                                                    <?php echo $row['Nombre'];?>
                                                                </option>
                                                                <input type="hidden" name="rut" value="<?php echo $row['rut'];?>">
                                                            <?php
                                                            }
                                                            ?>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Titulo"
                                                        class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Titulo Publicación: </label>
                                                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="text" class="form-control" name="Titulo" placeholder=""
                                                            required="">
                                                        </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Revisar/Congreso: </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <textarea class="form-control" name="descripcion" rows="3"
                                                    required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                            class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Autores: </label>
                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                <input type="text" name="autores" class="form-control">
                                            </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="Titulo"
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Fecha: </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="date" class="form-control" name="fecha" placeholder=""
                                                    required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Titulo"
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Páginas: </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="number" class="form-control" name="Paginas" placeholder=""
                                                    required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Titulo"
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Base de Datos: </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" name="Base" placeholder=""
                                                    required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Titulo"
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Cuartil (FI):  </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" name="Cuartil" placeholder=""
                                                    required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Titulo"
                                                class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Acceso: </label>
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="text" class="form-control" name="Acceso" placeholder=""
                                                    required="">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn  verde">Subir Artículo</button>
                                                    <button type="reset" class="btn btn-warning">Limpiar campos </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- FOOTER -->
    <footer class="footer-area">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-widget pr-60">
                            <div class="footer-logo pb-25">
                                <a href="http://www.uda.cl/"><img src="img/logo/logouda1.png" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>información</h3>
                            <ul>
                                <li><a href="teacher.html">Profesores</a></li>
                                <li><a href="noticias.php">Noticias</a></li>
                                <li><a href="event.html">Eventos</a></li>
                                <li><a href="malla1.html">Malla</a></li>
                                <li><a href="publicaciones.html">Publicaciones</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                                <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                                <li><a href="http://www.cta.uda.cl/index.php?lang=es" target="_blank">CTA</a></li>
                                <li><a href="http://www.fscu.uda.cl/" target="_blank">FSCU</a></li>
                                <li><a href="http://www.cmd.uda.cl/" target="_blank">CMD</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Contacto</h3>
                            <p>Ubícanos en <br>Copiapó, Av. Copayapu 485</p>
                            <p>(52) 225 5400</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Creado por alumnos de Ingeniería Civil en Computación e Informática.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->

    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>