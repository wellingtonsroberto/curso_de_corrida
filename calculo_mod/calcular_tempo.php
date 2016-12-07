


<?php
     $distancia = $_GET["distancia"];
     $velocidade = $_GET["velocidade"];

 
           $tempo = ($distancia / $velocidade);
	           
           
           echo "Seu tempo é de :&nbsp" . number_format($tempo),"&nbsp Minutos";
	
     
     
?>







