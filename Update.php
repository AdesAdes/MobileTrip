<?php
 
  require('conexion.php');

   function ModificarTap(){
          $query1 = 'SELECT  `CantTap` FROM `tap` WHERE `idTap`=1';
          $result1= mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
          while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
             $CantTapOriginal = $line["CantTap"];
       } 
       $CantTapOriginal +=  1 ;
       $query = 'UPDATE `tap` SET `CantTap`= '.$CantTapOriginal.' WHERE  `idTap`= 1';
       $result = mysql_query($query)or die('No se puede actualizar el Tap: ' . mysql_error());
   }



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
 
    function Modificarcontain($Landscape,$portrait){
        $query = 'SELECT `idorientation`, `landscape`, `portrait` FROM `orientation`';
        $result = mysql_query($query)or die('Consulta fallida: ' . mysql_error());
         while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
             $Landscape1  =  $line["landscape"];
             $portrait1    =  $line["portrait"];
        }
    $Landscape10 =  $Landscape + $Landscape1;
    $portrait10 =  $portrait + $portrait1; 
   $query1 =  'UPDATE `orientation` SET 
                   `landscape`= '. $Landscape10.',
                   `portrait`= '.$portrait10.' WHERE `idorientation`= 1';
   $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
    }

    
     
?>