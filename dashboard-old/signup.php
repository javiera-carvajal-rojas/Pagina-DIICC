<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Registra un usuario - DIICC UDA</title>
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
         <nav class="navbar navbar-fixed-top verde">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                <li><a href="index.php">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div style="height: 50px;"></div>
        <div class="container main" id="opciones">
            
        <!-- Login start -->
        <div class="login-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>Registro</h2>
                                </div>
                                <?php
                                    if (isset($signupError)) {
                                    echo "<div class='alert alert-danger'>".$signupError."</div>";
                                    unset($signupError);
                                    }
                                    if (isset($signupExito)) {
                                    echo "<div class='alert alert-success'>".$signupExito."</div>";
                                    unset($signupExito);
                                    }
                                ?>
                                <div class="login-form">
                                    <form action="crearUsuario.php" method="post" autocomplete="off">
                                        <input type="text" name="nombre" placeholder="Nombre" required="">
                                        <input type="text" name="apellido" placeholder="Apellido" required="">
                                        <input type="email" name="correo" placeholder="Correo institucional" required="">
                                        <input type="password" name="password" placeholder="Contraseña" required="">
                                        <input type="password" name="pass-repetida" placeholder="Repite la contraseña" required="">
                                        <div class="button-box text-center">
                                            <button type="submit" class="default-btn">Crear cuenta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login end -->
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
