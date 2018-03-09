<?php

/**
 *
 */
class HandRew extends Pokemon{

  private $tipo="Insecto";

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

  public function yoOsEscucho(){
    $str="HandRew entra en llamada y se rie, luego se queda callado y dice que no puede jugar. Pero él os escucha."."<br>";
    return $str;
  }
}
 ?>
