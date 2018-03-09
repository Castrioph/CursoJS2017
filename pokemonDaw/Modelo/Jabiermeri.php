<?php

/**
 *
 */
class Jabiermeri extends Pokemon{

  private $tipo="Fantasma";

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

  public function granParida(){
    $str="Jabiermeri comienza su verborrea continua como si a alguien le importase, y cortas las
    conversaciones interesantes para soltar alguna gran tontería muy característica suya."."<br>";
    return $str;
  }
}
 ?>
