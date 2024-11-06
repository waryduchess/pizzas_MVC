

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
require_once __DIR__ . '/../controladorLogin/controladorLogin.php';

$control = new ControladorLogin();
$control->valuser(); 
?>
<header class="bg-danger text-white text-center py-3">
        <h1>Bienvenido  <?php echo htmlspecialchars($control->getNombreUsuario()); ?></h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="#">Pizzería Aña</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="./LoginVista.php">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Pizza Napolitana</a>
                                <a class="dropdown-item" href="">Pizza de Peperoni</a>
                                <a class="dropdown-item" href="">Pizza Hawaiana</a>
                                <a class="dropdown-item" href="">Pizza de Carne Pastor</a>
                                <a class="dropdown-item" href="">Pizza Mexicana</a>
                                <a class="dropdown-item" href="">Pizza Vegetariana</a>
                            </div>

                        </li>
                        <li class="nav-item"><a class="nav-link" href="tel:+529981724619">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

     <div class="div4"></div>
        <div class="div5"></div>
    </div>


    
       
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
