<?php
// main.php
require_once './controlador.php';

$pizzaController = new PizzaController();
$pizza_id = 1; 
$pizza = $pizzaController->mostrarPizza($pizza_id);

if ($pizza === null) {
    echo "Error: Pizza no encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pizza->nombre); ?></title>
</head>
<body>
    <h2><strong><?php echo htmlspecialchars($pizza->nombre); ?></strong></h2>

    <h2><em><strong>Ingredientes</strong></em></h2>
    <ul>
        <?php foreach ($pizza->ingredientes as $ingrediente): ?>
            <li><?php echo htmlspecialchars($ingrediente); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2><em><strong>Tamaños</strong></em></h2>
    <ul>
        <?php foreach ($pizza->tamanos as $tamano): ?>
            <li><?php echo htmlspecialchars($tamano['tamano'] . " - " . $tamano['dimension']); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2><em><strong>Descripción</strong></em></h2>
    <p><?php echo htmlspecialchars($pizza->descripcion); ?></p>

    <h2><em><strong>Precios</strong></em></h2>
    <ul>
        <?php foreach ($pizza->precios as $precio): ?>
            <li><?php echo htmlspecialchars($precio['tamano'] . " - $" . number_format($precio['precio'], 2)); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
