<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
  <?php
  $cont=1;
  for($i=1;$i<=5;$i+=2){
      while($cont<=$i){
          echo "*";
          $cont++;
      }
      echo "<br>";
      $cont=1;
  }
  for($i=3;$i>=1;$i-=2){
      while($cont<=$i){
          echo "*";
          $cont++;
      }
      echo "<br>";
      $cont=1;
  }
  ?>
  
  </body>
</html>