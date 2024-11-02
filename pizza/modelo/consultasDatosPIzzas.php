<?php
class Pizza {
    private $conn;
    private $pizza_id;
    public $nombre;
    public $ingredientes = [];
    public $tamanos = [];
    public $descripcion;
    public $precios = [];
    public $img;

    public function __construct($conn, $pizza_id) {
        $this->conn = $conn;
        $this->pizza_id = $pizza_id;
        $this->cargarDatos();
    }

    private function cargarDatos() {
        try {
            $this->nombre = $this->obtenerNombre();
            $this->ingredientes = $this->obtenerIngredientes();
            $this->tamanos = $this->obtenerTamanos();
            $this->descripcion = $this->obtenerDescripcion();
            $this->precios = $this->obtenerPrecios();
            $this->img = $this->obtenerImagen();
        } catch (Exception $e) {
            throw new Exception("Error al cargar los datos de la pizza: " . $e->getMessage());
        }
    }

    private function obtenerNombre() {
        $sql = "SELECT nombre FROM Pizzas WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()['nombre'] ?? 'Nombre no encontrado';
    }

    private function obtenerIngredientes() {
        $sql = "SELECT ingrediente FROM Ingredientes WHERE pizza_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $ingredientes = [];
        while ($row = $result->fetch_assoc()) {
            $ingredientes[] = $row['ingrediente'];
        }
        return $ingredientes;
    }

    private function obtenerTamanos() {
        $sql = "SELECT tamano, dimension FROM Tamanos WHERE pizza_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $tamanos = [];
        while ($row = $result->fetch_assoc()) {
            $tamanos[] = $row;
        }
        return $tamanos;
    }

    private function obtenerDescripcion() {
        $sql = "SELECT descripcion FROM Descripciones WHERE pizza_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()['descripcion'] ?? 'Descripción no encontrada';
    }

    private function obtenerPrecios() {
        $sql = "SELECT Tamanos.tamano, Precios.precio 
                FROM Precios 
                JOIN Tamanos ON Precios.tamano_id = Tamanos.id 
                WHERE Precios.pizza_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $precios = [];
        while ($row = $result->fetch_assoc()) {
            $precios[] = $row;
        }
        return $precios;
    }
    private function obtenerImagen() {
        $sql = "SELECT archivo FROM Imagenes WHERE pizza_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->pizza_id);
        $stmt->execute();
        $img = $stmt->get_result();
        return $img->fetch_assoc()['archivo'] ?? 'imagen_no_disponible.jpg';
    }
    
}
