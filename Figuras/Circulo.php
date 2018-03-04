<?php
/**
 *
 */
class Circulo
{
  private $radio;

  public function __construct(){
    $radio=0;
  }

  public function getRadio(){
    return $this->radio;
  }

  public function setRadio($radio){
    $this->radio=$radio;
  }

  public function area(){
    return $PI*$radio*$radio;
  }

  public function perimetro(){
    return $PI*$radio;
  }
}
 ?>
