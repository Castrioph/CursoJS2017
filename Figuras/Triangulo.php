<?php
/**
 *
 */

class Triangulo
{
  private $base=4;
  private $altura=4;

  public function __construct(){
    $this->base=0;
    $this->altura=0;
  }

  public function getBase(){
    return $this->base;
  }

  public function getAltura(){
    return $this->altura;
  }

  public function setBase($base){
    $this->base=$base;
  }

  public function setAltura($altura){
    $this->altura=$altura;
  }

  public function area(){
    return $base*$altura/2;
  }

  //Perimetro de triangulo equilatero.
  public function perimetro(){
    return $base*3;
  }

}
 ?>
