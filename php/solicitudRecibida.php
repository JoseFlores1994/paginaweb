<?php
session_start();
include('conexionBD.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Solicitudes recibidas</title>
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
<div class="container-fluid">
  <h3 id="tituloMenu"><b>Lista de solicitudes</b></h3>
     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <?php
         $result = mysqli_query($conexion,"SELECT a.no_control,a.nombre,a.apellido_paterno,a.apellido_materno,a.sexo,a.telefono,a.email,c.nom_carrera,a.periodo,a.semestre FROM alumnos a, carrera c, solicitudes s WHERE a.idCarrera = c.idCarrera AND a.no_control = s.no_control");
         if ($row = mysqli_fetch_array($result)){
             echo "
    <thead>
      <tr>
        <th>N° control</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Sexo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Carrera</th>
        <th>Periodo</th>
        <th>Semestre</th>
        <th width='100px'></th>
      </tr>
    </thead>";
             do {
                echo "
                <tbody>
                 <tr>
                    <td>".$row["no_control"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido_paterno"]."</td>
                    <td>".$row["apellido_materno"]."</td>
                    <td>".$row["sexo"]."</td>
                    <td>".$row["telefono"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".utf8_encode($row["nom_carrera"])."</td>
                    <td>".$row["periodo"]."</td>
                    <td>".$row["semestre"]."</td>
                    <td>
                    <form action="."btnaceprecha.php?id=".$row['no_control']." method="."post".">
                        <button type="."submit"." name="."aceptado"." value="."Aprobar"." class='btn btn-primary'><span class='glyphicon glyphicon-ok'></button>
                        <button type="."submit"." name="."rechazado"." value="."Rechazar"." class='btn btn-danger'><span class='glyphicon glyphicon-trash'></button>
                        </form>
                    </td>
                 </tr>
                </tbody>";
                } while ($row = mysqli_fetch_array($result));
             echo "</table>";
         } else {
             echo "¡ No se ha encontrado ningún registro !";
                }
         ?>
</div>

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
                     ?>
                </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="../js/tabla.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
