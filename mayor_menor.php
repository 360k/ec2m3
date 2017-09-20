<?php
$numeros = array(3,4,-6,1,65,-3,6,-10);
     foreach($numeros as $numero){
            if(!isset($menor)){
                $menor = $numero;
            }elseif($menor > $numero){
                $menor = $numero;
            }
     }
     echo 'El número menor es: ' . $menor;

 ?>
