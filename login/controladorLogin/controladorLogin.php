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
        
        $this->valUser = new ValidadorUsuario();
    }

    public function valuser() {
        $resultado = $this->valUser->validarCredenciales($this->usuario, $this->contrasena);

        if ($resultado['status']) {
            $this->nombreUsuario = $resultado['nombre'];
            $this->usuarioId = $resultado['usuario'];
            $this->tipoUsuario = $resultado['tipoUser'];
        } else {
            throw new Exception("Error: " . htmlspecialchars($resultado['error']));
        }
    }

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
