<!DOCTYPE html>
<?php session_start(); include('conexionBD.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constancia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/solicitud.css">
  </head>
  <body style="background-image: url(../img/fondoSistema.png); background-size: 100% 100%; background-attachment: fixed;">
    <nav class="navbar-inverse navbar-fixed-top" id="menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="glyphicon glyphicon-plus"></span>
      </button>
      <a class="navbar-brand" href="#" id="menu">Servicio Social</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="inicio.php" id="menu">Inicio</a></li>
        <li><a href="final.php" id="menu">Reporte final</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="perfil.php" id="menu"><img src="<?=$_SESSION['foto']  ?>" alt="perfil" width="25px" height="25px"> <?=$_SESSION['admin']  ?></a></li>
      <li><a href="../index.php" id="menu"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
    </ul>
  </div>
  </div>
</nav>
<div class="encabezado barra">
    <img src="../img/sep.jpg" alt="sep" width="10%" height="10%" id="sep">
    <img src="../img/tecnm.jpg" alt="tecnm" width="10%" height="10%">
    <img src="" alt="Sistema de Control del Servicio Social" id="Titulo">
    <img src="../img/itver.png" alt="s" width="9%" height="9%">
</div>
  <div class="row">
    <div class="col-sm-4">
      <h2 id="reporteFinal">TU CONSTANCIA DEBE CONTENER:</h2><br>
      <ol id="texto" class="cuadro1">
        <li>Firma del Director del Instituto Tecnológico.</li>
        <li>Firma del Director del Instituto Tecnológico.</li>
        <li>Sello oficial de la institución.</li>
      </ol>
    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">
      <img src="../img/info1.jpg" class="img-circle" alt="info" width="60%" height="60%">
    </div>
  </div><br><br>
 <div class="cuadro1">


  <div class="row">
    <div class="col-sm-12">
      <img src="../img/dudas.jpg" alt="dudas">
      <img src="../img/f.jpg" alt="f" width="10%" height="10%" class="img-circle">
    </div>
    <div class="col-sm-4">
      <img src="../img/img1.jpg" alt="1" class="img-circle">
    </div>
    <div class="col-sm-8">
      <h3>Jefe del departamento de Gestión y Vinculación:</h3>
      <h4>MC. Teodoro Arana Miller</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <img src="../img/img2.jpg" alt="1" class="img-circle">
    </div>
    <div class="col-sm-8" >
      <h3>Jefa de la oficina de servicio social:</h3>
      <h4>Lic. Edith Cámara Paredes</h4>
      <h4>Lic. Monica Pacheco Medina</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <img src="../img/sitio.jpg" alt="1" class="img-circle">
    </div>
    <div class="col-sm-8" >
      <h3>https://gestion.itver.edu.mx/</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <img src="../img/tel.jpg" alt="1" class="img-circle">
    </div>
    <div class="col-sm-8" >
      <h3>Teléfono oficina:</h3>
      <h4>(229)938-3765</h4>
      <h4>(229)9341500 ext 112</h4>
    </div>
  </div>
  </div><br><br>
  <div class="row cuadro1">
      <div class="col-sm-6">
        <h2>GRACIAS Y MUCHO EXITO!</h2>
      </div>
      <div class="col-sm-6">
        <img src="../img/sol.jpg" alt="sss" class="img-circle">
      </div>
  </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-sm-8">
        <b>Gestion Tecnológica y Vinculación</b>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
