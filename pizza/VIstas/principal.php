<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería Aña</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php
    require_once __DIR__ . "/../controlador/controlador.php"; // Asegúrate de incluir la clase
    $imagenesPizza = new PizzaController(); // Asegúrate de que $conn esté definido
    $imagenesCarrusel = $imagenesPizza->getImgPizzas();
    ?>

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
                        <li class="nav-item"><a class="nav-link" href="./principal.php">Inicio</a></li>
                        <!-- Menú desplegable para "Menú" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                                <a class="dropdown-item" href="./vista.php?id=1">Pizza Napolitana</a>
                                <a class="dropdown-item" href="./vista.php?id=3">Pizza de Peperoni</a>
                                <a class="dropdown-item" href="./vista.php?id=2">Pizza Hawaiana</a>
                                <a class="dropdown-item" href="./vista.php?id=4">Pizza de Carne Pastor</a>
                                <a class="dropdown-item" href="./vista.php?id=5">Pizza Mexicana</a>
                                <a class="dropdown-item" href="./vista.php?id=6">Pizza Vegetariana</a>
                            </div>
                        </li>
                        <!-- Otros menús -->
                        <li class="nav-item"><a class="nav-link" href="tel:+529981724619">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <section id="pizza-carousel" class="mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($imagenesCarrusel as $index => $imagen): ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
                    <?php endforeach; ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($imagenesCarrusel as $index => $imagen): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <a href="./vista.php?id=<?= $index + 1 ?>"> 
                                <img src="../img/<?= htmlspecialchars($imagen) ?>" class="d-block w-100" alt="Imagen del carrusel <?= $index + 1 ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-danger text-white text-center py-3">
        <p>Ya se me antojo una pizza</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
