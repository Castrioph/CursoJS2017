<!DOCTYPE html>
<?php
require_once('../src/models/Conexion.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuarios</title>
  </head>
  <body>
    <h1>Editar usuario</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <form class="form" action="editarUsuario.php" method="post" name="form">
          <select class="" name="nombre">
            <?php
            $conector=new Conexion("localhost","root","","juegos");
            $conector->conectar();
              ?>
              <option value="">Elige un usuario</option>
              <?php
              //interactuar con la base de datos
              $nombre="SELECT nombre FROM usuarios";
              $resul = $conector->buscar($nombre);
              foreach ($resul as $fila) {
                ?>
                <option value="<?=$fila['nombre']?>"><?=$fila['nombre']?></option>
                <?php
              }
            ?>
          </select>
					<br>
					<br>
					<br>
          <input type="submit" value="Editar"></input>
        </form>
      </fielset>
  </body>
</html>
