<html>
	<head>
		<meta charset="utf8">
		<title>Listado de usuarios</title>
	</head>
	<body>
		<script type="text/javascript" src="comprobar.js"></script>
		<!--Redireccionamos los datos a listadoUsuarios.php-->
		<form action="listadoUsuarios.php" onsubmit="return comprobar();">
			<h1>Formulario de registro de usuario</h1><div>
			<b>Nombre: &nbsp</b> <input type="text" name="nombre" id="nombre" placeholder="nombre" ></input>
			<br><br>
			<b>Apellidos: &nbsp</b><input type="text" name="apellidos" id="apellidos" placeholder="apellidos" ></input>
			<br><br>
			<b>Edad: &nbsp </b> <input type="text" name="edad" id="edad" placeholder="edad" ></input>
			<br><br>
			<b>Curso: &nbsp </b> <input type="text" name="curso" id="curso" placeholder="curso" ></input>
			<br><br>
			<b>Correo: &nbsp </b> <input type="text" name="correo" id="correo" placeholder="correo" ></input>
			<br><br>
			</div>
			<button><b>Registrar usuario</b></button>
		</form>
	</body>
</html>
