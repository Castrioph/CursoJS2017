<!DOCTYPE html>
<?php
require_once('../src/models/Conexion.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <h1>Editar usuarios</h1>
    <form action="actualizarUsuario.php" method="post"><input type="submit" value="Editar"></input></form>
    <br>
    <br>
    <br>
    <br>
    <h1>Borrar usuarios</h1>
    <form action="borrarUsuario.php" method="post"><input type="submit" value="Borrar"></input></form>
    <br>
    <br>
    <br>
    <br>
    <h1>Insertar usuarios</h1>
    <form action="insertarUsuario.php" method="post"><input type="submit" value="Insertar"></input></form>
    <br>
    <br>
    <br>
    <br>
    <h1>Volver al inicio</h1>

    <form method="post" action="index.php">
        <input type="submit" value="Inicio">
    </form>
    <br>
    <br>
    <br>
    <br>
</head>
<body>
<?php
//Conectamos con la base de datos
$conector = new Conexion("localhost", "root", "", "juegos");
$conector->conectar();
//Creamos una tabla para mostrar los datos
?>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Curso</th>
        <th>Puntuación</th>
        <th>Correo</th>

    </tr>
    <?php
    //Creamos una búsqueda y mostraos todos los datos por html en formato de tabla
    $str = 'SELECT * FROM usuarios ORDER BY id ASC';
    $busqueda = $conector->buscar($str);
    while ($fila = $busqueda->fetch_assoc()) {
        echo "<tr>
              <td>" . $fila['id'] . "</td>
              <td>" . $fila['nombre'] . "</td>
              <td>" . $fila['apellidos'] . "</td>
              <td>" . $fila['edad'] . "</td>
              <td>" . $fila['curso'] . "</td>
              <td>" . $fila['puntuacion'] . "</td>
              <td>" . $fila['correo'] . "</td>
            </tr>";
    }
    //En caso de que $_GET["nombre"] no esté vacío recogemos los datos para crear una inserción en la BBDD
    if (!empty($_GET["nombre"])) {
        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        $edad = $_GET["edad"];
        $curso = $_GET["curso"];
        $correo = $_GET["correo"];
        $busqueda = $conector->buscar("SELECT * FROM usuarios ORDER BY id ASC");
        //Buscamos cual es el último ID y lo aumentamos en 1
        while ($fila = $busqueda->fetch_assoc()) {
            $id = $fila['id'];
        }
        $id++;
        //Añadimos todos los valores recogidos por el formulario de registro y el id
        $busqueda = $conector->buscar("INSERT INTO usuarios VALUES ('$id', '$nombre', '$apellidos', '$edad', '$curso', 0,'$correo')");
        //Actualizamos para mostrar todos los datos por la pantalla y reiniciar el enlace
        header("Location:ListadoUsuarios.php");
    } else {
        echo " Estos son los usuarios registrados";
    }
    ?>
</body>
</html>
