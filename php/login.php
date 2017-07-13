<?php
// Datos para la conexion
$host = "localhost";
$user = "root";
$pass = "12345678";
$name = "fudapp_dev";
$mysqli = new mysqli($host, $user, $pass, $name);

// Datos el formulario.
$email = $_GET['email'];
$password = $_GET['password'];

// Verificar si hay error de conexion
if ($mysqli->connect_errno) {
	echo sprintf('Error (%d): %s.', $mysqli->connect_errno, $mysqli->connect_error);
} else {
	$q = "SELECT * FROM `usuarios`";
	$q = sprintf("SELECT * FROM `usuarios` WHERE correo = %s AND password = %s;", $email, $password);
	$res = $mysqli->query($q);
	$arr = [];

	if($res->num_rows === 0 ){
		echo "NO_USER";
	} else {
		while($row = $res->fetch_object()){
			$arr[] = $row;
		}
		echo json_encode($arr);
	}

	
}
