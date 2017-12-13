<!DOCTYPE html>
<?php session_start(); include('conexionBD.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/solicitud.css">
  </head>
  <body>
    <nav class="navbar-inverse navbar-fixed-top" id="menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="glyphicon glyphicon-tasks"></span>
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
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" align="center">
        <h4 id="tituloMenu"><?=$_SESSION['admin'];  ?> <?=$_SESSION['apellidoPa'];  ?> <?=$_SESSION['apellidoMa'];  ?></h4>
        <div class="cuadro2">
          <img src="<?=$_SESSION['foto']  ?>" alt="perfil" width="250px" height="250px" class="img-circle"><br><br>
          <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal1">Editar foto</a>
        </div>

    </div>
    <div class="col-sm-7" align="center">
      <h1 align="center">Informacion personal</h1><br><br>
      <form class="form-horizontal" action="actualizarInfo.php" method="post" align="center">
          <div class="form-group">
            <label class="control-label col-sm-3" for="nombre">Nombre:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="nombre" placeholder="<?=$_SESSION['admin'];  ?>" disabled>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="apellidos">Apellidos:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="apellidos" placeholder="<?=$_SESSION['apellidoPa'];  ?><?=$_SESSION['apellidoMa'];  ?>" disabled>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="nombre">No. Control:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="noControl" placeholder="<?=$_SESSION['num_control'];  ?>" disabled>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email" value="<?=$_SESSION['email'];  ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="carrera">Carrera:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="carrera" placeholder="<?=$_SESSION['carrera'];  ?>" disabled>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="contra">PIN:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="pin" value="<?=$_SESSION['pin'];  ?>">
              </div>
          </div>
          <div class="botones">
          <input type="submit" class="btn btn-primary" role="button" value="Editar informacion">
          </div>
      </form>
    </div>
  </div><br>
  <div class="row">
    <div class="col-sm-6">
      <table class="table table-bordered">
        <thead>
          <tr class="colorTituloTabla">
            <th>Información</th>
            <th>Número de horas</th>
          </tr>
        </thead>
        <tbody  class="colorContenidoTabla">
          <tr>
            <td>Horas reportadas</td>
            <td><?=$_SESSION['horasReportadas'];  ?></td>
          </tr>
          <tr>
            <td>Horas acumuladas</td>
            <td><?=$_SESSION['horasAcumuladas'];  ?></td>
          </tr>
          <tr>
            <td>Total de horas a cubrir</td>
            <td>500</td>
          </tr>
        </tbody>
      </table>

    </div>
    <div class="col-sm-6">
      <table class="table table-bordered">
        <thead>
          <tr class="colorTituloTabla">
            <th>Nombre del documento</th>
            <th>Documento entregado</th>
            <th>Decreto</th>
            <th>Observaciones</th>
          </tr>
        </thead>
        <tbody class="colorContenidoTabla">
          <?php
              $consulta = mysqli_query($conexion, " select do.no_control,do.nom_documento,do.documento,es.estado,do.observaciones from documentos
               as do JOIN estadodocumento as es on es.idEstadoDocumento = do.idEstadoDocumento WHERE do.no_control = '".$_SESSION['num_control']."'");
               while ($row = mysqli_fetch_array($consulta)) {
                  echo "<tr>"
                  ."<td>".utf8_encode($row['nom_documento'])."</td>"
                  ."<td>".$row['documento']."</td>"
                  ."<td>".$row['estado']."</td>"
                  ."<td>".$row['observaciones']."</td>"
                  ."</tr>";
               }
               mysqli_close($conexion);
           ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!--  Ventana modal para la imagen    -->
  <div id="modal1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Subir una imagen de perfil</h4>
          </div>
          <div class="modal-body">
            <form action="subirFoto.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="file" name="imagenalumno" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted"></small>
            </div>
            <input type="submit" class="btn btn-primary" input type="submit" role="button" name="subirfoto" value="Subir">
          </div>
            </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
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
