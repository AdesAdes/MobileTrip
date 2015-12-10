<?php
require('conexion1.php');

$jsonFormat ="[datos]";
$html ="";

function query2Json()
{
    global $jsonFormat;
    global $html;
    global $link;
    $queryTouch = 'SELECT `idTouch`, `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10` FROM `touch`';

$resultTouch = mysqli_query($link,$queryTouch)or die('Consulta fallida: ' . mysql_error());


if($resultTouch)
{
  $row = mysqli_fetch_array($resultTouch);        
  $html.= '{"name":"Touch 1 dedo","y":'.$row["Touch1"].'},
  {"name":"Touch 2 dedo","y":'.$row["Touch2"].'},
  {"name":"Touch 3 dedo","y":'.$row["Touch3"].'},
  {"name":"Touch 4 dedo","y":'.$row["Touch4"].'},
  {"name":"Touch 5 dedo","y":'.$row["Touch5"].'},
  {"name":"Touch 6 dedo","y":'.$row["Touch6"].'},
  {"name":"Touch 7 dedo","y":'.$row["Touch7"].'},
  {"name":"Touch 8 dedo","y":'.$row["Touch8"].'},
  {"name":"Touch 9 dedo","y":'.$row["Touch9"].'},
  {"name":"Touch 10 dedo","y":'.$row["Touch10"].'},';
}


  $queryTap = 'SELECT `idTap`, `CantTap` FROM `tap`';
  $resultTap = mysqli_query($link,$queryTap)or die('Consulta fallida: ' . mysql_error());
  if($resultTap)
  {
   $line = mysqli_fetch_array($resultTap);
   $html .= '{"name":"Tap","y":'.$line["CantTap"].'}';

  }
 
  $jsonFormat = str_replace("datos",$html,$jsonFormat);
  return $jsonFormat;
}

 echo  query2Json();


?>