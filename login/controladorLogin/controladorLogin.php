<?php
require_once __DIR__ . '/../modeloLogin/validacion_de_user.php';

class ControladorLogin {
    private $usuario;
    private $contrasena;
    private $valUser;

    // Propiedades privadas para almacenar los datos del usuario
    private $nombreUsuario;
    private $usuarioId;
    private $tipoUsuario;

    public function __construct() {
        $this->usuario = $_POST['usuario'];
        $this->contrasena = $_POST['password'];
        
        // Instanciar la clase ValidadorUsuario
        $this->valUser = new ValidadorUsuario();
    }

    public function valuser() {
        // Validar las credenciales
        $resultado = $this->valUser->validarCredenciales($this->usuario, $this->contrasena);

        if ($resultado['status']) {
            // Si la autenticación es exitosa, almacenamos los datos del usuario en las propiedades
            $this->nombreUsuario = $resultado['nombre'];
            $this->usuarioId = $resultado['usuario'];
            $this->tipoUsuario = $resultado['tipoUser'];
        } else {
            // Si hubo un error, lanzamos una excepción o almacenamos el mensaje de error
            throw new Exception("Error: " . htmlspecialchars($resultado['error']));
        }
    }

    // Métodos 'get' para acceder a los datos del usuario
    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function getUsuarioId() {
        return $this->usuarioId;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
    public function getUser(){
    return $this->usuario;
    }
}
?>
