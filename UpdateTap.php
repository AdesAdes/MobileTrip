<?php 
require('conexion.php');
 ModificarTap();
 function ModificarTap(){
   $query1 = 'SELECT  `CantTap` FROM `tap` WHERE `idTap`=1';
       $result1= mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
          while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
             $CantTapOriginal = $line["CantTap"];
       } 
       $CantTapOriginal +=  1 ;
       $query = 'UPDATE `tap` SET `CantTap`= '.$CantTapOriginal.' WHERE  `idTap`= 1';
       $result = mysql_query($query)or die('No se puede actualizar el Tap: ' . mysql_error());
       }
?>