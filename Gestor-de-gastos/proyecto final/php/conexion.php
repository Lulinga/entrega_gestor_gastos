<?php

// Datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos_proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifico si falló la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Juego de caracteres que va a utilizar la conexion
$conn->set_charset("utf8");

?>