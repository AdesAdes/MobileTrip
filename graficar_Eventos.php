<?php 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <div id="Contenedor"></div>
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

 
     $(function(){


     GraficarTapVsTouch();
      
    });
     function GraficarSwipe(){
        Ajax('Swipe.php',function(datos)
      {
         /* 
          var datos = datos.substr(0, datos.length-1);
          pie = pie.replace("B#r#a#n#d#s", "Tipo de tap");
          pie = pie.replace("D#a#t#o#s", datos);
          */
         // console.log(datos);
          //var datas  = CreateData(datos,"Hola");
         // alert(datos);
          var json = JSON.parse(datos);
          graficarPie('Contenedor',"Tap vs Touch",json);
         //graficarPie(contenedor,titulo,dataPie)


      });
     }
     function GraficarTapVsTouch(){


      Ajax('tap.php',function(datos)
      {
         /* 
          var datos = datos.substr(0, datos.length-1);
          pie = pie.replace("B#r#a#n#d#s", "Tipo de tap");
          pie = pie.replace("D#a#t#o#s", datos);
          */
         // console.log(datos);
          //var datas  = CreateData(datos,"Hola");
         // alert(datos);
          var json = JSON.parse(datos);
          graficarPie('Contenedor',"Tap vs Touch",json);
         //graficarPie(contenedor,titulo,dataPie)


      });


     }
   
   </script>
  
</html>