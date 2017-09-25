<?php
$cadena = 'asdfgfdde';
$valor = 'df';

$pos = strpos($cadena, $valor);

if ($pos !==false) {
  echo "La cadena ".$valor." existe";
}else{
  echo "La cadena ".$valor." no existe";
}

 ?>
