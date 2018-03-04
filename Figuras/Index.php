<?php
include 'Circulo.php';
include 'Triangulo.php';
include 'Cuadrado.php';

$circulo= new Circulo();
$circulo->setRadio(3);
$radio= $circulo->getRadio();

$triangulo=new Triangulo();
$triangulo->setBase(5.2);
$triangulo->setAltura(3);
$base=$triangulo->getBase();
$altura=$triangulo->getAltura();

$cuadrado=new Cuadrado();
$cuadrado->setLado(4.5);
$lado=$cuadrado->getLado();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/main.css"> <!---Enlaza el html con el css-->
  </head>
  <body>
    <div class="table-title">
      <h2>Figuras geométricas</h2>
    </div>
    <div>
      <table align="center" border="1">
        <tr>
          <th></th>
          <th>Cuadrado</th>
          <th>Triángulo</th>
          <th>Círculo</th>
        </tr>
        <tr>
          <th >Lado</th><td><?php echo $lado?></td><td></td><td></td>
        </tr>
        <tr>
          <th>Base</th><td></td><td><?php echo $base?></td><td></td>
        </tr>
        <tr>
          <th>Altura</th><td></td><td><?php echo $altura?></td><td></td>
        </tr>
        <tr >
          <th>Radio</th><td></td><td></td><td><?php echo $radio?></td>
        </tr>
      </table>
    </div>
  </body>
</html>
