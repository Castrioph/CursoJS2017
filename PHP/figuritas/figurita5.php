<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <p align="center">
  <?php
  for ($i=1; $i<=9; $i=$i+2){
      for($j=1; $j<=$i; $j++){
          echo "*";
      }
      echo "<br>";
  }
  ?>
  </p>
  </body>
</html>