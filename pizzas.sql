-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2024 a las 17:52:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
-- Estructura de tabla para la tabla `Descripciones`
--

CREATE TABLE `Descripciones` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Descripciones`
--

INSERT INTO `Descripciones` (`id`, `pizza_id`, `descripcion`) VALUES
(1, 1, 'Tiene como peculiaridad su corteza esponjosa, producida gracias al aire incorporado durante el amasamiento.'),
(2, 2, 'Es conocida por incluir piña entre sus ingredientes principales. Con una base de tomate, jamón y queso fundido, esta fruta es la indudable protagonista de esta receta.'),
(3, 3, 'Pizza con base de salsa de tomate, mozzarella y pepperoni, un tipo de salami curado hecho a base de carne de cerdo y de vaca mezclados y sazonados con pimentón.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ingredientes`
--

CREATE TABLE `Ingredientes` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `ingrediente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Ingredientes`
--

INSERT INTO `Ingredientes` (`id`, `pizza_id`, `ingrediente`) VALUES
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
-- Estructura de tabla para la tabla `Pizzas`
--

CREATE TABLE `Pizzas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Pizzas`
--

INSERT INTO `Pizzas` (`id`, `nombre`) VALUES
(1, 'Pizza Napolitana'),
(2, 'Pizza Hawaiana'),
(3, 'Pizza de Pepperoni');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Precios`
--

CREATE TABLE `Precios` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `tamano_id` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Precios`
--

INSERT INTO `Precios` (`id`, `pizza_id`, `tamano_id`, `precio`) VALUES
(1, 1, 1, 150.00),
(2, 2, 2, 190.00),
(3, 2, 3, 250.00),
(4, 3, 4, 190.00),
(5, 3, 5, 250.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tamanos`
--

CREATE TABLE `Tamanos` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `tamano` varchar(50) DEFAULT NULL,
  `dimension` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Tamanos`
--

INSERT INTO `Tamanos` (`id`, `pizza_id`, `tamano`, `dimension`) VALUES
(1, 1, 'Individual', '15 cm de diámetro'),
(2, 2, 'Mediana', '30 cm de diámetro'),
(3, 2, 'Grande', '35 cm de diámetro'),
(4, 3, 'Mediana', '30 cm de diámetro'),
(5, 3, 'Grande', '35 cm de diámetro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Descripciones`
--
ALTER TABLE `Descripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indices de la tabla `Ingredientes`
--
ALTER TABLE `Ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indices de la tabla `Pizzas`
--
ALTER TABLE `Pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Precios`
--
ALTER TABLE `Precios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`),
  ADD KEY `tamano_id` (`tamano_id`);

--
-- Indices de la tabla `Tamanos`
--
ALTER TABLE `Tamanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Descripciones`
--
ALTER TABLE `Descripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Ingredientes`
--
ALTER TABLE `Ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `Pizzas`
--
ALTER TABLE `Pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Precios`
--
ALTER TABLE `Precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Tamanos`
--
ALTER TABLE `Tamanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Descripciones`
--
ALTER TABLE `Descripciones`
  ADD CONSTRAINT `Descripciones_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `Pizzas` (`id`);

--
-- Filtros para la tabla `Ingredientes`
--
ALTER TABLE `Ingredientes`
  ADD CONSTRAINT `Ingredientes_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `Pizzas` (`id`);

--
-- Filtros para la tabla `Precios`
--
ALTER TABLE `Precios`
  ADD CONSTRAINT `Precios_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `Pizzas` (`id`),
  ADD CONSTRAINT `Precios_ibfk_2` FOREIGN KEY (`tamano_id`) REFERENCES `Tamanos` (`id`);

--
-- Filtros para la tabla `Tamanos`
--
ALTER TABLE `Tamanos`
  ADD CONSTRAINT `Tamanos_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `Pizzas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
