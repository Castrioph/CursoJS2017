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
			header("Location:listadoUsuarios.php");

      }
     ?>
   </body>
</html>
