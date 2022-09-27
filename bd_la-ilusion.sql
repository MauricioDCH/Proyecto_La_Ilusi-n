-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 22:18:41
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_la-ilusion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `idproducto` int(11) NOT NULL,
  `id_referencia` int(40) NOT NULL,
  `tipo_producto` varchar(45) NOT NULL,
  `nombre_prducto` varchar(45) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `largo_p` int(11) NOT NULL,
  `ancho_p` int(11) NOT NULL,
  `alto_p` int(11) NOT NULL,
  `color_p` varchar(45) NOT NULL,
  `peso_p` int(11) NOT NULL,
  `descripcion_p` varchar(100) NOT NULL,
  `disponibilidad_p` int(50) NOT NULL,
  `imagen_p` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`idproducto`, `id_referencia`, `tipo_producto`, `nombre_prducto`, `precio_producto`, `largo_p`, `ancho_p`, `alto_p`, `color_p`, `peso_p`, `descripcion_p`, `disponibilidad_p`, `imagen_p`) VALUES
(1, 0, '$tipo_p', '$nombre_p', 0, 0, 0, 0, '$color_p', 0, '$descripcion_p', 0, ''),
(2, 1230, 'Pintura', 'Pintura (pintuco)', 120, 50, 50, 60, 'Blanco', 20, 'Buen producto', 0, ''),
(3, 1231, 'Pintura', 'Pintura (pintuco)', 120, 50, 50, 60, 'Negro', 20, 'Buen producto', 10, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_transportadores`
--

CREATE TABLE `tbl_transportadores` (
  `id_transportador` int(11) NOT NULL,
  `nombre_tra` varchar(40) NOT NULL,
  `apellido_tra` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `tipo_vehiculo` varchar(40) NOT NULL,
  `color_vehiculo` varchar(30) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `tbl_transportadores`
--
ALTER TABLE `tbl_transportadores`
  ADD PRIMARY KEY (`id_transportador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_transportadores`
--
ALTER TABLE `tbl_transportadores`
  MODIFY `id_transportador` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
