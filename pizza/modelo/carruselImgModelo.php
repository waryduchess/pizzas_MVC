<?php
require_once __DIR__ . '/conexionBD.php';

class ImagenesPizza {
    private $conn;
    private $pizza_id;

    public function __construct() {
        $db = new BaseDeDatos();
        $this->conn = $db->getConexion();
    }

    public function obtenerTodasLasImagenesCarrusel() {
        $sql = "SELECT img_carrusel FROM imagenes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $imagenes = [];
        while ($row = $result->fetch_assoc()) {
            $imagenes[] = $row['img_carrusel'];
        }

        return $imagenes;
    }
}

