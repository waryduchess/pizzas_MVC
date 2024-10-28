<?php
require_once './pizzas.php';
require_once './consultas.php';

 $conex = new BaseDeDatos();
 $db = $conex->getConexion();
 $pizza_id = 3;
$pizza = new Pizza($db, $pizza_id);
$db->close();
?>