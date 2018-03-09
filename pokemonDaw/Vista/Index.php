<!DOCTYPE html>
<?php
include_once "../Modelo/Pokemon.php";
include_once "../Modelo/Gabrielote.php";
include_once "../Modelo/Sebhostion.php";
include_once "../Modelo/Jabiermeri.php";
include_once "../Modelo/HandRew.php";

$test=new Gabrielote("Gabrielote", 100, 100,["Robo de vida", "Robo de dinero", "Caligueva", "Ladilla"],"Veneno");
echo $test->getStats();
echo $test->diaDePago();

echo"<br>";

$test1=new Sebhostion("Sebhostion", 100, 100,["Gran léxico", "Divagación innecesaria", "1800 horas mirando al espacio", "Barba de leñador"],"Lucha");
echo $test1->getStats();
echo $test1->talaForestal();

echo"<br>";

$test2=new Jabiermeri("Jabiermeri", 100, 100,["Simulating Simulator", "Flying Siulator", "Truck Simulator", "XDNinioRata Simulator"],"Fantasma");
echo $test2->getStats();
echo $test2->granParida();

echo"<br>";

$test3=new HandRew("HandRew", 100, 100,["Prestar chicles", "Mirar Twitter", "Cabroneeees", "Venir a clase 3 horas antes"],"Insecto");
echo $test3->getStats();
echo $test3->yoOsEscucho();

echo"<br>";

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
