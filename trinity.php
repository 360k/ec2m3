<?php
$cadena = 'gjjhk<->fdde';
$valor = '-';
$mayorque = '>';
$menorque = '<';

$esta = strpos($cadena, $valor);
$cun = strlen($cadena);
$temporalmayorque = $esta + 1;
$temporalmenorque = $esta - 1;
$posmayorque = strpos($cadena, $mayorque);
$posmenorque = strpos($cadena, $menorque);



if ($esta !==false) {
  echo "La cadena ".$valor." existe";
  echo "<br>";
  echo "temporal menor que ".$temporalmenorque;
  echo "<br>";
  echo "temporal mayor que ".$temporalmayorque;
  echo "<br>";
  echo "posicion < ".$posmenorque." y la de > ".$posmayorque;
  echo "<br>";
  echo "La cadena tiene ".$cun." elementos";
  echo "<br>";
  echo "Tus elementos empiezan en en la posicion ".$esta;
  $mitad = intval($cun/2);
  echo "<br>";
  echo "el valor de la mitad de la cadena es ".$mitad;
  if (($esta == $mitad || $esta == $mitad-1 || $esta == $mitad+1) && ($temporalmenorque == $posmenorque) && ($temporalmayorque == $posmayorque) ){
    echo "<br>";
    echo "La cadena ".$valor. "Esta en medio";
  }else{
    echo "<br>";
    echo "La cadena ".$valor. "no esta en medio";
  }
}else{
  echo "La cadena ".$esta." no existe";
}

 ?>
