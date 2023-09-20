<?php
include("conexion.php");

$id_pais = $_GET["id"];

$sql = "DELETE FROM paises WHERE id = $id_pais";
    
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirige a la página principal
} else {
    echo "Error al eliminar el país: " . $conn->error;
}

$conn->close();
?>