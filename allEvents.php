<?php
require('conexion1.php');	
$jsonFormat ="[datos]";
$html ="";

function tapTouch2Json()
{
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
   $html .= '{"name":"Tap","y":'.$line["CantTap"].'},';

  }
 
}

function swipe2Json()
{
  global $link;
  global $html;
  $query = 'SELECT `idSwipe`, `Swipe1`, `Swipe2`, `Swipe3`, `Swipe4`, `Swipe5`, `multiswipe` FROM `swipe`';
  $result = mysqli_query($link,$query)or die('Consulta fallida: ' . mysqli_error());
  if($result)
  {
      $row = mysqli_fetch_array($result);
      $html.= '{"name":"Swipe 1 dedo","y":'.$row["Swipe1"].'},
            {"name":"Swipe 2 dedos","y":'.$row["Swipe2"].'},
            {"name":"Swipe 3 dedos","y":'.$row["Swipe3"].'},
            {"name":"Swipe 4 dedos","y":'.$row["Swipe4"].'},
            {"name":"Swipe 5 dedos","y":'.$row["Swipe5"].'},
            {"name":"Multiswipes","y":'.$row["multiswipe"].'},';
  }

}

  function orientation2Json()
  {
  	global $link;
  	global $html;
  	$query = 'SELECT `idorientation`, `landscape`, `portrait` FROM `orientation`';
 	$result = mysqli_query($link,$query)or die('Consulta fallida: ' . mysqli_error());
 	if($result)
 	{
 		$row = mysqli_fetch_array($result);
 		$html.=   '{"name":"Landscape","y":'.$row["landscape"].'},
              		{"name":"portrait","y":'.$row["portrait"].'}';
 	}
  }
// Se convierten a json todas lasa consultas
  tapTouch2Json();
  swipe2Json();
  orientation2Json();
  echo str_replace("datos",$html,$jsonFormat);
?>