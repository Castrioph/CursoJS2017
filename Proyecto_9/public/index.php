<!DOCTYPE html>
<?php
session_start();
session_destroy();
include "../src/models/Conexion.php";
include "../src/models/Session.php";

$conector=new Conexion("localhost", "root", "", "juegos");
$conector->conectar();
$query="SELECT nombre FROM usuarios";
$busqueda=$conector->buscar($query);
$usuario="anon";
?>
<html lang="en">
    <head>
        <title>Ahorcado</title>
    </head>
    <body>
    <script type="text/javascript" src="js/select.js"></script>
        <label><h2>¡Bienvenido al ahorcado!</h2></label>
        <form id="entrada" method="post" action="ahorcaDom.php">
            <select name="usuario">
                <?php
                while($fila=$busqueda->fetch_assoc()){
                ?>
                        <option name="sesion" value="<?=$fila['nombre']?>"><?=$fila['nombre']?></option>

                <?php
                    }
                 ?>

            </select>
            <input type="submit" value="Elegir">
        </form>

    <section>
        <form method="post" action="insertarUsuario.php">
            <input type="submit" value="Insertar usuario">
        </form>
    </section>
    </body>
</html>