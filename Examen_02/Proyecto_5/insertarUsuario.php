<html>
	<head>
		<meta charset="utf8">
		<title>Listado de usuarios</title>
	</head>
	<body>
		<!--Redireccionamos los datos a listadoUsuarios.php-->
		<form action="listadoUsuarios.php">
			<h1>Formulario de registro de usuario</h1><div>
			<b>Nombre: &nbsp</b> <input type="text" name="nombre" placeholder="nombre" ></input>
			<br><br>
			<b>Apellidos: &nbsp</b><input type="text" name="apellidos" placeholder="apellidos" ></input>
			<br><br>
			<b>Edad: &nbsp </b> <input type="text" name="edad" placeholder="edad" ></input>
			<br><br>
			<b>Curso: &nbsp </b> <input type="text" name="curso" placeholder="curso" ></input>
			<br><br>
			<b>Correo: &nbsp </b> <input type="text" name="correo" placeholder="curso" ></input>
			<br><br>
			</div>
			<button><b>Registrar usuario</b></button>
		</form>
	</body>
</html>
