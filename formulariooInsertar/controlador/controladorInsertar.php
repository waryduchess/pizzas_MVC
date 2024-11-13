<?php
require_once __DIR__ . "/../modeloForm/insertarBdPizza.php";

class PizzaController {
    private $pizzaInsercion;
    public $insertada;

    public function __construct() {
        $this->pizzaInsercion = new PizzaInsercion();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $ingredientes = $_POST['ingredientes'];
            $tamano = $_POST['tamano'];
            $dimension = $_POST['dimension'];
            $precio = $_POST['precio'];
            $imagen = $_FILES['imagen'];
            $imagenCarrusel = $_FILES['imagenCarrusel'];

            $this->pizzaInsercion->insertarPizza($nombre, $descripcion, $ingredientes, $tamano, $dimension, $precio, $imagen, $imagenCarrusel);
            $this->insertada = true;
        }else {
        $this->insertada = false;
        }
    }
}


