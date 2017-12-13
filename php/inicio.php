<!DOCTYPE html>
<?php
  session_start();
  include('conexionBD.php');
if(isset($_SESSION['num_control']) && !empty($_SESSION['num_control'])){

}else{
  header('Location:../index.php');
}

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
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
        <li><a href="final.php" id="menu">Reporte final</a></li>
        <li><a href="info.php" id="menu">Acerca de</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="perfil.php" id="menu"><img src="<?=$_SESSION['foto'];  ?>" alt="perfil" width="25px" height="25px"> <?=$_SESSION['admin'];  ?></a></li>
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

<h3 style="color:blue; text-align: center;">Bienvenido <?=$_SESSION['admin'];  ?> a tu servicio social</h3>

    <div class="row marco">
      <div class="col-sm-4">
          <h4 id="tituloMenu">Documentos importantes</h4>
          <div class="cuadro1">
          <ol>

            <li id="listaDocumentos"><a href="" data-toggle="modal" data-target="#modal1">Solicitud </a>del servicio social</li>
            <li id="listaDocumentos"><a href="" data-toggle="modal" data-target="#modal1">Carta de asignacion del servicio social</a></li>
            <li id="listaDocumentos"><a href="#" data-toggle="modal" data-target="#modal1">Carta compromiso </a> del servicio social</li>
            <li id="listaDocumentos"><a href="#" data-toggle="modal" data-target="#modal1">Liberacion del extraescolar </a>(copia)</li>
            <li id="listaDocumentos"><a href="#" data-toggle="modal" data-target="#modal1">Kardek actualizado</a></li>
            <li id="listaDocumentos"><a href="#" data-toggle="modal" data-target="#modal1">Copia de tu horario actual</a></li>
            <li id="listaDocumentos"><a href="#" data-toggle="modal" data-target="#modal1">Carta de aceptacion </a>solicitarla donde realizara el servicio social, sea interno o externo</li>
            <h3  class="Tentrega">Fecha de entrega:</h3>
            <h4>07 de Agosto al 28 de Agosto</h4>
            </div>
          </ol>

    </div>
    <div class="col-sm-4">
      <h4 id="tituloMenu">Reportes bimestrales</h4>
      <div class="cuadro1">
      <h4 id="enlace"><a href="#" id="enlace" data-toggle="modal" data-target="#modal2">Primer reporte</a></h4>
      <h5><b>28 De Agosto al 28 de Octubre 2017</b></h5><br>
      <h4 id="enlace"><a href="#" id="enlace" data-toggle="modal" data-target="#modal2">Segundo reporte</a></h4>
      <h5><b>28 de Octubre al 28 Diciembre de 2017</b></h5><br>
      <h4 id="enlace"><a href="#" id="enlace" data-toggle="modal" data-target="#modal2">Tercer reporte</a></h4>
      <h5><b>28 de Diciembre al 28 de Febrero de 2018</b></h5>
      <h5><b>TIENEN 5 DIAS HABILES DESPUES DE LA FECHA REPORTADA</b></h5><br>
      <h4 id="enlace"><a href="#" id="enlace" data-toggle="modal" data-target="#modal2">Entrega de reporte final y Formato de
Evaluación :</a></h4>
      <h5><b>Del 28 de Febrero de 2018 al 12 de Marzo del 2018</b></h5></div>
    </div>
    <div class="col-sm-4">
      <h4 id="tituloMenu">DURACIÓN</h4>
      <img src="../img/duracion.jpg" alt="duracion" class="img-rounded" width="100%" height="100%">
      <h4 style="text-align: center;">Minimo 500 horas</h4>
      <h4 style="text-align: center;">Minimo 6 meses</h4> <br>
      <div class="cuadro1">
        <h4>Fecha de inicio y fecha de terminación:</h4>
        <h4>28 de AGOSTO 2017 – 28 de FEBRERO 2018</h4>
      </div>
    </div>
  </div>




  <!--  Ventana modal para los documentos    -->
  <div id="modal1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Documento a entregar</h4>
          </div>
          <div class="modal-body">
          <form action="subirDocumento.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <input type="file" name="documentoalumno" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted"></small>
            </div>
            <input type="submit" class="btn btn-primary" input type="submit" role="button" name="subirDocumento" value="Subir">
          </div>
            </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

  <!--  Ventana modal para los reportes    -->
  <div id="modal2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Reporte a entregar</h4>
          </div>
          <div class="modal-body">
            <form action="subirDocumento.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="file" name="documentoalumno" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">El reporte correspondiente a la fecha indicada</small>
            </div>
            <input type="submit" class="btn btn-primary" input type="submit" role="button" name="subirDocumento" value="Subir">
          </div>
            </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div><br>
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
