<?php
    require('conexion.php');
    $TipoDeOrientacion = $_GET['TipoDeOrientacion'];
    $Cantdad = $_GET['Cantdad'];
    ModificarOrientacion($TipoDeOrientacion, $Cantdad);

    function ModificarOrientacion($TipoDeOrientacion,$Cantdad){
        $query = 'SELECT `idorientation`, `landscape`, `portrait` FROM `orientation`';
        $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());
         while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
             $Landscape1  =  $line["landscape"];
             $portrait1    =  $line["portrait"];
        }
 switch ($TipoDeOrientacion) {
    case 1:
        $portrait10 =  $portrait1 +$Cantdad;
        $query1 =  'UPDATE `orientation` SET 
                   `portrait`= '.$portrait10.' WHERE `idorientation`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
      
        break;
  case 1:
        $Landscape10 = $Landscape1+$Cantdad;
        $query1 =  'UPDATE `orientation` SET 
                   `landscape`= '. $Landscape10.' WHERE `idorientation`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());   
        break;
}
    } 
?>