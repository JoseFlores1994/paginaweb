<!DOCTYPE html>
<?php
    /* Empezamos la sesión */
    session_start();
    include('conexionBD.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <title>Inicio Administrador</title>
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
        <li><a href="inicioAdmin.php" id="menu">Inicio</a></li>
        <li><a href="solicitudRecibida.php" id="menu">Solicitudes recibidas</a></li>
        <li><a href="" id="menu">Actualizar fechas</a></li>
        <li><a href="#" id="menu" data-toggle="modal" data-target="#carreras">Actualizar carreras</a></li>
        <li><a href="" id="menu">Administradores</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
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

  <h3 id="tituloMenu"><b>Lista de alumnos en el Servicio Social</b></h3>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Num control</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Sexo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Carrera</th>
        <th>Periodo</th>
        <th>Semestre</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
          $consulta = mysqli_query($conexion,"select la.fotoAlumno,a.no_control,a.nombre,a.apellido_paterno,a.apellido_materno,a.sexo,a.telefono,a.email,c.nom_carrera, a.periodo,a.semestre
          from listaalumnos as la JOIN alumnos as a on la.no_control = a.no_control JOIN carrera as c
          on a.idCarrera=c.idCarrera")   or
          die("Problemas en el select:".mysqli_error($conexion));

          while($row = mysqli_fetch_array($consulta)){
            echo "<tr>"
                ."<td><img src='".$row['fotoAlumno']."' alt='perfil' width='50px' height='50px'></td>"
                ."<td>".$row['no_control']."</td>"
                ."<td>".$row['nombre']."</td>"
                ."<td>".$row['apellido_paterno']."</td>"
                ."<td>".$row['apellido_materno']."</td>"
                ."<td>".$row['sexo']."</td>"
                ."<td>".$row['telefono']."</td>"
                ."<td>".$row['email']."</td>"
                ."<td>".utf8_encode($row['nom_carrera'])."</td>"
                ."<td>".$row['periodo']."</td>"
                ."<td>".$row['semestre']."</td>"
                ."<td> <a href='perfilSeleccionado.php?num_control=".$row['no_control']."'>Documentos entregados</a></td>"
                ."</tr>";
          }
          mysqli_close($conexion);
       ?>
    </tbody>
  </table>
 <!-- Ventana modal para las carreras  -->
  <div class="modal fade" id="carreras" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Actualizar Carreras</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="usr">Inserta una carrera</label>
                    <input type="text" class="form-control" id="usr" name="carrera">
                  </div>
                  <input type="Submit" name="enviar" value="Actualizar" class="btn btn-default">
                </form>
              </div>
              <div class="col-sm-6">
                <label for="usr">Carreras existentes</label>
                <div class="form-group">
                  <?php
                  include('conexionBD.php');

                    $result=mysqli_query($conexion,"select nom_carrera from carrera");
                   ?>
                <select class="form-control" id="sel1">
                   <?php
                   while ($row = mysqli_fetch_assoc($result))
                       {
                    ?>
                    <option value="<?=utf8_encode($row['nom_carrera'])?>"><?=utf8_encode($row['nom_carrera'])?></option>
                    <?php
                     }
                     mysqli_close($conexion);
                     ?>
                </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-sm-8">
        <b>Gestion Tecnológica y Vinculación</b>
      </div>
        <div class="col-sm-4">
          <b>Administrador: <?=$_SESSION['admin'];  ?></b>
        </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="../js/tabla.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
