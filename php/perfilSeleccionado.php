<?php

  session_start();
  include('conexionBD.php');

  $_SESSION['num_control'] = $_REQUEST['num_control'];
  $sqlAdmin = mysqli_query($conexion,"select * from alumnos where no_control
   = '".$_SESSION['num_control']."'");
  while ($row = mysqli_fetch_array($sqlAdmin)) {
    $_SESSION['nombre'] = utf8_encode($row['nombre']);
    $_SESSION['apellidoPa'] = utf8_encode($row['apellido_paterno']);
    $_SESSION['apellidoMa'] = utf8_encode($row['apellido_materno']);
    $_SESSION['pin'] = $row['pin'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['idCarrera'] = $row['idCarrera'];
    $_SESSION['idHoras_realizadas'] = $row['idHoras_realizadas'];
  }

  $foto = mysqli_query($conexion,"select fotoAlumno,no_control from listaalumnos where no_control = '".$_SESSION['num_control']."'");
  while ($rowFoto = mysqli_fetch_array($foto)) {
    $_SESSION['foto'] = $rowFoto['fotoAlumno'];
  }

  $conCarrera = mysqli_query($conexion,"select * from carrera where idCarrera = '".$_SESSION['idCarrera']."'");
  while ($rowCa = mysqli_fetch_array($conCarrera)) {
    $_SESSION['carrera'] = utf8_encode($rowCa['nom_carrera']);
  }

  $horas = mysqli_query($conexion,"select * from horas_realizadas where idHoras_realizadas= '".$_SESSION['idHoras_realizadas']."'");
  while ($ho = mysqli_fetch_array($horas)) {
    $_SESSION['horasReportadas'] = $ho['horas_reportadas'];
    $_SESSION['horasAcumuladas'] = $ho['horas_acumuladas'];
  }
  header("Location: perfilAlumnoAdmin.php");
  echo $_SESSION['num_control'];


 ?>
