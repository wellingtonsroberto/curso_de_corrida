


<?php
     $distancia = $_GET["distancia"];
     $tempo = $_GET["tempo"];
     $minutos = '60';
     $formula = '3,6';
 
           $pace = ($distancia / $tempo)*$minutos*$formula;
	           
           
           echo "Seu PACE é de : &nbsp&nbsp " . number_format($pace),"&nbsp";
	
     
     
?>







