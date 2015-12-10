<?php
    
  
  require('conexion1.php');
  $jsonFormat ="[datos]";
  $html = "";

function query2Json()
{
  global $link;
  global $jsonFormat;
  global $html;
  $query = 'SELECT `idSwipe`, `Swipe1`, `Swipe2`, `Swipe3`, `Swipe4`, `Swipe5`, `multiswipe` FROM `swipe`';
  $result = mysqli_query($link,$query)or die('Consulta fallida: ' . mysqli_error());
  if($result)
  {
      $row = mysqli_fetch_array($result);
      $html.= '{"name":"1 dedo","y":'.$row["Swipe1"].'},
            {"name":"2 dedos","y":'.$row["Swipe2"].'},
            {"name":"3 dedos","y":'.$row["Swipe3"].'},
            {"name":"4 dedos","y":'.$row["Swipe4"].'},
            {"name":"5 dedos","y":'.$row["Swipe5"].'},
            {"name":"Multiswipes","y":'.$row["multiswipe"].'}';
      return str_replace("datos",$html,$jsonFormat); 
  }

}
 

  echo  query2Json();

?>