<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pizza->nombre; ?></title>
</head>
<body>
    <h2><strong><?php echo $pizza->nombre; ?></strong></h2>

    <h2><em><strong>Ingredientes</strong></em></h2>
    <ul>
        <?php foreach ($pizza->ingredientes as $ingrediente): ?>
            <li><?php echo $ingrediente; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2><em><strong>Tamaños</strong></em></h2>
    <ul>
        <?php foreach ($pizza->tamanos as $tamano): ?>
            <li><?php echo $tamano['tamano'] . " - " . $tamano['dimension']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2><em><strong>Descripción</strong></em></h2>
    <p><?php echo $pizza->descripcion; ?></p>

    <h2><em><strong>Precios</strong></em></h2>
    <ul>
        <?php foreach ($pizza->precios as $precio): ?>
            <li><?php echo $precio['tamano'] . " - $" . number_format($precio['precio'], 2); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
