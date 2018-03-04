<?php
/**
 *
 */
class Cuadrado{

  private $lado=4;

  public function getLado(){
    return $this->lado;
  }

  public function setLado($lado){
    $this->lado=$lado;
  }

  public function __construct(){
    $this->lado=0;
  }

  public function area(){
    return $this->lado * $this->lado;
  }

  public function perimetro(){
    return $this->lado*4;
  }
}
 ?>
