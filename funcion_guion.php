<?php

/*
function token($cadena){
  $guion = "-";
  $menorq ="<";
  $mayorq = '>';
  $estaelguion = strpos($cadena, $guion);
  $posmenorque = strpos($cadena, $menorq);
  $posmayorque = strpos($cadena, $mayorq);
  if (($estaelguion !==false) && ($posmenorque !==false) && ($posmayorque !==false)){
    $elementoscadena = strlen($cadena);
    $mitadcadena = intval($elementoscadena /2);
    if(($estaelguion == $mitadcadena || $estaelguion == $mitadcadena -1 || $estaelguion == $mitadcadena+1) && ($posmenorque = $estaelguion -1) && ($posmayorque = $estaelguion+1)){
      return true;
    }
    }
    return false;
  }
  */

  function token($cadena){
    $guion = "-";
    $menorq ="<";
    $mayorq = '>';
    $estaelguion = strpos($cadena, $guion);
    $posmenorque = strpos($cadena, $menorq);
    $posmayorque = strpos($cadena, $mayorq);
    $mitadcadena = intval(strlen($cadena)/2);
    
    if ($estaelguion == $mitadcadena  || $estaelguion == $mitadcadena-1 || $estaelguion == $mitadcadena+1 ) {
      if ($posmenorque == $estaelguion-1 || $posmayorque == $estaelguion+1){
        return true;
      }
    }
      return false;
    }

 ?>
