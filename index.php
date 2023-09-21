<?php
include("conexion.php");

// Verificar si se ha enviado una consulta de búsqueda
if(isset($_POST['buscar'])) {
    $busqueda = $_POST['busqueda'];
    $sql = "SELECT id, detalle FROM paises WHERE detalle LIKE '%$busqueda%'";
} else {
    $sql = "SELECT id, detalle FROM paises";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Países</title>
    <!-- Incluir los archivos CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
        <h3>Lista de Países</h3>

        <!-- Formulario de búsqueda -->
        <form action="index.php" method="post">
            <div class="input-field">
                <input type="text" name="busqueda" id="busqueda">
                <label for="busqueda">Buscar País por Nombre</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar</button>
        </form>

        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>País</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["detalle"] . "</td>";
                        echo "<td>";
                        echo "<a href='editar_pais_form.php?id=" . $row["id"] . "' class='btn-small waves-effect waves-light blue'>Editar</a>";
                        echo "<a href='eliminar_pais.php?id=" . $row["id"] . "' class='btn-small waves-effect waves-light red'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron países.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="agregar_pais_form.php" class="btn waves-effect waves-light">Agregar País</a>
    </div>

    <!-- Incluir los archivos JavaScript de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
