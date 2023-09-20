<?php
include("conexion.php");

$id_pais = $_GET["id"];

$sql = "SELECT id, detalle FROM paises WHERE id = $id_pais";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar País</title>
    <!-- Incluir los archivos CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h3>Editar País</h3>
        <form action="editar_pais.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="input-field">
                <input type="text" name="nombre" id="nombre" value="<?php echo $row["detalle"]; ?>">
                <label for="nombre">Nombre del País</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="editar">Guardar Cambios</button>
        </form>
    </div>

    <!-- Incluir los archivos JavaScript de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
