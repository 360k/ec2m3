<?php
require_once "funcion_guion.php";
use PHPUnit\Framework\TestCase;
class DondeEstaelMedio extends TestCase{
  public function testsecuenciaenmedio(){
    $cadena = 'cms<->dkd';
    $resultado=token($cadena);
    $this->asserttrue($resultado);
  }
  public function testMedioaproxunodch(){
    $cadena = "cmsd<->dkt";
    $resultado=token($cadena);
    $this->asserttrue($resultado);
  }
  public function testMedioaproxunoizq(){
    $cadena = "cms<->zdkt";
    $resultado=token($cadena);
    $this->asserttrue($resultado);
  }
  public function testsinguion(){
    $cadena = "cms<>dkd";
    $resultado=token($cadena);
    $this->assertfalse($resultado);
  }
  public function testsinelemntos(){
    $cadena = "cmsdkd";
    $resultado=token($cadena);
    $this->assertfalse($resultado);
  }
  public function testsologuion(){
    $cadena = "cms-dkd";
    $resultado=token($cadena);
    $this->assertfalse($resultado);
  }
}
 ?>
