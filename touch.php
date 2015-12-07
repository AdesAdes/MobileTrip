<?php
    
  
  require('conexion.php');


  $query = 'SELECT `idTouch`, `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10` FROM `touch`';

  $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());

 
$html="";


while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
           
   $html.= '{name:"Touch 1 dedo",y:'.$line["Touch1"].'},
            {name:"Touch 2 dedo",y:'.$line["Touch2"].'},
            {name:"Touch 3 dedo",y:'.$line["Touch3"].'},
            {name:"Touch 4 dedo",y:'.$line["Touch4"].'},
            {name:"Touch 5 dedo",y:'.$line["Touch5"].'},
            {name:"Touch 6 dedo",y:'.$line["Touch6"].'},
            {name:"Touch 7 dedo",y:'.$line["Touch7"].'},
            {name:"Touch 8 dedo",y:'.$line["Touch8"].'},
            {name:"Touch 9 dedo",y:'.$line["Touch9"].'},
            {name:"Touch 10 dedo",y:'.$line["Touch10"].'}';
}
  
  /*
  if(trim($html)!=" "){

      $html = substr($html,0,strlen($html)-1);
      $pie = str_replace( "D#a#t#o#s",$html, $pie);
      $pie = str_replace( "B#r#a#n#d#s","Touch", $pie);

   }
 */
    echo $html;

?>