<?php
// main.php
require_once './controlador.php';

$pizzaController = new PizzaController();
$pizza_id = 2; 
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
                    <li class="nav-item"><a class="nav-link" href="./principal.html">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./napolitana.php">Pizza Napolitana</a>
                            <a class="dropdown-item" href="./peperoni.php">Pizza de Peperoni</a>
                            <a class="dropdown-item" href="./hawaiana.php">Pizza Hawaiana</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="tel:+529981724619">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">
    <section id="pizza1" class="pizza-details mb-5">
        <div class="card">
            <img src="./img/hawainaCARD.jpeg" alt="Descripción de la imagen" class="card-img-top">
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
    </section>
    <section id="pizza3" class="pizza-details mb-5">
    </section>
</main>

<footer class="bg-danger text-white text-center py-3">
    <p>Ya se me antojo una pizza</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
