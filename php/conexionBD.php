<?php

$ruta      = "localhost";
  $login     = "root";
  $password  = "";
  $db        = "servicio_social";
  $conexion  = mysqli_connect( $ruta, $login, $password,$db)
               or die(mysqli_error());

?>
