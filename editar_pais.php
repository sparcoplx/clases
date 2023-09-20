<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pais = $_POST["id"];
    $nombre_pais = $_POST["nombre"];

    $sql = "UPDATE paises SET detalle = '$nombre_pais' WHERE id = $id_pais";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige a la página principal
    } else {
        echo "Error al actualizar el país: " . $conn->error;
    }
    
    $conn->close();
}
?>