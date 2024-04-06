<?php

//Configuracion de la BD
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "proyectogastro";

//Crear conexion a la BD
$conn = new mysqli($hostname, $username, $password, $dbname);

//Configura la codificacion de caracteres a UTF8
//$conn->set_charset("utf8mb4");

//Verifica la conexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>