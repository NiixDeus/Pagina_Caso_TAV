<?php 
$conex = mysqli_connect("localhost","root","","mantenedor_usuarios"); 
     if($conex){ 
         echo 'Conectado exitosamente a la Base de Datos'; 
     }else{ 
         echo 'No se ha podido conectar a la Base de Datos'; 
     } 
?>