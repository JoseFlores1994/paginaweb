<?php
session_start();
include('./php/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Solicitud</title>
    <link rel="stylesheet" type="text/css" href="css/solicitud.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
    
  <body style="background-image: url(img/fondo.png); background-size: 100% 100%; background-attachment: fixed;">
      
    <div class="encabezado">
        <img src="img/sep.jpg" alt="sep" width="10%" height="10%" id="sep">
        <img src="img/tecnm.jpg" alt="tecnm" width="10%" height="10%">
        <img src="" alt="Sistema de Control del Servicio Social" id="Titulo">
        <img src="img/itver.png" alt="s" width="9%" height="9%">
    </div>
    <div class="" >
      <div class="contenedor">
        <img src="img/SS2016.png" alt="SSER" width="50%" height="50%" id="seps">
        <form role="form" action="php/checkSolicitud.php" method="post" enctype="multipart/form-data" id="formulario" align="center">
          <h1>Datos personales</h1>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="apellidoP" placeholder="Ingresa tu apellido paterno">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="apellidoM" placeholder="Ingresa tu apellido materno">
                 </div>
            </div>
          </div><br>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
              <select class="form-control" id="sel1" name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" class="form-control" name="numControl" placeholder="No. de Control">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Ingresa tu email">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <h4>INGRESA TU CARRERA</h4>
              <div class="form-group">
                <?php $result=mysqli_query($conexion,"select * from carrera"); ?>
              <select class="form-control" id="sel1" name="carrera">
                 <?php while ($row = mysqli_fetch_assoc($result)){
                  ?><option value="<?=$row['idCarrera']?>"><?=utf8_encode($row['nom_carrera'])?></option>
                  <?php } ?>
              </select>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="	glyphicon glyphicon-earphone"></i></span>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono o celular">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                <input type="text" class="form-control" name="semestre" placeholder="Semestre que cursa">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                <input type="text" class="form-control" name="periodo" placeholder="Periodo que cursa">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="responsable" placeholder="Nombre de la persona responsable de la institucion">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" class="form-control" name="cargo" placeholder="Cargo que ocupa dentro de la empresa">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" name="lugar" placeholder="Nombre de la empresa o institucion">
                 </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6">
                
              <input type="submit" class="btn btn-primary" value="Enviar">
            <a href="index.php" class="btn btn-primary" role="button"><span></span>Regresar</a>
            </div>
              
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
