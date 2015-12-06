<?php
 
  require('conexion.php');
   


   function ModificarTap($CantTap){
          $query1 = 'SELECT  `CantTap` FROM `tap` WHERE `idTap`=1';
          $result1= mysql_query($query1)or die('Consulta fallida: ' . mysql_error());
          while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {

             $CantTapOriginal = $line["CantTap"];

       } 

       $cantAumentada =  $CantTapOriginal + $CantTap ;

       $query = 'UPDATE `tap` SET `CantTap`= '.$cantAumentada.' WHERE  `idTap`= 1';
       $result = mysql_query($query)or die('No se puede actualizar el Tap: ' . mysql_error());
          
   }

   
    function ModificarSwipe($Swipe1,$Swipe2,$Swipe3,$Swipe4,$Swipe5,$multiswipe){
       
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
   
       $Swipe001 = $Swipe01+$Swipe1;
       $Swipe002 =$Swipe02 +$Swipe2;
       $Swipe003 =$Swipe03+$Swipe3;
       $Swipe004 = $Swipe04+$Swipe4;
       $Swipe005  = $Swipe05+$Swipe5;
       $multiswipe00 = $multiswipe0+$multiswipe;

  
    $query1 = 'UPDATE `swipe` SET Swipe1 = '.$Swipe001.',Swipe2 ='.$Swipe002.',
                      `Swipe3`= '.$Swipe003.',
                      `Swipe4`= '.$Swipe004.',
                      `Swipe5`= '.$Swipe005.',
                      `multiswipe`='.$multiswipe00.' WHERE `idSwipe`= 1';
     $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());

    }
   

   function ModificarTouch($Touch1,$Touch2,$Touch3,$Touch4,$Touch5,$Touch6,$Touch7,$Touch8,$Touch9,$Touch10){
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
     
  
           $Touch001  =  $Touch1 + $Touch01;
           $Touch002  =  $Touch2 + $Touch02;
           $Touch003  =  $Touch3 + $Touch03;
           $Touch004  =  $Touch4 + $Touch04;
           $Touch005  =  $Touch5 + $Touch05;
           $Touch006  =  $Touch6 + $Touch06;
           $Touch007  =  $Touch7 + $Touch07;
           $Touch008  =  $Touch8 + $Touch08;
           $Touch009  =  $Touch9 + $Touch09;
           $Touch0010 =  $Touch10 +$Touch010;

        $query1 = 'UPDATE `touch` SET`Touch1` = '.$Touch001 .',
                           `Touch2`  = '.$Touch002 .',
                           `Touch3`  = '.$Touch003 .',
                           `Touch4`  = '.$Touch004 .',
                           `Touch5`  = '.$Touch005 .',
                           `Touch6`  = '.$Touch006 .',
                           `Touch7`  = '.$Touch007 .',
                           `Touch8`  = '.$Touch008 .',
                           `Touch9`  = '.$Touch009 .',
                           `Touch10` = '.$Touch0010 .' WHERE  `idTouch`= 1';
      $result1 = mysql_query($query1)or die('Consulta fallida: ' . mysql_error());


   }   
 

    function ModificarOrientacion($Landscape,$portrait){

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