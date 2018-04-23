<html>
	<head>
		<meta charset="utf8">
		<title>Listado de usuarios</title>
	</head>
	<body>
		<script type="text/javascript" src="comprobar.js"></script>
    <?php
    $conector=new mysqli("localhost","root","","juegos");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    }else{
			$nombre=$_POST['nombre'];
      $busqueda="select * from usuarios where nombre='$nombre'";
			$query= $conector->query($busqueda);
      foreach ($query as $fila){
				$apellido=$fila['apellidos'];
				$edad=$fila['edad'];
				$curso=$fila['curso'];
				$correo=$fila['correo'];
				$id=$fila['id'];
				$puntuacion=$fila['puntuacion'];
      }
    }
     ?>

		<!--Redireccionamos los datos a listadoUsuarios.php-->
		<form action="usuarioActualizado.php" method="post" >
			<h1>Formulario de registro de usuario</h1><div>
			<b>Nombre:</b> <input type="text" name="nombre" placeholder="nombre" value="<?=$nombre ?>" > </input>
			<br><br>
			<b>Apellidos: &nbsp</b><input type="text" name="apellidos" placeholder="apellidos" value="<?=$apellido ?>"></input>
			<br><br>
			<b>Edad: &nbsp </b> <input type="text" name="edad" placeholder="edad" value="<?=$edad ?>" ></input>
			<br><br>
			<b>Curso: &nbsp </b> <input type="text" name="curso" placeholder="curso" value="<?=$curso ?>" ></input>
			<br><br>
			<b>Correo: &nbsp </b> <input type="text" name="correo" placeholder="correo" value="<?=$correo ?>"></input>
			<br><br>
			<b>Id: &nbsp </b> <input type="text" name="id" placeholder="id" value="<?=$id ?>"></input>
			<br><br>
			<b>Puntuación: &nbsp </b> <input type="text" name="puntuacion" placeholder="id" value="<?=$puntuacion ?>"></input>
			</div>
			<button onclick="comprobar()"><b>Registrar usuario</b></button>
		</form>
	</body>
</html>
