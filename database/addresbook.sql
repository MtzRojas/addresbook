-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 05:33:12
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `addresbook`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresbook`
--

CREATE TABLE `addresbook` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `addresbook`
--

INSERT INTO `addresbook` (`id`, `name`, `email`, `address`, `phone`) VALUES
(1, '1', 'test', 'test', 111111111),
(2, 'Juan Manuel Martinez Rojas', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(3, '3', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(4, '4', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(5, '5', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(6, '6', 'kranajan@gmail.com', 'Victor Rosales #603', 2147483647),
(7, '7', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(8, '8 ', 'kranajan@hotmail.com', 'Victor Rosales #603', 2147483647),
(9, '9', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(10, '10', 'lic.e.manuel.martinez@gmail.com', 'Victor Rosales #603', 2147483647),
(11, '11', 'sdfasdf@asdf.com', 'Victor Rosales #603', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresbook`
--
ALTER TABLE `addresbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresbook`
--
ALTER TABLE `addresbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
