<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
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
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="height: 50px;"></div>
    <div class="container main">
      <div class="row caja">
        <div class="container">
          <div class="placeholder">
            <div class="col-md-3">
              <img  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </div>
            <div class="col-md-9"></div>
            <h2 class="normal"> Nombre sujeto</h2>
            <p class="normal"> Cualquier información pertinente</p>
          </div>
        </div>
      </div>
      <div style="height: 50px;"></div>
      <div class="row">
          <h3>Perfil</h3>
      </div>
      <form>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Nombre:</p>
      	</div>
      	<div class="col-md-9">
          <input type="text" name="">
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Detalle:</p>
      	</div>
      	<div class="col-md-9">
          <textarea ></textarea>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Grado Academico:</p>
      	</div>
      	<div class="col-md-9">
          <textarea ></textarea>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Areas de interes:</p>
      	</div>
      	<div class="col-md-9">
          <textarea ></textarea>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Publicaciones:</p>
      	</div>
      	<div class="col-md-9">
          <textarea ></textarea>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-3 normal">
          <p>Proyectos:</p>
      	</div>
      	<div class="col-md-9">
          <textarea ></textarea>
      	</div>
      </div>
      <button style="float: right;"> Modificar </button>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>
