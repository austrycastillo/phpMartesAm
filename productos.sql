-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2021 a las 16:34:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercioit2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` double NOT NULL,
  `Marca` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Presentacion` varchar(30) NOT NULL,
  `Stock` int(6) NOT NULL,
  `Imagen` varchar(50) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1 COMMENT '1 activo 0 inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `Precio`, `Marca`, `Categoria`, `Presentacion`, `Stock`, `Imagen`, `Estado`) VALUES
(5, 'Moto G', 489.99, 5, 2, '8GB', 750, 'P004.jpg', 1),
(10, 'producto BBB', 20, 13, 1, '20GB', 20, 'P005.jpg', 1),
(24, 'iPhone 2', 499, 1, 2, '16GB', 500, 'P001.jpg', 1),
(25, 'iPad', 600, 1, 3, '32GB', 300, 'P002.jpg', 1),
(26, 'Nexus', 300, 6, 2, '32GB', 300, 'P003.jpg', 1),
(28, 'Galaxy S7', 500, 2, 2, '64GB', 650, 'P004.jpg', 1),
(29, 'Moto G', 500, 5, 2, '8GB', 850, 'P005.jpg', 1),
(30, 'LG L40', 200, 4, 4, '24GB', 350, 'P007.jpg', 1),
(32, 'producto nuevo', 100, 9, 4, '24GB', 500, 'New Project (25).png', 1),
(33, 'pruebista', 100, 1, 1, '12', 100, 'Captura.JPG', 1),
(34, 'pruebita', 100, 1, 1, '24GB', 100, 'Captura.JPG', 1),
(35, 'pruebita', 100, 1, 1, '1', 100, 'Captura.JPG', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Marca` (`Marca`),
  ADD KEY `Rubro` (`Categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Marca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`Categoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
