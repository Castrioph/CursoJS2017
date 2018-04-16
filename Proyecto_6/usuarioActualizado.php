<html>
	<head>
		<meta charset="utf8">
		<title>Listado de usuarios</title>
	</head>
	<body>
    <?php
    $conector=new mysqli("localhost","root","","juegos");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    }else{
			$nombre=$_POST['nombre'];
      $busqueda="DELETE FROM usuarios WHERE nombre='$nombre' ";
      $conector->query($busqueda);
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $correo=$_POST['correo'];
      $puntuacion=$_POST['puntuacion'];
      $id=$_POST['id'];
      $insert="INSERT INTO usuarios VALUES ('$id', '$nombre', '$apellidos', '$edad', '$curso', $puntuacion,'$correo')";
      $conector->query($insert);
      }
      header("Location:listadoUsuarios.php")
     ?>

   </body>
</html>
