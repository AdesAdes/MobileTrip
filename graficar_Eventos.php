<?php 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="Contenedor" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</body>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
   <script type="text/javascript" src="js/highcharts.js"></script>
   <script type="text/javascript" src="js/exporting.js"></script>
   <script type="text/javascript" src="funciones.js"></script>
   <script type="text/javascript">
       var pie = "[{name: \"B#r#a#n#d#s\",colorByPoint: true,data: [D#a#t#o#s]}]";
     function graficarSwipe(){
        Ajax('Swipe.php',function(datos)
      {
          var json = JSON.parse(datos);
          graficarPie('Contenedor',"Swipe's",json);
      });
     }
     function GraficarTapVsTouch(){


      Ajax('tapVstouch.php',function(datos)
      {
          var json = JSON.parse(datos);
          graficarPie('Contenedor',"Tap vs Touch",json);
         });
     }
     function graficarTouchs()
     {
        Ajax("touch.php",function(datos){
            var json = JSON.parse(datos);
            graficarColumn("Contenedor","Touch's","",['Touchs'],"Cantidad",json);
        });
     }
      
    function graficarOrientation()
    {
      Ajax("orientation.php",function(datos){
        var json = JSON.parse(datos);
          graficarColumn("Contenedor","Orientacion del Movil","",['Orientacion'],"Cantidad",json);
      });
    }
  

     function AllEvents(){
        Ajax('allEvents.php',function(datos)
      {
          var json = JSON.parse(datos);
          graficarPie('Contenedor',"Comparation all Events",json);
      });
     }
   </script>
  
</html>