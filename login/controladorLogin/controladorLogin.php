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
    private $status;

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
            $this->status = $resultado['status'];
        } else {
            echo  htmlspecialchars("Usuario no encontrado");
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
    public function getStatus(){
    return $this->status;
    }
}
?>
