<?php
    
  
  require('conexion.php');


  $query = 'SELECT `idorientation`, `landscape`, `portrait` FROM `orientation`';
  $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());

 
$html = "";


while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    

   $html.=   '{name:"Landscape",y:'.$line["landscape"].'},
              {name:"portrait",y:'.$line["portrait"].'}';


}
   
    return $html;

?>