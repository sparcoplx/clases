<?php
$host = "localhost"; // Cambia esto al host de tu base de datos
$usuario = "root"; // Cambia esto a tu nombre de usuario de la base de datos
$contrasena = ""; // Cambia esto a tu contraseña de la base de datos
$base_de_datos = "clases";

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>