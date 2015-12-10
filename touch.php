<?php
    
  
  require('conexion1.php');
  $jsonFormat ="[datos]";
  $html = "";

  function query2Json()
  {
      global $link;
      global $html;
      global $jsonFormat;
      $query = 'SELECT `idTouch`, `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10` FROM `touch`';

  $result = mysqli_query($link,$query)or die('Consulta fallida: ' . mysql_error());
  if($result)
  {
    $row = mysqli_fetch_array($result);
     $html.= '{"name":"1 dedo","data":['.$row["Touch1"].']},
  {"name":"2 dedos","data":['.$row["Touch2"].']},
  {"name":"3 dedos","data":['.$row["Touch3"].']},
  {"name":"4 dedos","data":['.$row["Touch4"].']},
  {"name":"5 dedos","data":['.$row["Touch5"].']},
  {"name":"6 dedos","data":['.$row["Touch6"].']},
  {"name":"7 dedos","data":['.$row["Touch7"].']},
  {"name":"8 dedos","data":['.$row["Touch8"].']},
  {"name":"9 dedos","data":['.$row["Touch9"].']},
  {"name":"10 dedos","data":['.$row["Touch10"].']}';
  }
 if(trim($html)!=""){
   return str_replace("datos",$html,$jsonFormat);
   }
 
  }

     echo  query2Json();
?>