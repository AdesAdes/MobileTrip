<?php

   require('conexion.php');
   $Touch = $_GET['touch'];
   ModificarTouch($Touch);




   function ModificarTouch($Touch){
    $query = 'SELECT `idTouch`, `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10` FROM `touch`';
    $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { 

           $Touch01  =  $line["Touch1"];
           $Touch02  =  $line["Touch2"];
           $Touch03  =  $line["Touch3"];
           $Touch04  =  $line["Touch4"];
           $Touch05  =  $line["Touch5"];
           $Touch06  =  $line["Touch6"];
           $Touch07  =  $line["Touch7"];
           $Touch08  =  $line["Touch8"];
           $Touch09  =  $line["Touch9"];
           $Touch010 =  $line["Touch10"];
}
     
  switch ($Touch) {
    case 1:
        $Touch001  =  $Touch01 + 1;
        $query1 = 'UPDATE `touch` SET `Touch1` = '.$Touch001 .' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 2:
       $Touch002  =  $Touch02 + 1;
         $query1 = 'UPDATE `touch` SET `Touch2` = '.$Touch002 .' WHERE  `idTouch`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 3:
         $Touch003  =  $Touch03 + 1;
         $query1 = 'UPDATE `touch` SET `Touch3` = '.$Touch003 .' WHERE  `idTouch`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 4:
         $Touch004  =  $Touch04 + 1;
         $query1 = 'UPDATE `touch` SET `Touch4` = '.$Touch004 .' WHERE  `idTouch`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 5:
        $Touch005  =  $Touch05 +1;
        $query1 = 'UPDATE `touch` SET `Touch5` = '.$Touch005 .' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 6:
         $Touch006  =  $Touch06 +1;
         $query1 = 'UPDATE `touch` SET `Touch6` = '.$Touch006 .' WHERE  `idTouch`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
   case 7:
        $Touch007  =  $Touch07 +1;
        $query1 = 'UPDATE `touch` SET `Touch7` = '.$Touch007.' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 8:
        $Touch008  =  $Touch08 +1;
        $query1 = 'UPDATE `touch` SET `Touch8` = '.$Touch008 .' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 9:
        $Touch009  =  $Touch09 +1;
        $query1 = 'UPDATE `touch` SET `Touch9` = '.$Touch009 .' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
     case 10:
        $Touch0010 =  $Touch010 + 1;
        $query1 = 'UPDATE `touch` SET `Touch10` = '.$Touch0010 .' WHERE  `idTouch`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
}
   } 

?>