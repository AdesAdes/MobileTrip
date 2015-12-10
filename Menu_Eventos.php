<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	@media only screen and (orientation:portrait){
    #hola{
 
         position: absolute;
			top:5%;
			left:3%;
			margin-top:15%;
			padding:5%;
			text-align: center;
			color:white;
			font-size:100%;
			
     	
       }
}


@media only screen and (orientation:landscape){
     #hola{
 
            position: absolute;
			top:1%;
			left:20%;
			margin-top:0.1%;
			padding:1%;
			text-align: center;
			color:white;
			font-size:100%;
		
     	
       }
}
    ul{
    	list-style-type:none;
       }
     li{
     	display: block;
     	text-align: center;
     	color: #D29034;
     	padding:0.1%;
     	border: 1px  solid;

     }
     li:hover{
     	display: block;
     	text-align: center;
     	color: black;
     	background-color:#D29034;
     	padding:0.1%;
     	border: 1px  solid;}
     a{
     	 color:white;
     	 text-decoration:none;}
    
    h1{
    	color:white;
    	padding:0;
        margin:0;
    	top:0;
    	right:0;

    }

    a :hover{
      display: block;
     	text-align: center;
     	color: black;
     	background-color:#D29034;
     	padding:0.1%;
     	border: 1px  solid;

    }
	</style>
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body style="background-color: #0079BF;"> 
  <a href="index.php">Atras</a>
  <nav id="hola">
    <div id ="navegador">
    <h1 style='font-size:200%;'>Menu<h1>
	    <ul>
	        
	        <li><a href="graficar_Eventos.php">Touch               </a></li>
	    	<li><a href="">Touch Vs Tap        </a></li>
	    	<li><a href="">Swipe Vs MultiSwipe </a></li>
	    	<li><a href="">Landscape Vs Portrait </a></li>
	    	<li><a href="">all events</a></li>
	    </ul>
    </div>
   </nav>
</body>
</html>