<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión & Crear cuenta</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
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

    <div class="parent">
        <section>
            <div class="div1"></div>

            <!-- Card in div3 -->
            <div class="div3">
                <!-- Card Wrapper -->
                <div class="wrapper card p-4 shadow-lg">
                    <div class="card-switch text-center">
                        <!-- Toggle Switch -->
                        <label class="switch">
                            <input type="checkbox" class="toggle">
                            <span class="slider"></span>
                            <span class="card-side"></span>

                            <!-- Flip Card Content -->
                            <div class="flip-card__inner">
                                <!-- Login Card -->
                                <div class="flip-card__front">
                                    <div class="title mb-3">Iniciar sesión</div>
                                    <form class="flip-card__form" action="./Bienvenida.php" method="POST">
                                        <div class="form-group">
                                            <input class="flip-card__input form-control" name="usuario" placeholder="usuario" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="flip-card__input form-control" name="password" placeholder="password" type="password" required>
                                        </div>
                                        <button  type="submit" onclick="window.location.href='./Bienvenida.php'">¡Vamos!</button></a>
                                        </form>

                                </div>

                                <!-- Sign Up Card -->
                                <div class="flip-card__back">
                                    <div class="title mb-3">Crear cuenta</div>
                                    <form class="flip-card__form" action="">
                                        <div class="form-group">
                                            <input class="flip-card__input form-control" name="name" placeholder="Nombre" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="flip-card__input form-control" name="Usuario" placeholder="Usuario" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="flip-card__input form-control" name="password" placeholder="Contraseña" type="password" required>
                                        </div>
                                        <button class="flip-card__btn btn btn-primary btn-block">¡Confirmar!</button>
                                    </form>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <div class="div4"></div>
        <div class="div5"></div>
    </div>
    <!-- Footer in div2 -->
    <div class="div2">
        <footer>
            <p>Ya se me antojó una pizza</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>