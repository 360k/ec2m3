<?php


  function ValorMaximo($numeros){
    foreach ($numeros as $numero) {
      if(!isset($valor)){
        $valor = $numero;
      }elseif ($valor < $numero) {
        $valor = $numero;
      }

    }
      return $valor;
  }


  function ValorMinimo($numeros){
    foreach ($numeros as $numero) {
      if(!isset($valor)){
        $valor = $numero;
      }elseif ($valor > $numero) {
        $valor = $numero;
      }

    }
      return $valor;
  }


 ?>
