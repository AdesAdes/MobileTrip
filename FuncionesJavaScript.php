<?php 
?>
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


	/*function cambiarColor(){

	}*/

	var Handle_Mi_Timer = null;
    var Contador = 0;	
	var EventoActual;
	var noDedos

	function manejadorTouchstart(event){
        setTimeout(Mi_Timer, 300);
        EventoActual = "START";
        noDedos = event.targetTouches.length;
        document.getElementsByTagName("body")[0].style ='transition: background-color 1s ease, height 2s ease-in 1s;';
         document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
        indiceColor++;
        if(indiceColor==5){ indiceColor=0};
       	}


	function manejadorTouchmove(event){
		contain.innerHTML = "<h1 style='font-size: 40px;''>SWIP"+event.targetTouches.length+"</h1>";
		EventoActual = "SWIP";
	}


    function manejadorTouchend(event) {
		if (Contador<1 && EventoActual!="TOUCH" && EventoActual!="SWIP"){
			window.clearInterval(Handle_Mi_Timer);
        	Handle_Mi_Timer = null;
			contain.innerHTML = "<h1 style='font-size: 40px;'>TAP</h1>";
        	Contador = 0;
        	EventoActual = "TAP";
        	if(indiceColor==5){
                        indiceColor=0;
                     }
		}
		Contador = 0;
		if(event.targetTouches.length>=1){
			if(EventoActual=="TOUCH"){
				contain.innerHTML = "<h1 style='font-size: 40px;'>TOUCH"+ event.targetTouches.length +"</h1>";	
			}
			if(indiceColor==5){
                        indiceColor=0;
                     }
		}
		else{
			//volvemos a portrait o landscape
			//contain.innerHTML = "<h1 style='font-size: 40px;'>PORTRAIT</h1>";
		}
	}


	function Mi_Timer() {
        Contador++;
        if(Contador>=1 && EventoActual!="TAP" && EventoActual!="SWIP"){
        	contain.innerHTML = "<h1 style='font-size: 40px;'>TOUCH"+ noDedos +"</h1>";
        	window.clearInterval(Handle_Mi_Timer);
        	Handle_Mi_Timer = null;
        	EventoActual="TOUCH";
        }
        Contador = 0;
    }
   



       	test.addListener(function(evento) {
				  if(evento.matches)   { //Detecta en que tipo de direccion esta
				    document.getElementById('div').innerHTML= "<h1>PORTRAIT</h1>";
				    countPtr +=1;
					//alert("port: " + countPtr);
     
                   document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
        indiceColor++;
        if(indiceColor==5){ indiceColor=0};
				  }
				  else {
				    document.getElementById('div').innerHTML= "<h1>LANDSCAPE</h1>";
					countLS +=1; //Cuando detecte aumenta a 1
					//alert("land: " + countLS);
		   document.getElementsByTagName("body")[0].style.background = colores[indiceColor];
         indiceColor++;
        if(indiceColor==5){ indiceColor=0};			
		
				  }
				});



		</script>