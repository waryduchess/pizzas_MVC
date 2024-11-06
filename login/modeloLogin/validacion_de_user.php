<?php
require_once __DIR__ . '/consultaUser.php';
require_once __DIR__ . '/coexionBDUser.php';
class ValidadorUsuario
{
    private $db;

    public function __construct()
    {
        $conn = new BaseDeDatos();
        $this->db = $conn->getConexion();
    }

    public function validarCredenciales($usuarioIngresado, $contraIngresada)
    {
        try {
            $usuario = new Usuario($this->db, $usuarioIngresado);
            $contraseñaAlmacenada = $usuario->getContra();
           
    
            if (($usuario->getUsuario() == $usuarioIngresado)&&($usuario->getContra() == $contraIngresada)) {
                return [
                    "status" => true,
                    "nombre" => $usuario->getNombre(),
                    "usuario" => $usuario->getUsuario(),
                    "tipoUser" => $usuario->getTipoUser()
                ];
            } else {
                throw new Exception("Contraseña incorrecta.");
            }
        } catch (Exception $e) {
            return [
                "status" => false,
                "error" => $e->getMessage()
            ];
        }
    }
    
}
