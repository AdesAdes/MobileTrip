<?php
  require('conexion.php');
   

  $query = 'SELECT `idTap`, `CantTap` FROM `tap`';
  $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());

 

$html='';
  
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

   $html.= '{name:"Tap",y:'.$line["CantTap"].'},';

}
  
  /*  
   if(trim($html)!=" "){

      $html = substr($html,0,strlen($html)-1);
      $pie = str_replace( "D#a#t#o#s",$html, $pie);
      $pie = str_replace( "B#r#a#n#d#s","Tap", $pie);

   }
*/ 
 
  return  $html;
   

?>