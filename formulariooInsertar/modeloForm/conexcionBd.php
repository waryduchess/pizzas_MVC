<?php
class BaseDeDatos {
    private $host = 'localhost';
    private $user = 'erik';
    private $password = '2013460';
    private $database = 'pizzas';
    private $conexion;

    public function __construct() {
        try {
            // Cambia a PDO
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";
            $this->conexion = new PDO($dsn, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Error en la conexión: " . $e->getMessage());
        }
    }

    public function prepareQuery($sql) {
        try {
            $stmt = $this->conexion->prepare($sql);
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception("Error en la preparación de la consulta: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        $this->conexion = null;
    }

    public function __destruct() {
        $this->cerrarConexion();
    }
}
?>
