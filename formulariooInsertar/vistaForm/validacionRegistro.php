<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Administrador - Pizzería Aña</title>
    <link rel="stylesheet" href="./css/registro.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
        require_once __DIR__ ."/../controlador/controladorInsertar.php";
        $pizzaController = new PizzaController();
        $pizzaController->handleRequest();
    ?>

    <header class="bg-danger text-white text-center py-3">
        <h1>Modo Administrador</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
                <!-- Aquí puedes añadir enlaces si es necesario -->
            </div>
        </nav>
    </header>

    <div class="container mt-5 text-center">
        <?php if ($pizzaController->insertada): ?>
            <h2>¡Pizza insertada correctamente! Redirigiendo en <span id="countdown">5</span> segundos...</h2>
            <p>¡Gracias por tus labores en Pizzería Aña!</p>
        <?php else: ?>
            <h2>Oops, algo salió mal. Intenta nuevamente en <span id="countdown">5</span> segundos...</h2>
            <p>¡Revisa bien los datos!</p>
        <?php endif; ?>

        <div class="progress mt-3" style="height: 25px; width: 50%; margin: 0 auto;">
            <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%"></div>
        </div>
    </div>

    <script>
        <?php if ($pizzaController->insertada): ?>
            setTimeout(function() {
                window.location.href = "http://localhost/pizzas_MVC/pizza/VIstas/principal.php";
            }, 5000);
            <?php else: ?>
                setTimeout(function() {
                window.location.href = "http://localhost/pizzas_MVC/formulariooInsertar/vistaForm/registroPizza.php";
            }, 5000);
        <?php endif; ?>
    </script>
</body>
</html>
