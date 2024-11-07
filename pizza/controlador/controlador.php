<?php

require_once __DIR__ . '/../modelo/usoDeConsutaPizza.php';
class PizzaController {
    private $usoBd;
    private $pizzaId;

    public function __construct() {
        $this->usoBd = new usoBD(); 
        $this->pizzaId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    }

    public function mostrarPizza() {
        return $this->usoBd->mostrarPizza($this->pizzaId);
    }
}
?>
