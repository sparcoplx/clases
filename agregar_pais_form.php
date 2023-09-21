<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar País</title>
    <!-- Incluir los archivos CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="header">
        <nav>
            <div class="nav-wrapper green darken-3">
                <a href="#" class="brand-logo">CRUD Países</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Lista de Países</a></li>
                    <li><a href="agregar_pais_form.php">Agregar País</a></li>
                </ul>
            </div>
        </nav>
    </div>
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
