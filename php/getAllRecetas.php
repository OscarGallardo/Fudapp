<?php
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
	$q = "SELECT * FROM `recetas`";
	$res = $mysqli->query($q);
	$arr = [];

	if($res){
		while($row = $res->fetch_object()){
			$arr[] = $row;
		}
	}

	echo json_encode($arr);
}
