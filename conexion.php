<?php
/*
  $server = 'mysql12.000webhost.com';
  $user ='a7492933_mobile';
  $pass ='dilcia91993';
  $db ='a7492933_mobile';
  */

  $server = 'localhost';
  $user ='root';
  $pass ='';
  $db ='movil';

  $link = mysql_connect($server ,$user, $pass )
  or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db($db) or die('No se pudo seleccionar la base de datos');

?>