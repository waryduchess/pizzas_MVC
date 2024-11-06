<?php
require_once __DIR__ . '/../modeloLogin/validacion_de_user.php';

class ControladorLogin {
    private $usuario;
    private $contrasena;
    private $valUser;

    public function __construct() {
        // Capturar los datos enviados desde el formulario
        $this->usuario = $_POST['usuario'];
        $this->contrasena = $_POST['password'];

        // Instanciar la clase ValidadorUsuario, que ya contiene la conexión
        $this->valUser = new ValidadorUsuario();
    }

    public function valuser() {
        // Llamar al método validarCredenciales de ValidadorUsuario
        $resultado = $this->valUser->validarCredenciales($this->usuario, $this->contrasena);

        if ($resultado['status']) {
            // Si la validación es exitosa, mostrar la bienvenida personalizada
            $this->mostrarBienvenida($resultado);
        } else {
            // Si hubo un error, mostrar el mensaje de error
            echo "Error: " . htmlspecialchars($resultado['error']);
        }
    }

    private function mostrarBienvenida($resultado) {
        // Crear un mensaje de bienvenida personalizado
        echo "<div class='bienvenida'>";
        echo "<h1>¡Bienvenido, " . htmlspecialchars($resultado['nombre']) . "!</h1>";
        echo "<p>Usuario: " . htmlspecialchars($resultado['usuario']) . "</p>";
        echo "<p>Tipo de Usuario: " . htmlspecialchars($resultado['tipoUser']) . "</p>";
        echo "<p>Estamos felices de tenerte aquí. Explora nuestras funcionalidades y disfruta de tu experiencia.</p>";
        echo "</div>";
    }
}

// Crear una instancia de ControladorLogin y ejecutar la validación
$controlador = new ControladorLogin();
$controlador->valuser();
?>
