<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar usuarios</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <h1>Borrar usuario</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <form class="form" action="usuarioBorrado.php" method="post" name="form">
          <select class="" name="nombre">
            <?php
            $conector=new mysqli("localhost","root","","juegos");
            if ($conector->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $conector->connect_error;
            } else {
              ?>
              <option value="">Elige un usuario</option>
              <?php
              //interactuar con la base de datos
              $nombre="select nombre from usuarios";
              $resul = $conector->query($nombre);
              foreach ($resul as $fila) {
                ?>
                <option value="<?=$fila['nombre']?>"><?=$fila['nombre']?></option>
                <?php
              }
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
