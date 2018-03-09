<?php

/**
 *
 */
class Sebhostion extends Pokemon{

  private $tipo="Lucha";

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

  public function talaForestal(){
    $str="Sebhostion entra en furia y empieza a talar todos los arboles que encuentra por el camino.
    Uno se cae encima suya y le aplasta, por tonto. ¿Pa qué talas nada?"."<br>";
    return $str;
  }
}
 ?>
