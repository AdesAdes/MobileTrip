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
<script type="text/javascript" src="funciones.js"></script>
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
		
		function MenuGraficar(){
   			  location.href="Menu_Eventos.php";
              /*header("Location : graficar_Eventos.php");*/
   		}
		
		function manejadorTouchstart(event){
			setTimeout(Mi_Timer, 300);
			EventoActual = "START";
			noDedos = event.targetTouches.length;
			document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
			indiceColor++;
			if(indiceColor==5){ indiceColor=0};
		}


		var dedoSwip=0;	//agregamos la variable dedoSwip que almacenara la cantidad de dedos de un swip
		function manejadorTouchmove(event){
				dedoSwip = event.targetTouches.length;
				if(event.targetTouches.length<=5){
					contain.innerHTML = "SWIP";
					contain.innerHTML += event.targetTouches.length;
					EventoActual = "SWIP";
				}
				if(event.targetTouches.length>5){	//si la cantidad de dedos es mayor a 5
					contain.innerHTML = "MultiSwip"+event.targetTouches.length;
					EventoActual = "SWIP";
					dedoSwip=6;		//le asignamos cantidad de dedos=6
				}
		}


		function manejadorTouchend(event) {
			if(EventoActual=="SWIP"){	//si al levantar el dedo el eventoactual es swip
				//llamamos al archivo UpdateSwipe.php y le enviamos la cantidad de dedos (dedoSwip)
				Ajax("UpdateSwipe.php?swipe="+dedoSwip,
				function(data){
					//alert(data);
				});
			}
			if (Contador<1 && EventoActual!="TOUCH" && EventoActual!="SWIP"){
				window.clearInterval(Handle_Mi_Timer);
				Handle_Mi_Timer = null;
				contain.innerHTML = "TAP";

				Contador = 0;
				EventoActual = "TAP";
				if(indiceColor==5){
					indiceColor=0;
				}

				//llamando a UpdateTap.php para actualizar los tap
				Ajax("UpdateTap.php",
				function(data){
					//alert(data);
				});
			}
			Contador = 0;
			if(event.targetTouches.length>=1){
				if(EventoActual=="TOUCH"){
					contain.innerHTML = "TOUCH"+ event.targetTouches.length;	
				}
				if(indiceColor==5){
					indiceColor=0;
				}
				//llamando al archivo UpdateTouch para modificar los touch
				Ajax("UpdateTouch.php?touch="+event.targetTouches.length,
				function(data){
					//alert(data);
				});
			}	
		}


		function Mi_Timer() {
			Contador++;
			if(Contador>=1 && EventoActual!="TAP" && EventoActual!="SWIP"){
				contain.innerHTML = "TOUCH"+ noDedos;
				window.clearInterval(Handle_Mi_Timer);
				Handle_Mi_Timer = null;
				EventoActual="TOUCH";

				//llamando al archivo UpdateTouch para modificar los touch
				Ajax("UpdateTouch.php?touch="+noDedos,
				function(data){
					//alert(data);
				});
			}
			Contador = 0;
		}


		orientacion();
		function orientacion(){
				test.addListener(function(evento) {
				if(evento.matches)   { //Detecta en que tipo de direccion esta
						document.getElementById('div').innerHTML= "PORTRAIT";
						countPtr +=1;

						document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
						indiceColor++;
						if(indiceColor==5){ indiceColor=0};

						//llamando al archivo UpdateOrientation para modificar la tabla orientation
						//se envia TipoDeOrientation=1 y cantidad=1
						Ajax("UpdateOrientation.php?TipoDeOrientacion=1&cantdad=1",
							function(data){
						//alert(data);
						});			
				}
				else {
						document.getElementById('div').innerHTML= "LANDSCAPE";
						countLS +=1; //Cuando detecte aumenta a 1	
						document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
						indiceColor++;
						if(indiceColor==5){ indiceColor=0};			

						//llamando al archivo UpdateOrientation para modificar la tabla orientation
						//se envia TipoDeOrientation=2 y cantidad=1
						Ajax("UpdateOrientation.php?TipoDeOrientacion=2&cantdad=1",
							function(data){
						//alert(data);
						});	
				}
		});

		}

</script>
</html>