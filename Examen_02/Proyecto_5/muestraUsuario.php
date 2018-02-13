
!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Muestra Usuario</title>
  </head>
  <body>

  </body>
</html>

<?php
//Establecemos la conexión con la base de datos
$conector=new mysqli("localhost", "root", "", "juegos");
//Comprobamos si da error al conectarse a la base de datos
if($conector->connect_errno){
    echo "Ha ocurrido un error al conectar a la base de datos: ".$conector->connect_error;
}
//Recogemos por GET el id
$id=$_GET["id"];
//Creamos una busqueda en la base de datos
$busqueda=$conector->query("SELECT * FROM usuarios WHERE id='$id'");
//Mostramos todas las lineas con usuarios con el id recogido por si hubiesen más de 1
while($fila=$busqueda->fetch_assoc()){
  echo "El usuario con id: ".$fila["id"]." se llama ".$fila["nombre"]." ".$fila["apellidos"]." de edad ". $fila["edad"].
  " curso ".$fila["curso"]." puntuacion " .$fila["puntuacion"]." y correo ".$fila["correo"]."<br>";
}
?>
