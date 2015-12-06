<?php 
    

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css"> ${demo.css}</style>
    <script type="text/javascript" src="js/exporting.js"></script>
	<title></title>
</head>
<body id="container">
    <div>
    
    <H1 style="color:white;">orientation</H1>
   </div>
     <h1 id="elh1">toca la pantalla</h1>
 	
 	<div id="contain">
 		<h1 style="font-size: 77px;"></h1>
 	</div>
   </body>
   <script type="text/javascript">
    
     window.onload = function (){

          
          
    document.body.addEventListener('touchmove', function(event) {
  		contain.innerHTML = "<h1>TOUCHMOVE</h1>";
  		contain.innerHTML += "<h1>"+event.targetTouches.length+"</h1>";
	}, false);




    document.body.addEventListener('touchend', function(event) {
  		contain.innerHTML = "<h1>TOUCHEND</h1>";
  		touchstarts = 0;

	}, false);


    
    var contain = document.getElementById("contain");
	var touchstarts = 0;


	document.body.addEventListener('touchstart', function(event){
		touchstarts++;
		contain.innerHTML = "<h1>TOUCHSTART</h1>";
		contain.innerHTML += "<h1>"+touchstarts+"</h1>";
	}, false);




graficarPie("container","hola",[{ name: "Touch", colorByPoint: true, data: [{name:"Landscape",y:1}, {name:"portrait",y:2}]}])

     }
   </script>

   <script type="text/javascript" src="graficar_pie.js"></script>
   <script type="text/javascript" src="js/data.js"></script>
   <script type="text/javascript" src="js/drilldown.js"></script>
   <script type="text/javascript" src="js/highcharts.js"></script>
  
</html>