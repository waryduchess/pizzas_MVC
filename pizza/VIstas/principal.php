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

                        <!-- Menú desplegable para "Otros productos" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOtros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Otros productos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownOtros">
                                <a class="dropdown-item" href="./vista.php?id=7">Hamburguesa</a>
                                <a class="dropdown-item" href="./vista.php?id=8">Hot-Dog</a>

                            </div>
                        </li>

                        <!-- Menú desplegable para "Postres" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPostres" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Postres</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownPostres">
                                <a class="dropdown-item" href="./vista.php?id=1">Pastel de chocolate</a>
                              
                                
                            </div>
                        </li>

                        <!-- Menú desplegable para "Bebidas" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBebidas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bebidas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownBebidas">
                                <a class="dropdown-item" href="./vista.php?id=1">Te helado</a>
                               
                            </div>
                        </li>

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
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="./vista.php?id=1">
                            <img src="../img/napo1.jpg" class="d-block w-100" alt="Pizza 1">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="./vista.php?id=3">
                            <img src="../img/freshly-baked-pizza-rustic-wood-table-gourmet-delight-generated-by-artificial-intelligence.jpg" class="d-block w-100" alt="Pizza 2">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="./vista.php?id=2">
                            <img src="../img/hawaiian-pizza-with-pineapple-ham-cheese-wooden-table.jpg" class="d-block w-100" alt="Pizza 3">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="./vista.php?id=4">
                            <img src="../img/carruselPastor.jpeg" class="d-block w-100" alt="Pizza 3">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="./vista.php?id=5">
                            <img src="../img/carruselMEX.jpg" class="d-block w-100" alt="Pizza 3">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="./vista.php?id=6">
                            <img src="../img/carruselVEGE.avif" class="d-block w-100" alt="Pizza 3">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <h3 class="center">Mostrar más productos</h3>

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    </style>
                        </a>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
