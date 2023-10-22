<?php
include('../php/conexion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilochat.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta+Vaani">
    <title>chatsql</title>
</head>
<body onload="ajax();">

 <div id="contenedor">
 <a  onclick="ocultar();"><img id="apremostrar" src="charla.png"></a>

     <div id="caja-chat">
         <div id="chat">
            
         </div>
     </div>
     <form method="POST" action="index.php">
         <input type="text" name="nombre" placeholder="ingresa tu nombre">
         <textarea name="mensaje" id="" placeholder="mensaje"></textarea>
         <input type="submit" name="enviar" value="Enviar">
     </form>
     <?php
     if(isset($_POST['enviar']))
     {
         $nombre=$_POST['nombre'];
         $mensaje=$_POST['mensaje'];
         $consulta="INSERT INTO `chat` (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
             $ejecutar=$conexion->query($consulta);
         
         
     }

     ?>
 </div>
 <a  onclick="mostrar();"><img id="apreocultar" src="charla.png"></a>
<script src="ajaxs.js"></script>

</body>
</html>