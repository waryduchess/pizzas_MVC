-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-11-2024 a las 16:20:25
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descripciones`
--

INSERT INTO `descripciones` (`id`, `pizza_id`, `descripcion`) VALUES
(1, 1, 'Tiene como peculiaridad su corteza esponjosa, producida gracias al aire incorporado durante el amasamiento.'),
(2, 2, 'Es conocida por incluir piña entre sus ingredientes principales. Con una base de tomate, jamón y queso fundido, esta fruta es la indudable protagonista de esta receta.'),
(3, 3, 'Pizza con base de salsa de tomate, mozzarella y pepperoni, un tipo de salami curado hecho a base de carne de cerdo y de vaca mezclados y sazonados con pimentón.'),
(4, 4, 'Pizza de carne pastor con cebolla, cilantro y piña'),
(5, 5, 'Pizza mexicana con chorizo, jalapeños, cebolla y queso cheddar'),
(6, 6, 'Pizza vegetariana con pimientos, champiñones, cebolla y aceitunas'),
(7, 7, 'Hamburguesa con carne de res, lechuga, tomate y queso cheddar'),
(8, 8, 'Hot Dog con salchicha, cebolla caramelizada y mostaza'),
(9, 9, 'Pastel de chocolate con ganache y frambuesas frescas'),
(10, 10, 'Té helado de limón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pizza_id` int NOT NULL,
  `archivo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_carrusel` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pizza_id` (`pizza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `pizza_id`, `archivo`, `img_carrusel`) VALUES
(1, 1, 'nap1Card.jpeg', 'napo1.jpg'),
(2, 2, 'hawainaCARD.jpeg', 'hawaiian-pizza.jpg'),
(3, 3, 'pepeCard.jpeg', 'freshl.jpg'),
(4, 4, 'pastorCard.jpeg', 'carruselPastor.jpeg'),
(5, 5, 'mexicanaCard.jpeg', 'carruselMEX.jpg'),
(6, 6, 'vegetarianaCard.jpg', 'carruselVEGE.avif'),
(7, 7, 'hamburguesaCard.jpeg', 'carruselHamburgesa.jpg'),
(8, 8, 'hotdogCard.jpeg', 'carrusel-HotDog.jpg'),
(9, 9, 'pastelChocolateCard.jpeg', 'carruselCake.jpeg'),
(10, 10, 'teHeladoCard.jpeg', 'iceTeaCarr.webp');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(20, 3, 'Embutidos picantes'),
(21, 4, 'Carne de pastor'),
(22, 4, 'Cebolla'),
(23, 4, 'Cilantro'),
(24, 4, 'Piña'),
(25, 5, 'Chorizo'),
(26, 5, 'Jalapeños'),
(27, 5, 'Cebolla'),
(28, 5, 'Queso Cheddar'),
(29, 6, 'Pimientos'),
(30, 6, 'Champiñones'),
(31, 6, 'Cebolla'),
(32, 6, 'Aceitunas'),
(33, 7, 'Pan para hamburguesa'),
(34, 7, 'Carne de res'),
(35, 7, 'Lechuga'),
(36, 7, 'Tomate'),
(37, 7, 'Queso cheddar'),
(38, 8, 'Pan para hot dog'),
(39, 8, 'Salchicha'),
(40, 8, 'Cebolla caramelizada'),
(41, 8, 'Mostaza'),
(42, 9, 'Harina de trigo'),
(43, 9, 'Cacao en polvo'),
(44, 9, 'Azúcar'),
(45, 9, 'Ganache de chocolate'),
(46, 10, 'Té negro'),
(47, 10, 'Hielo'),
(48, 10, 'Rodaja de limón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`id`, `nombre`) VALUES
(1, 'Pizza Napolitana'),
(2, 'Pizza Hawaiana'),
(3, 'Pizza de Pepperoni'),
(4, 'Pizza de Carne Pastor'),
(5, 'Pizza Mexicana'),
(6, 'Pizza Vegetariana'),
(7, 'Hamburguesa'),
(8, 'Hot Dog'),
(9, 'Pastel de Chocolate'),
(10, 'Té Helado');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `pizza_id`, `tamano_id`, `precio`) VALUES
(1, 1, 1, 150.00),
(2, 2, 2, 190.00),
(3, 2, 3, 250.00),
(4, 3, 4, 190.00),
(5, 3, 5, 250.00),
(6, 4, 1, 150.00),
(7, 4, 2, 200.00),
(8, 5, 1, 160.00),
(9, 5, 2, 210.00),
(10, 6, 1, 140.00),
(11, 6, 2, 190.00),
(12, 7, NULL, 80.00),
(13, 8, NULL, 50.00),
(14, 9, NULL, 100.00),
(15, 10, NULL, 30.00);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tamanos`
--

INSERT INTO `tamanos` (`id`, `pizza_id`, `tamano`, `dimension`) VALUES
(1, 1, 'Individual', '15 cm de diámetro'),
(2, 2, 'Mediana', '30 cm de diámetro'),
(3, 2, 'Grande', '35 cm de diámetro'),
(4, 3, 'Mediana', '30 cm de diámetro'),
(5, 3, 'Grande', '35 cm de diámetro'),
(6, 4, 'Mediana', '30 cm de diámetro'),
(7, 5, 'Mediana', '30 cm de diámetro'),
(8, 6, 'Mediana', '30 cm de diámetro'),
(9, 4, 'Grande', '35 cm de diámetro'),
(10, 5, 'Grande', '35 cm de diámetro'),
(11, 6, 'Grande', '35 cm de diámetro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo`) VALUES
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `tipo_usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `tipo_usuario_id` (`tipo_usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `contrasena`, `tipo_usuario_id`) VALUES
(1, 'Erik', 'chopper', '2013460', 2),
(2, 'Isabel', 'chabela', '123', 1),
(3, 'Dylan', 'dylan', '2013460', 1);

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
