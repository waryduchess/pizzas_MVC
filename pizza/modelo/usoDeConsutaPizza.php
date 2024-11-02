<?php
require_once __DIR__ . '/conexionBD.php';
require_once __DIR__ . '/consultasDatosPIzzas.php';

class usoBD { 
    private $db;

    public function __construct() {
        $conex = new BaseDeDatos();
        $this->db = $conex->getConexion();
    }

    public function mostrarPizza($pizza_id) {
        try {
            $pizza = new Pizza($this->db, $pizza_id);
            if (empty($pizza->nombre)) {
                throw new Exception("Pizza no encontrada.");
            }
            return $pizza;
        } catch (Exception $e) {
            error_log("Error: " . $e->getMessage());
            return null;
        }
    }
}
?>
