<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Select dinamico</title>
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
        <h3>Selección de País</h3>
        <div class="input-field">
            <select>
                <option value="" disabled selected>Selecciona un país</option>
                <?php
                include("conexion.php"); // Incluye el archivo de conexión

                $sql = "SELECT id, detalle FROM paises";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['detalle'] . "</option>";
                }

                $conn->close();
                ?>
            </select>
            <label>Selecciona un país</label>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>
</html>