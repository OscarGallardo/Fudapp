<?php
// Datos del formulario
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = "";
$created_at = "";

// Datos para la conexion
$host = "localhost";
$user = "root";
$pass = "12345678";
$name = "fudapp_dev";
$mysqli = new mysqli($host, $user, $pass, $name);

// Verificar si hay error de conexion
if ($mysqli->connect_errno) {
	echo sprintf('Error (%d): %s.', $mysqli->connect_errno, $mysqli->connect_error);
} else {
	$q = sprintf("INSERT INTO `recetas` VALUES(NULL, '%s', '%s', '%s', '%s')", $nombre, $descripcion, $imagen, $created_at);
	$res = $mysqli->query($q);
	echo json_encode($res);
}
