<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/solicitud.css">
    <link rel="stylesheet" type="text/css" href="css/sesion.css">
  </head>
  <body style="background-image: url(img/fondo.png); background-size: 100% 100%; background-attachment: fixed;">
    <div class="encabezado">
        <img src="img/sep.jpg" alt="sep" width="10%" height="10%" id="sep">
        <img src="img/tecnm.jpg" alt="tecnm" width="10%" height="10%">
        <img src="" alt="Sistema de Control del Servicio Social" id="Titulo">
        <img src="img/itver.png" alt="s" width="9%" height="9%">
    </div>
    <div id="Contenedor">
    <div class="Icon">
                   <!--Icono de usuario-->
                  <span class="glyphicon glyphicon-user"></span>
                </div>
<div class="ContentForm">
     <form action="php/inicioSesion.php" method="post" name="FormEntrar">
       <div class="input-group input-group-lg">
         <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
         <input type="text" class="form-control" name="num_control" placeholder="Numero de control" id="Correo">
       </div>
       <br>
       <div class="input-group input-group-lg">
         <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
         <input type="password" name="pin" class="form-control" placeholder="******">
       </div>
       <br>
       <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
       <div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
     </form>
    </div>
    </div>
  </body>
</html>
