<?php
include('conexionBD.php');

   $control = $_REQUEST['num_control'];

   if(isset($_POST['num_control']) && !empty($_POST['num_control']) &&
   isset($_POST['pin']) && !empty($_POST['pin'])) {
      if($control[0] != 'E'){
          $registros = mysqli_query($conexion,"select rfc, pin from administrador
          where rfc = '$_REQUEST[num_control]' and pin = '$_REQUEST[pin]'")  or
          die("Problemas en el select:".mysqli_error($conexion));

          if($reg = mysqli_fetch_array($registros)){
            /* Empezamos la sesión */
            session_start();
            echo 'El administrador existe';
            $_SESSION['num_control'] = $control;
            $sqlAdmin = mysqli_query($conexion,"select nombre_admin from administrador where rfc = '".$_SESSION['num_control']."'");
            while($ad = mysqli_fetch_array($sqlAdmin)){
                $_SESSION['admin'] = utf8_encode($ad['nombre_admin']);
            }
            header('Location: inicioAdmin.php');
          }else{
            echo 'No existe ese administrador';
          }

      }else{
        $registros = mysqli_query($conexion,"select no_control, pin from alumnos
        where no_control = '$_REQUEST[num_control]' and pin = '$_REQUEST[pin]'")  or
        die("Problemas en el select:".mysqli_error($conexion));

        if($reg = mysqli_fetch_array($registros)){
          /* Empezamos la sesión */
          session_start();
            $_SESSION['num_control'] = $_REQUEST['num_control'];
            $sqlAdmin = mysqli_query($conexion,"select * from alumnos where no_control
             = '".$_SESSION['num_control']."'");
            while ($row = mysqli_fetch_array($sqlAdmin)) {
              $_SESSION['admin'] = utf8_encode($row['nombre']);
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
            header('Location: inicio.php');
        }else{
          echo 'No existe ese alumno';
        }

      }
   }else{
        echo 'Falta algun campo';
   }
   mysqli_close($conexion);

 ?>
