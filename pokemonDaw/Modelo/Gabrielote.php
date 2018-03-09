<?php

/**
 *
 */
class Gabrielote extends Pokemon{

  private $tipo="Veneno";

  function __construct($nombre, $vida, $lvl,$ataques,$tipo){
    parent::__construct($nombre, $vida, $lvl,$ataques);
    $this->tipo=$tipo;
  }

  public function getStats(){
    $str=parent::getStats();
    $str=$str."Tipo: ".$this->tipo."<br>";
    return $str;
  }

  public function getTipo(){
    return $this->tipo;
  }

  public function setTipo($tipo){
    $this->tipo=$tipo;
  }

  public function diaDePago(){
    $str="Hoy es día de pago, por tanto todos consiguen 1000 euros menos Gabrielote. Gabrielote es pobre."."<br>";
    return $str;
  }
}
 ?>
