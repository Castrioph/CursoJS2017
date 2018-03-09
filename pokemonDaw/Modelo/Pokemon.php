<?php


/**
 *
 */
class Pokemon
{
  private $nombre="Squirtle";
  private $vida=100;
  private $lvl=100;
  private $IV=0;
  private $genero=["Macho","Hembra"];
  private $ataques=["Pistola agua", "Rayo burbuja", "Refuerzo", "Hidrobomba"];

  function __construct($nombre, $vida, $lvl,$ataques){
    $this->nombre=$nombre;
    $this->vida=$vida;
    $this->lvl=$lvl;
    $this->IV=rand(0,6);
    $this->genero=$this->genero[rand(0,1)];
    $this->ataques=$ataques;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getVida(){
    return $this->vida;
  }

  public function getLvl(){
    return $this->lvl;
  }

  public function getIV(){
    return $this->IV;
  }

  public function getGenero(){
    return $this->genero;
  }

  public function getAtaques(){
    return $this->ataques;
  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }

  public function setVida($vida){
    $this->vida=$vida;
  }

  public function setLvl($lvl){
     $this->lvl=$lvl;
  }

  public function setIV($IV){
     $this->IV=$IV;
  }

  public function setGenero($genero){
     $this->genero=$genero;
  }

  public function setAtaques($ataques){
     $this->ataques=$ataques;
  }

  public function getStats(){
    $str="Nombre: ".$this->nombre."<br>"."Vida: ".$this->vida."<br>"." Lvl: ".$this->lvl."<br>"." IV: ".
    $this->IV."<br>"." Género: ".$this->genero."<br>"." Ataques: ".$this->ataques[0].", ".
    $this->ataques[1].", ".$this->ataques[2].", ".$this->ataques[3]."<br>";
    return $str;
  }

  public function setStats($nombre, $vida, $lvl, $IV, $genero, $ataques){
    $this->nombre=$nombre;
    $this->vida=$vida;
    $this->lvl=$lvl;
    $this->IV=$IV;
    $this->genero=$genero;
    $this->ataques=$ataques;

  }

  public function atacar($num){
    $str=$this->nombre." usó ".$this->ataques[$num].". Es muy efectivo."."<br>";
    return $str;
  }


}




 ?>
