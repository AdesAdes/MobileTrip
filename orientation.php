<?php
    
  
  require('conexion1.php');
  $html = "";
  $jsonFormat ="[datos]";
  function query2Json()
  {
  	global $link;
  	global $jsonFormat;
  	global $html;
  	$query = 'SELECT `idorientation`, `landscape`, `portrait` FROM `orientation`';
 	$result = mysqli_query($link,$query)or die('Consulta fallida: ' . mysqli_error());
 	if($result)
 	{
 		$row = mysqli_fetch_array($result);
 		$html.=   '{"name":"Landscape","data":['.$row["landscape"].']},
              		{"name":"portrait","data":['.$row["portrait"].']}';
 		return str_replace("datos",$html,$jsonFormat);
 	}
  }
 
   echo  query2Json();

?>