<!DOCTYPE html>
<?php
  session_start();
  session_destroy();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/principal.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Solicitud Recibida</title>
  </head>
  <body style="background-image: url(../img/fondo.png); background-size: 100% 100%; background-attachment: fixed;">
   <nav class="navbar-inverse navbar-fixed-top" id="menu">
     <div class="container-fluider">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
           <span class="glyphicon glyphicon-plus"></span>
         </button>
       </div>
       <div class="collapse navbar-collapse" id="navbar-collapse">
         <img src="../img/itver.png" alt="itver" width="5%" height="5%">
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
     </div>
    </div>
</nav>

    <div class="jumbotron">
        <div class="encabezado">
          <h2><b>Gestión Tecnológica y Vinculación</b></h2>
          <img src="../img/logo.jpg" alt="logo" class="img-rounded" width="98%" height="100%">
        </div>
        <div class="container">
          <div class="servicio">
            
              <h4><b>Tu Solictud ha sido recibida correctamente!, porfavor espera al administrador que valide tus datos para poder empezar a subir tus documentos.</b><br>Se enviará a tu correo electronico la respuesta de la solicitud y tu PIN para acceder en breve.<br>Mucha suerte y exito!</h4>
            <h5>Esta pagina se rediccionará automaticamente :D</h5>

          </div>
        </div>
    </div>
      <?php header("refresh: 20; url = ../index.php");?>
    <div class="panel-footer">
      <div class="row">
        <div class="col-sm-12">
          <b>Bienvenido al sitio web de tramites para la realización del Servicio Social</b>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
