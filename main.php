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
    <title>Pizzería Aña</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<header class="bg-danger text-white text-center py-3">
    <h1>Bienvenidos a Pizzería Aña</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Pizzería Aña</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#pizza1">Pizza 1</a>
                            <a class="dropdown-item" href="#pizza2">Pizza 2</a>
                            <a class="dropdown-item" href="#pizza3">Pizza 3</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">
    <section id="pizza1" class="pizza-details mb-5">
        <div class="card">
            <img src="./img/pizza-napolitana.png" alt="Descripción de la imagen" class="card-img-top">
            <div class="card-body">
                <h2 class="card-title"><?php echo htmlspecialchars($pizza->nombre); ?></h2>
                <p class="card-text"><?php echo htmlspecialchars($pizza->descripcion); ?></p>
                <h4>Ingredientes:</h4>
                <ul class="list-group list-group-flush">
                    <?php foreach ($pizza->ingredientes as $ingrediente): ?>
                        <li class="list-group-item"><?php echo htmlspecialchars($ingrediente); ?></li>
                    <?php endforeach; ?>
                </ul>
                <h4 class="mt-3">Tamaños y precios:</h4>
                <ul class="list-group list-group-flush">
                    <?php foreach ($pizza->tamanos as $index => $tamano): ?>
                        <li class="list-group-item">
                            <?php 
                                echo htmlspecialchars($tamano['tamano'] . " (" . $tamano['dimension'] . ") - $" . number_format($pizza->precios[$index]['precio'], 2)); 
                            ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="pizza2" class="pizza-details mb-5">
        <!-- Similar structure for Pizza 2 -->
    </section>

    <section id="pizza3" class="pizza-details mb-5">
        <!-- Similar structure for Pizza 3 -->
    </section>
</main>

<footer class="bg-danger text-white text-center py-3">
    <p>Ya se me antojo una pizza</p>
</footer>


</body>
</html>