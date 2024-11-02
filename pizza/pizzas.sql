-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-11-2024 a las 21:02:55
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripciones`
--

DROP TABLE IF EXISTS `descripciones`;
CREATE TABLE IF NOT EXISTS `descripciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descripciones`
--

INSERT INTO `descripciones` (`id`, `pizza_id`, `descripcion`) VALUES
(1, 1, 'Tiene como peculiaridad su corteza esponjosa, producida gracias al aire incorporado durante el amasamiento.'),
(2, 2, 'Es conocida por incluir piña entre sus ingredientes principales. Con una base de tomate, jamón y queso fundido, esta fruta es la indudable protagonista de esta receta.'),
(3, 3, 'Pizza con base de salsa de tomate, mozzarella y pepperoni, un tipo de salami curado hecho a base de carne de cerdo y de vaca mezclados y sazonados con pimentón.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int NOT NULL,
  `archivo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `pizza_id`, `archivo`) VALUES
(1, 1, 'nap1Card.jpeg'),
(2, 2, 'hawainaCARD.jpeg'),
(3, 3, 'pepeCard.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int DEFAULT NULL,
  `ingrediente` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `pizza_id`, `ingrediente`) VALUES
(1, 1, 'Harina'),
(2, 1, 'Levadura fresca'),
(3, 1, 'Aceite'),
(4, 1, 'c/n Puré de tomate'),
(5, 1, '100 gr Muzzarella'),
(6, 1, 'Tomate en rodajas'),
(7, 2, 'Masa'),
(8, 2, 'Tomate'),
(9, 2, 'Mozzarella'),
(10, 2, 'Aceite de oliva'),
(11, 2, 'Hierbas finas molidas'),
(12, 2, 'Concentrado de Tomate con Pollo CONSOMATE®'),
(13, 2, 'Piña miel cortada en cubos'),
(14, 2, 'Jamon'),
(15, 3, 'Masa'),
(16, 3, 'Tomate'),
(17, 3, 'Mozzarella'),
(18, 3, 'Quesos variados'),
(19, 3, 'Embutidos italianos'),
(20, 3, 'Embutidos picantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`id`, `nombre`) VALUES
(1, 'Pizza Napolitana'),
(2, 'Pizza Hawaiana'),
(3, 'Pizza de Pepperoni');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

DROP TABLE IF EXISTS `precios`;
CREATE TABLE IF NOT EXISTS `precios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int DEFAULT NULL,
  `tamano_id` int DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`),
  KEY `tamano_id` (`tamano_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `pizza_id`, `tamano_id`, `precio`) VALUES
(1, 1, 1, 150.00),
(2, 2, 2, 190.00),
(3, 2, 3, 250.00),
(4, 3, 4, 190.00),
(5, 3, 5, 250.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanos`
--

DROP TABLE IF EXISTS `tamanos`;
CREATE TABLE IF NOT EXISTS `tamanos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int DEFAULT NULL,
  `tamano` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dimension` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tamanos`
--

INSERT INTO `tamanos` (`id`, `pizza_id`, `tamano`, `dimension`) VALUES
(1, 1, 'Individual', '15 cm de diámetro'),
(2, 2, 'Mediana', '30 cm de diámetro'),
(3, 2, 'Grande', '35 cm de diámetro'),
(4, 3, 'Mediana', '30 cm de diámetro'),
(5, 3, 'Grande', '35 cm de diámetro');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripciones`
--
ALTER TABLE `descripciones`
  ADD CONSTRAINT `Descripciones_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `Ingredientes_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`);

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `Precios_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`),
  ADD CONSTRAINT `Precios_ibfk_2` FOREIGN KEY (`tamano_id`) REFERENCES `tamanos` (`id`);

--
-- Filtros para la tabla `tamanos`
--
ALTER TABLE `tamanos`
  ADD CONSTRAINT `Tamanos_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
