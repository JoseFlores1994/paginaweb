<!DOCTYPE html>
<?php session_start(); include('conexionBD.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte final</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/solicitud.css">
  </head>
  <body>

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
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="perfil.php" id="menu"><img src=<?=$_SESSION['foto']  ?> alt="perfil" width="25px" height="25px"> <?=$_SESSION['admin']  ?></a></li>
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
      <h1 id="tituloMenu">Reporte final</h1>
      <ol class="cuadro1">
        <li id="listaDocumentos">Empastado en transparente</li>
        <li id="listaDocumentos">Portada</li>
        <li id="listaDocumentos">Índice</li>
        <li id="listaDocumentos">Introducción</li>
        <li id="listaDocumentos">Marco teórico</li>
        <li id="listaDocumentos">Desarrollo de actividades</li>
        <li id="listaDocumentos">Resultados con evidencia documental y/o visual (fotos y
documentos)</li>
        <li id="listaDocumentos">Conclusiones</li>
        <li id="listaDocumentos">Recomendaciones</li>
        <li id="listaDocumentos">Anexar formato de evaluación</li>
      </ol>
    </div>
    <div class="col-sm-5" align="center">
      <h3 id="tituloMenu">CRITERIOS PARA EL REPORTE FINAL</h3>
      <ol class="cuadro1" >
        <li id="listaDocumentos">En Word, con letra Arial 12.</li>
        <li id="listaDocumentos">Sin faltas de ortografía.</li>
        <li id="listaDocumentos">Empastado en un formato estandarizado que se le indicará en la oficina de servicio social.</li>
      </ol>
      <h3 >Fecha de entrega: Del 28 de febrero al 12 de marzo 2018.</h3>
    </div>
  </div><br><br>

    <div class="row" id="rejilla1" style="text-align: center;">
      <h1 id="tituloMenu">Ejemplo de reporte final</h1>
      <div class="col-sm-4">
        <img src="../img/ejemplo1.jpg" alt="ejemplo1">
      </div>
      <div class="col-sm-4">
        <img src="../img/ejemplo2.jpg" alt="ejemplo2">
      </div>
      <div class="col-sm-4">
        <img src="../img/ejemplo3.jpg" alt="ejemplo3">
      </div>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-sm-8">
          <b>Gestion Tecnológica y Vinculación</b>
        </div>
        <div class="col-sm-4">
          <b>Hecho con bootstrap</b>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
