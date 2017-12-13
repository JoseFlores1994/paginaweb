<?php
include('conexionBD.php');

$num_control = substr($_POST['numControl'],1);

mysqli_query($conexion,"insert into titulares(idTitular,nom_tit,puesto) values
 ($num_control,'$_REQUEST[responsable]','$_REQUEST[cargo]')") or die
 ("Problemas en el select T".mysqli_error($conexion));

mysqli_query($conexion, "insert into horas_realizadas values ($num_control,0,0)") or die
("Problemas en el select H".mysqli_error($conexion));

mysqli_query($conexion, "insert into alumnos values('$_REQUEST[numControl]','$_REQUEST[nombre]','$_REQUEST[apellidoP]',
'$_REQUEST[apellidoM]','$_REQUEST[sexo]','$_REQUEST[telefono]','$_REQUEST[email]',$_REQUEST[carrera],'$_REQUEST[periodo]',
$_REQUEST[semestre],$num_control,NULL,$num_control)") or die
("Problemas en el select A ".mysqli_error($conexion));

mysqli_query($conexion, "insert into solicitudes values(NULL,'$_REQUEST[numControl]',1)") or die
("Problemas en el select S".mysqli_error($conexion));

 mysqli_close($conexion);

 header('Location: mensajesolicitud.php');

 ?>
