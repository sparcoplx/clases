<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar País</title>
    <!-- Incluir los archivos CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
        <h3>Agregar País</h3>
        <form action="agregar_pais.php" method="post">
            <div class="input-field">
                <input type="text" name="nombre" id="nombre">
                <label for="nombre">Nombre del País</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="agregar">Agregar</button>
        </form>
        <br>
        <a href="index.php" class="btn waves-effect waves-light">Volver a la Lista de Países</a>
    </div>

    <!-- Incluir los archivos JavaScript de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
