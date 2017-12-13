<?php
  session_start();
  
  include('conexionBD.php');

  $nocontrol = $_SESSION['num_control'];
  $nombreDocumento = $_FILES['documentoalumno']['name'];
  $rutaDocumento = "../documentosEntregados/".$nocontrol."";
  $recorte = substr("pruebacadenas", -4, 1);
  
  $documento = array(
  1 => "Solicitud".$nocontrol.".pdf",
  2 => "CartaAsignacion".$nocontrol.".pdf",
  3 => "CartaCompromiso".$nocontrol.".pdf",
  4 => "LiberacionExtraescolar".$nocontrol.".pdf",
  5 => "Kardex".$nocontrol.".pdf",
  6 => "Horario".$nocontrol.".pdf",
  7 => "CartaAceptacion".$nocontrol.".pdf",
  8 => "PrimerReporte".$nocontrol.".pdf",
  9 => "SegundoReporte".$nocontrol.".pdf",
  10 => "TercerReporte".$nocontrol.".pdf",
  11 => "ReporteFinal".$nocontrol.".pdf",
  );
      
    for($x=1;$x<=7;$x++){
        if($documento[$x] == $nombreDocumento){
            mysqli_query($conexion,"INSERT INTO documentos values (NULL,'$nocontrol','$nombreDocumento','$nombreDocumento',2,0,NULL)") or die
("Problemas en documentos for ".mysqli_error($conexion));
;
            echo $documento[$x]." ".$nombreDocumento;
            header("Location: inicio.php");
        }else{
            $archivoincorrecto = 1;
        }
    }

    if($documento[8] == $nombreDocumento){
        mysqli_query($conexion,"INSERT INTO documentos values (NULL,'$nocontrol','$nombreDocumento','$nombreDocumento',2,0,NULL)") or die
("Problemas en documentos for ".mysqli_error($conexion));
        echo $documento[8]." ".$nombreDocumento;
        header("Location: inicio.php");
    }else{
        if($documento[9] == $nombreDocumento){
            mysqli_query($conexion,"INSERT INTO documentos values (NULL,'$nocontrol','$nombreDocumento','$nombreDocumento',2,0,NULL)") or die
("Problemas en documentos for ".mysqli_error($conexion));
            echo $documento[9]." ".$nombreDocumento;
            header("Location: inicio.php");
        }else{
            if($documento[10] == $nombreDocumento){
                mysqli_query($conexion,"INSERT INTO documentos values (NULL,'$nocontrol','$nombreDocumento','$nombreDocumento',2,0,NULL)") or die
("Problemas en documentos for ".mysqli_error($conexion));
                echo $documento[10]." ".$nombreDocumento;
                header("Location: inicio.php");
            }else{
                if($documento[11] == $nombreDocumento){
                    mysqli_query($conexion,"INSERT INTO documentos values (NULL,'$nocontrol','$nombreDocumento','$nombreDocumento',2,0,NULL)") or die
("Problemas en documentos for ".mysqli_error($conexion));
                   echo $documento[11]." ".$nombreDocumento;
                    header("Location: inicio.php");
                }else{
                    $archivoincorrecto = 1;
                }$archivoincorrecto = 1;
            }$archivoincorrecto = 1;
        }$archivoincorrecto = 1;
    }
    
  /*mysqli_query($conexion,"");
	
//START NEGATIVO
$resultado = substr("pruebacadenas", -3);
echo $resultado; // imprime "nas"
$resultado = substr("pruebacadenas", -5, 1);
echo $resultado; // imprime "d"
  header("Location: inicio.php");*/

/*recuperar id en base a documento a subir
if de insertar los datos en base al documento
Mostrar los documentos subidos hasta el momento en perfil*/

 ?>