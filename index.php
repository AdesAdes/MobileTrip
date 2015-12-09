<?php 

?>
<!DOCTYPE html>
<html>
<head>
		<title>Progamacion Movil en Web</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: #519839;" id="contain">

		<div id="container">
		<button>Graficar</button>
		</div>
		<div id="div">

		</div>
</body>
<script> 					  
		var countLS = 0;
		var countPtr = 0;
		var test = window.matchMedia("(orientation: portrait)");//Le enviamos como parametro portrait para que este detectandos
		var colores = ["#89609E","#B04632", "#0079BF", "#D29034", "#519839"];
		var indiceColor = 0;
		var contain = document.getElementById("div");
		document.addEventListener('touchstart', manejadorTouchstart, false);
		document.addEventListener('touchmove', manejadorTouchmove, false);
		document.addEventListener('touchend', manejadorTouchend, false);



		var Handle_Mi_Timer = null;
		var Contador = 0;	
		var EventoActual;
		var noDedos

		function manejadorTouchstart(event){
			setTimeout(Mi_Timer, 300);
			EventoActual = "START";
			noDedos = event.targetTouches.length;
			document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
			indiceColor++;
			if(indiceColor==5){ indiceColor=0};
		}

		function manejadorTouchmove(event){

				if(event.targetTouches.length<=5){
				contain.innerHTML = "SWIP";
				contain.innerHTML += event.targetTouches.length;
				EventoActual = "SWIP";
				}
				if(event.targetTouches.length>5){
				contain.innerHTML = "MultiSwip"+event.targetTouches.length;
				EventoActual = "SWIP";
				}

		}


		function manejadorTouchend(event) {
			if (Contador<1 && EventoActual!="TOUCH" && EventoActual!="SWIP"){
			window.clearInterval(Handle_Mi_Timer);
			Handle_Mi_Timer = null;
			contain.innerHTML = "TAP";

			Contador = 0;
			EventoActual = "TAP";
			if(indiceColor==5){
			indiceColor=0;
			}
			}
			Contador = 0;
			if(event.targetTouches.length>=1){
			if(EventoActual=="TOUCH"){
			contain.innerHTML = "TOUCH"+ event.targetTouches.length;	
			}
			if(indiceColor==5){
			indiceColor=0;
			}
			}	
		}


		function Mi_Timer() {
			Contador++;
			if(Contador>=1 && EventoActual!="TAP" && EventoActual!="SWIP"){
			contain.innerHTML = "TOUCH"+ noDedos;
			window.clearInterval(Handle_Mi_Timer);
			Handle_Mi_Timer = null;
			EventoActual="TOUCH";
			}
			Contador = 0;
		}


		
		function orientacion(){
				test.addListener(function(evento) {
				if(evento.matches)   { //Detecta en que tipo de direccion esta
						document.getElementById('div').innerHTML= "PORTRAIT";
						countPtr +=1;

						document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
						indiceColor++;
						if(indiceColor==5){ indiceColor=0};
				}
				else {
						document.getElementById('div').innerHTML= "LANDSCAPE";
						countLS +=1; //Cuando detecte aumenta a 1	
						document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
						indiceColor++;
						if(indiceColor==5){ indiceColor=0};			

				}
		});

		}

</script>
</html>
