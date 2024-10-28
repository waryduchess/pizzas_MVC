<?php
require_once './pizzas.php';  // Asegúrate de que la ruta sea correcta
// O si el archivo de la clase BaseDeDatos está en otro lugar, ajusta la ruta:
require_once 'BaseDeDatos.php';  // Cambia esto según la ubicación de tu archivo

try {
    $baseDeDatos = new BaseDeDatos();
    
    // Comprobar si la conexión es exitosa
    if ($baseDeDatos->estaConectado()) {
        echo "La conexión a la base de datos es exitosa.";
    } else {
        echo "No se pudo conectar a la base de datos.";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Mostrar el error si hay problemas con la conexión
}
?>
