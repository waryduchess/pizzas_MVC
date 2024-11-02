<?php

require_once __DIR__ . '/../modelo/usoDeConsutaPizza.php';
class PizzaController {
    private $usoBd;
    private $pizzaId;

    public function __construct() {
        $this->pizzaId = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $this->usoBd = new usoBD(); 
    }

    public function mostrarPizza() {
        return $this->usoBd->mostrarPizza($this->pizzaId);
    }
}
?>
