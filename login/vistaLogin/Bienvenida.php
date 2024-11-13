<?php
require_once __DIR__ . '/../controladorLogin/controladorLogin.php';

$control = new ControladorLogin();
$control->valuser();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-danger text-white text-center py-3">
        <h1>Bienvenido, <?php if ($control->getStatus()): ?>
           <?php echo htmlspecialchars($control->getNombreUsuario());?>
        <?php endif; ?></h1>
        <!-- Tu navegación aquí -->
    </header>

    <div class="container mt-5 text-center">
    <?php if ($control->getStatus()): ?>
        <h2>Serás redirigido a la página principal en <span id="countdown">5</span> segundos...</h2>
        <p>¡Disfruta de nuestras deliciosas pizzas en Pizzería Aña!</p>
        <?php else:  ?>
            <h2>Serás redirigido al inicio de sesion <span id="countdown">5</span> segundos...</h2>
        <p>¡Recuerda tu usuario y contraseña!</p>
        <?php endif; ?>
        <div class="progress mt-3" style="height: 25px; width: 50%; margin: 0 auto;">
            <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%"></div>
        </div>
        </h1>
    </div>

    <script>
    <?php if ($control->getStatus()): ?>
       
        <?php if ($control->getTipoUsuario() == 2): ?>
            setTimeout(function() {
                window.location.href = "http://localhost/pizzas_MVC/formulariooInsertar/vistaForm/registroPizza.php";
            }, 5000);
        <?php elseif ($control->getTipoUsuario() == 1): ?>
            setTimeout(function() {
                window.location.href = "http://localhost/pizzas_MVC/pizza/VIstas/principal.php";
            }, 5000);
        <?php endif; ?>
    <?php else: ?>
        setTimeout(function() {
        window.location.href = "http://localhost/pizzas_MVC/login/vistaLogin/LoginVista.php";
    }, 5000); 
    <?php endif; ?>
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
