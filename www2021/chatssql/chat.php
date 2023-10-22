
             <?php

include('../php/conexion.php');
             $consulta="select * from chat order by id desc";
             $ejecutar=$conexion->query($consulta);
             while($fila = $ejecutar->fetch_array()):
             

             ?>
             <div id="datos-chat">

                 <span style="color: #1c62c4;"><?php echo $fila['nombre'];?>:</span>
                 <span style="color: #848484;"><?php echo $fila['mensaje'];?>:</span>
                 <span style="float:right"><?php echo formatofecha($fila['fecha']);?>:</span>
             </div>
             <?php endwhile;?>

             <?php
             
             /* esta funcion va en donde llamas la conexion a tu base de datos
             
             function formatofecha($fecha)
	{
return date('g:i a', strtotime($fecha));
	}

    es para dar la fecha en horas 
             
             
             */


             
             ?>
     