<!DOCTYPE html>
<?php
require_once('../Modelo/Conexion.php');
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar usuarios</title>
    <link rel="stylesheet" >
  </head>
  <body>
    <h1>Borrar usuario</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <form class="form" action="usuarioBorrado.php" method="post" name="form">
          <select class="" name="nombre">
            <?php
            $conector=new Conexion("localhost","root","","juegos");
            $conector->conectar();
              ?>
              <option value="">Elige un usuario</option>
              <?php
              //interactuar con la base de datos
              $busqueda=$conector->buscar("SELECT nombre FROM usuarios");
              foreach ($busqueda as $fila) {
                ?>
                <option value="<?=$fila['nombre']?>"><?=$fila['nombre']?></option>
                <?php
              }
            ?>
          </select>
					<br>
					<br>
					<br>
          <input type="submit" value="Borrar" onclick="location.href='listadoUsuarios.php'"></input>
        </form>
      </fielset>
  </body>
</html>
