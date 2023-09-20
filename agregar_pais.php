<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_pais = $_POST["nombre"];

    $sql = "INSERT INTO paises (detalle) VALUES ('$nombre_pais')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige a la página principal
    } else {
        echo "Error al agregar el país: " . $conn->error;
    }
    
    $conn->close();
}
?>