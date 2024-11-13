    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/registro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Inserción de Pizza</title>
    </head>
    <body>
    <header class="bg-danger text-white text-center py-3">
        <h1>Modo administrador</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
               
            </div>
        </nav>
    </header>
    
        <form action="./validacionRegistro.php" method="POST" enctype="multipart/form-data">
            <h2>Insertar Nueva Pizza</h2>

            <label for="nombre">Nombre de la pizza:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea><br><br>

            <label for="ingredientes">Ingredientes (separados por coma):</label>
            <input type="text" id="ingredientes" name="ingredientes" required><br><br>

            <label for="tamano">Tamaño:</label>
            <input type="text" id="tamano" name="tamano" required><br><br>

            <label for="dimension">Dimensión:</label>
            <input type="text" id="dimension" name="dimension" required><br><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required><br><br>

            <label for="imagen">Imagen principal:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>

            <label for="imagenCarrusel">Imagen para el carrusel:</label>
            <input type="file" id="imagenCarrusel" name="imagenCarrusel" accept="image/*" required><br><br>

            <input type="submit" value="Insertar Pizza">
        </form>
    </body>
    </html>
