<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador - DIICC UDA</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
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
            <li><a href="login.php" class="Blancol">Volver</a></li>
            <li><a href="signup.php" class="Blancol">Registrar usuario</a></li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="height: 50px;"></div>
    <div class="container main" id="opciones">
      <div style="height: 50px;"></div>
      <div class="row">
          <div class="row placeholders">
            <div class="col-xs-3 col-sm-4 placeholder resaltar paddintop" onclick="window.location = 'AdminGestorDeNoticias.php'">
              <label for="Noticias">
              <img src="img/AdminMenu/Noticias.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h3>Noticias</h3>
              </label>
            </div>
            <div class="col-xs-3 col-sm-4 placeholder resaltar paddintop" onclick="window.location = 'AdminGestorDeArticulos.php'">
              <img src="img/AdminMenu/Investigacion.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h3>Agregar Investigación</h3>
            </div>
            <div class="col-xs-3 col-sm-4 placeholder resaltar paddintop" onclick="window.location = 'AdminBolsa.html'">
              <img src="img/AdminMenu/BolsaTrabajo.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h3>Bolsa de Trabajo</h3>
            </div>
          </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>
