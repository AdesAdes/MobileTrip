<?php
require('conexion1.php');

$jsonFormat ="[datos]";
$html ="";

function query2Json()
{
    global $jsonFormat;
    global $html;
    global $link;
    $totalTouch = 0;
    $queryTouch = 'SELECT  `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10` FROM `touch`';

$resultTouch = mysqli_query($link,$queryTouch)or die('Consulta fallida: ' . mysql_error());


if($resultTouch)
  {
    $row = mysqli_fetch_array($resultTouch);

    $totalTouch = $totalTouch + intval($row['Touch1']);
    $totalTouch = $totalTouch + intval($row['Touch2']);
    $totalTouch = $totalTouch + intval($row['Touch3']);
    $totalTouch = $totalTouch + intval($row['Touch4']);
    $totalTouch = $totalTouch + intval($row['Touch5']);
    $totalTouch = $totalTouch + intval($row['Touch6']);
    $totalTouch = $totalTouch + intval($row['Touch7']);
    $totalTouch = $totalTouch + intval($row['Touch8']);
    $totalTouch = $totalTouch + intval($row['Touch9']);
    $totalTouch = $totalTouch + intval($row['Touch10']);
  $html.= '{"name":"Touch","y":'. $totalTouch .'},';
  
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