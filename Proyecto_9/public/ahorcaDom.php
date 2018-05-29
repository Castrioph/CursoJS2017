<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  include "../src/models/Session.php";
  include "../src/models/Conexion.php";
  $conector=new Conexion("localhost", "root", "", "juegos");
  $conector->conectar();
  $usuario=$_POST['usuario'];
  $busqueda=$conector->buscar("SELECT puntuacion FROM usuarios WHERE nombre='$usuario'");
  foreach($busqueda as $fila){
      $puntuacion=$fila['puntuacion'];

  }
  $session=new session($usuario, $puntuacion);
  echo $session->getUsuario();
  ?>
    <h1>¡Bienvenido al AhorcaDoom! </h1>
  <form method="post" action="index.php">
      <h2><?=$usuario?> tu puntuación anterior es <?=$puntuacion?></h2>
      <input type="submit" value="Log out">

  </form>

    <form id="formularioPrueba">
      <input type="text" id="textoLetra" value="" placeholder="Introduce una letra">
      <button type="button" name="button" onclick="ahorcado()">¡Busca la letra!</button>
    </form>
    <div id="textoError"></div>
    <div id="textoPalabra"></div>
    <div id="textoIntentos"></div>
    <div id="textoUsadas"></div>
    <img src="" id="imagen" />

  <script type="text/javascript" src="js/ahorcaDom.js"></script>

  <?php
  if($usuario=='admin'){
      ?>
  <form method="post" action="listadoUsuarios.php">
      <input type="submit" value="aministrar">
  </form>
  <?php
  }
  ?>
  </body>
</html>
