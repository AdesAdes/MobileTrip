<?php
    
  
  require('conexion.php');


  $query = 'SELECT `idSwipe`, `Swipe1`, `Swipe2`, `Swipe3`, `Swipe4`, `Swipe5`, `multiswipe` FROM `swipe`';
  $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());

 
$html = " ";


while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
            
   $html.= '{name:"Swipe 1 dedo",y:'.$line["Swipe1"].'},
            {name:"Swipe 2 dedo",y:'.$line["Swipe2"].'},
            {name:"Swipe 3 dedo",y:'.$line["Swipe3"].'},
            {name:"Swipe 4 dedo",y:'.$line["Swipe4"].'},
            {name:"Swipe 5 dedo",y:'.$line["Swipe5"].'},
            {name:"Multiswipes",y:'.$line["multiswipe"].'}';


}
  

 
    return $html;

?>