<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCase;

class numeros extends TestCase{

 public function testValorMaximo(){

   // Valor Maximo entre negativos y positivos
   $strArray=[3,4,-6,1,65,-3,6,-10,1024];

   $resultado =  ValorMaximo($strArray);
   $this->assertEquals(1024, $resultado);

 }


 public function testValorMaximoTodosNegativos(){

   // Valor Maximo entre negativos
   $strArray=[-2,-55,-43,-4];

   $resultado =  ValorMaximo($strArray);
   $this->assertEquals(-2, $resultado);

 }


 public function testValorMaximoTodosPositivos(){

   // Valor Maximo entre Positivos
   $strArray=[333,55,43,404];
   $resultado = ValorMaximo($strArray);
   $this->assertEquals(404, $resultado);

 }


 public function testValorMinimoPositivosyNegativos(){

   // Valor Maximo entre negativos y positivos
   $strArray=[3,4,-6,1,65,-7,6,-10];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(-10, $resultado);

 }

 public function testValorMinimoTodosNegativos(){

   // Valor Maximo entre negativos
   $strArray=[-3,-55,-43,-4];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(-55, $resultado);

 }

 public function testValorMinimoTodospositivos(){

   // Valor Maximo entre negativos
   $strArray=[12,25,83,73,125];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(12, $resultado);

 }

}
?>
