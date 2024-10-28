<?php
// PizzaController.php
require_once './pizzas.php';
require_once './consultas.php';

class PizzaController {
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
            // Manejo de errores
            return null;
        }
    }

    public function __destruct() {
        $this->db->close();
    }
}
?>
