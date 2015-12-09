<?php

   require('conexion.php');
   ModificarSwipe($Swipe);
  function ModificarSwipe($Swipe){
     $query = 'SELECT `idSwipe`, `Swipe1`, `Swipe2`, `Swipe3`, `Swipe4`, `Swipe5`, `multiswipe` FROM `swipe`';
     $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {  
         $Swipe01 =  $line["Swipe1"];
         $Swipe02 =  $line["Swipe2"];
         $Swipe03 =  $line["Swipe3"];
         $Swipe04 =  $line["Swipe4"];
         $Swipe05 =  $line["Swipe5"];
         $multiswipe0 =  $line["multiswipe"];
         }
      switch ($Swipe) {
    case 1:
        $Swipe001 = $Swipe01 + 1;
        $query1 = 'UPDATE `swipe` SET Swipe1 = '.$Swipe001.' WHERE `idSwipe`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 2:
        $Swipe002 = $Swipe02 + 1;
        $query1 = 'UPDATE `swipe` SET Swipe2 ='.$Swipe002.' WHERE `idSwipe`= 1';
         $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 3:
         $Swipe003 =$Swipe03+ 1;
         $query1 = 'UPDATE `swipe` SET `Swipe3`= '.$Swipe003.',WHERE `idSwipe`= 1';
          $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 4:
          $Swipe004 = $Swipe04+1;
          $query1 = 'UPDATE `swipe` SET `Swipe4`= '.$Swipe004.'WHERE `idSwipe`= 1';
          $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 5:
        $Swipe005  = $Swipe05+1;
        $query1 = 'UPDATE `swipe` SET `Swipe5`= '.$Swipe005.'WHERE `idSwipe`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
    case 6:
        $multiswipe00 = $multiswipe0+1;
        $query1 = 'UPDATE `swipe` SET `multiswipe`='.$multiswipe00.' WHERE `idSwipe`= 1';
        $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
        break;
}
    }

?>