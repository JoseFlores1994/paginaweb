<?php
$ruta      = "localhost";
  $login     = "root";
  $password  = "";
  $db        = "servicio_social";
  $conexion  = mysqli_connect( $ruta, $login, $password,$db)
               or die(mysql_error());
               mysqli_query($conexion,"insert into carrera(nom_carrera) values
                                    ('$_REQUEST[carrera]')")
               or die("Problemas en el select".mysqli_error($conexion));
  echo "conectado bravo!!!!!!";
  mysqli_close($conexion);

?>
