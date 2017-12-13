<?php
session_start();

include('conexionBD.php');

$email = $_POST['email'];
$pin = $_POST['pin'];

mysqli_query($conexion,"update alumnos set email='".$email."',pin='".$pin."' where no_control = '".$_SESSION['num_control']."'");

$_SESSION['email'] = $email;
$_SESSION['pin'] = $pin;

if($_REQUEST['codigo'] == 'A'){
  header("Location: perfilAlumnoAdmin.php");
}else{
  header("Location: perfil.php");
}


 ?>
