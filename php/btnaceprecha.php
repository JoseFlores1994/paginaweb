<?php
session_start();
include('conexionBD.php');

ini_set('error_reporting',0);

$no_control = $_GET['id'];
$decision = $_POST['aceptado'];
$rfc = $_SESSION['num_control'];
$noControlNum = substr($no_control,1);

$correoalumno = mysqli_query($conexion,"SELECT email FROM alumnos WHERE no_control = '$no_control'");
$row1 = mysqli_fetch_array($correoalumno);
$correoadmin = mysqli_query($conexion,"SELECT email FROM administrador WHERE rfc = '$rfc'");
$row2 = mysqli_fetch_array($correoadmin);

if(isset($no_control)){

    //echo "hola";

if($decision == 'Aprobar') {
    /*echo $no_control;
    echo $value;
    echo $decision;
    echo $row1['email'];
    echo $row2['email'];
    echo $nombreadmin;
    echo $rfc;*/

    $solicitudes = mysqli_query($conexion,"UPDATE solicitudes SET idDecision_Admin = '2' WHERE no_control = '$no_control'") or die
("Problemas en solicitudes ".mysqli_error($conexion));;

    $listaalumno = mysqli_query($conexion,"INSERT INTO listaalumnos VALUES (NULL,'../imagenesalumno/perfil.jpg','$no_control')") or die
("Problemas en el listaalumno".mysqli_error($conexion));;

    //Correo de Aceptacion enviado al alumno :D
    $mail = "Prueba de mensaje de aprobado";
    //Titulo
    $titulo = "ACEPTADO";
    //cabecera
    $headers = "MIME-Version: 1.0". "\r\n" .
               "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
               "From: Gestion y Vinculacion < ".$row2." >";
    //Enviamos el mensaje a tu_dirección_email
    $bool = mail("$row1","$titulo","$mail","$headers");
    if($bool){
        echo "Mensaje enviado";
        header('Location: solicitudRecibida.php');
    }else{
        echo "Mensaje no enviado";
    }

    $borrarsolicitudes = mysqli_query($conexion,"DELETE FROM solicitudes WHERE no_control = '$no_control'") or die ("Problemas en BORRADO1 ".mysqli_error($conexion));
    header("Location: solicitudRecibida.php");
}   else {
    /*echo $no_control;
    echo $value;
    echo "Rechazado";*/
    $borrarsolicitudes = mysqli_query($conexion,"DELETE FROM solicitudes WHERE no_control = '$no_control'") or die
("Problemas en BORRADO1 ".mysqli_error($conexion));
    $borraralumno = mysqli_query($conexion,"DELETE FROM alumnos WHERE no_control = '$no_control'") or die
("Problemas en borraralumno ".mysqli_error($conexion));
    $borrartitulares = mysqli_query($conexion,"DELETE FROM titulares WHERE idTitular = '$noControlNum'") or die
("Problemas en BORRADO2 ".mysqli_error($conexion));
    $borrarhoras = mysqli_query($conexion,"DELETE FROM horas_realizadas WHERE idHoras_realizadas = '$noControlNum'") or die
("Problemas en BORRADO3 ".mysqli_error($conexion));


    //Correo de Rechazo enviado al alumno D:
    $mail = "Prueba de mensaje de rechazo";
    //Titulo
    $titulo = "RECHAZADO";
    //cabecera
    $headers = "MIME-Version: 1.0". "\r\n" .
               "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
               "From: Gestion y Vinculacion < ".$row2." >";
    //Enviamos el mensaje a tu_dirección_email
    $bool = mail("$row1","$titulo","$mail","$headers");
    if($bool){
        echo "Mensaje enviado";
        header('Location: solicitudRecibida.php');
    }else{
        echo "Mensaje no enviado";
    }
    header("Location: solicitudRecibida.php");
}
}
?>
