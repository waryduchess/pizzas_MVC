<?php
require_once __DIR__ . "/conexcionBd.php";

class PizzaInsercion {
    private $conn;

    public function __construct() {
        $db = new BaseDeDatos();
        $this->conn = $db->getConexion();
    }

    public function insertarPizza($nombre, $descripcion, $ingredientes, $tamano, $dimension, $precio, $imagen, $imagenCarrusel): void {
        try {
            $this->conn->beginTransaction();
    
            $pizza_id = $this->insertarEnPizzas($nombre);
            $this->insertarEnDescripciones($pizza_id, $descripcion);
            $this->insertarEnIngredientes($pizza_id, $ingredientes);
            $tamano_id = $this->insertarEnTamanos($pizza_id, $tamano, $dimension);
            $this->insertarEnPrecios($pizza_id, $tamano_id, $precio);
    
            // Procesar ambas imágenes
           // Procesar y mover la imagen principal
$archivoImagen = $this->procesarImagen($imagen);

// Procesar y mover la imagen del carrusel
$archivoImagenCarrusel = $this->procesarImagen($imagenCarrusel);

// Insertar en la tabla de imágenes con ambos nombres de archivo
$this->insertarEnImagenes($pizza_id, $archivoImagen, $archivoImagenCarrusel);

    
            $this->conn->commit();
            echo "Pizza insertada exitosamente.";
        } catch (Exception $e) {
            $this->conn->rollBack();
            echo "Error al insertar la pizza: " . $e->getMessage();
        }
    }
    
    private function insertarEnPizzas($nombre): int {
        $query = "INSERT INTO pizzas (nombre) VALUES (:nombre)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        return (int) $this->conn->lastInsertId();
    }

    private function insertarEnDescripciones($pizza_id, $descripcion): void {
        $query = "INSERT INTO descripciones (pizza_id, descripcion) VALUES (:pizza_id, :descripcion)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':pizza_id', $pizza_id);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->execute();
    }

    private function insertarEnIngredientes($pizza_id, $ingredientes): void {
        $query = "INSERT INTO ingredientes (pizza_id, ingrediente) VALUES (:pizza_id, :ingrediente)";
        $stmt = $this->conn->prepare($query);
        foreach (explode(',', $ingredientes) as $ingrediente) {
            $ingrediente = trim($ingrediente);
            $stmt->bindParam(':pizza_id', $pizza_id);
            $stmt->bindParam(':ingrediente', $ingrediente);
            $stmt->execute();
        }
    }

    private function insertarEnTamanos($pizza_id, $tamano, $dimension): int {
        $query = "INSERT INTO tamanos (pizza_id, tamano, dimension) VALUES (:pizza_id, :tamano, :dimension)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':pizza_id', $pizza_id);
        $stmt->bindParam(':tamano', $tamano);
        $stmt->bindParam(':dimension', $dimension);
        $stmt->execute();
        return (int) $this->conn->lastInsertId();
    }

    private function insertarEnPrecios($pizza_id, $tamano_id, $precio): void {
        $query = "INSERT INTO precios (pizza_id, tamano_id, precio) VALUES (:pizza_id, :tamano_id, :precio)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':pizza_id', $pizza_id);
        $stmt->bindParam(':tamano_id', $tamano_id);
        $stmt->bindParam(':precio', $precio);
        $stmt->execute();
    }



  // Método para procesar y obtener el nombre del archivo principal
// Método para procesar y obtener el nombre del archivo principal
private function procesarImagen($imagen) {
    $nombreArchivo = $imagen['name'];
    $ruta = 'C:/wamp64/www/pizzas_MVC/pizza/img/' . $nombreArchivo;

    // Verificar si el archivo temporal existe
    if (!file_exists($imagen['tmp_name'])) {
        throw new Exception("El archivo temporal no existe.");
    }

    if (move_uploaded_file($imagen['tmp_name'], $ruta)) {
        return $nombreArchivo; // Retorna solo el nombre del archivo
    } else {
        throw new Exception("Error al subir la imagen.");
    }
}

// Método para procesar y obtener el nombre del archivo del carrusel
private function procesarImagenCarrusel($imagenCarrusel) {
    $nombreArchivoCarrusel = $imagenCarrusel['name'];
    $rutaCarrusel = 'C:/wamp64/www/pizzas_MVC/pizza/img/' . $nombreArchivoCarrusel;

    // Verificar si el archivo temporal existe
    if (!file_exists($imagenCarrusel['tmp_name'])) {
        throw new Exception("El archivo temporal del carrusel no existe.");
    }

    if (move_uploaded_file($imagenCarrusel['tmp_name'], $rutaCarrusel)) {
        return $nombreArchivoCarrusel; // Retorna solo el nombre del archivo
    } else {
        throw new Exception("Error al subir la imagen del carrusel.");
    }
}

// Método para insertar los nombres de las imágenes en la base de datos
private function insertarEnImagenes($pizza_id, $archivo, $archivoCarrusel): void {
    $query = "INSERT INTO imagenes (pizza_id, archivo, img_carrusel) VALUES (:pizza_id, :archivo, :img_carrusel)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':pizza_id', $pizza_id);
    $stmt->bindParam(':archivo', $archivo);
    $stmt->bindParam(':img_carrusel', $archivoCarrusel);
    $stmt->execute();
}


}
