<?php
class BaseDeDatos {
    private $host = 'localhost';
    private $user = 'erik';
    private $password = '2013460';
    private $database = 'pizzas';
    private $conexion;

    public function __construct() {
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        // Puedes lanzar una excepción si la conexión falla
        if (!$this->conexion) {
            throw new Exception("Error en la conexión: " . mysqli_connect_error());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        if ($this->conexion) {
            mysqli_close($this->conexion);
            $this->conexion = null; // Limpia la referencia
        }
    }

    public function estaConectado() {
        return $this->conexion !== null; // Devuelve true si la conexión es válida
    }

    public function __destruct() {
        $this->cerrarConexion();
    }
}
?>
