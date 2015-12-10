<?php
/*
  $server = 'mysql12.000webhost.com';
  $user ='a7492933_mobile';
  $pass ='dilcia91993';
  $db ='a7492933_mobile';
  */

  $server = 'localhost';
  $user ='loot';
  $pass ='insomnificante';
  $db ='movil';

  if(mysqli_error($link = mysqli_connect($server,$user,$pass,$db)))
  { 
      echo "No se pudo conectar";
  }

?>