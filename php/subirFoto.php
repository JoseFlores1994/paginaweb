<?php
  session_start();

  include('conexionBD.php');

  $nocontrol = $_SESSION['num_control'];
  $nombreImagen = $_FILES['imagenalumno']['name'];
  $rutaImagen = "../imagenesalumno/".$nombreImagen."";

  mysqli_query($conexion,"update listaalumnos set fotoAlumno = '".$rutaImagen."' where no_control = '".$_SESSION['num_control']."'");

  $_SESSION['foto'] = $rutaImagen;
  header("Location: perfil.php");


 ?>
