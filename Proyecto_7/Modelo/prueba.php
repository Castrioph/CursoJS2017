<?php

require_once("Conexion.php");

$conector=new Conexion("localhost", "root", "", "juegos");
echo "Hola";

$conector->conectar();

$busqueda=$conector->buscar("SELECT * FROM usuarios");

echo $busqueda->fetch_assoc();
?>
