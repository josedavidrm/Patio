-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2025 a las 20:56:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `el_patio_margarita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombredelusuario` varchar(255) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nota` varchar(1000) NOT NULL,
  `fechanota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombredelusuario`, `usuario`, `email`, `nota`, `fechanota`) VALUES
(11, 'Jose david rodriguez', 'josed223', 'josedavidrm761@gmail.com', 'exelente', '2025-11-22 20:20:43'),
(15, 'miguel S', 'mash', 'massua@gmail.com', '.....', '2025-11-22 20:32:13'),
(21, 'carlos', 'carlosjj', 'carlos@gmail.com', '.......', '2025-11-22 20:44:48'),
(22, 'javier', 'javier23', 'javier@gmail.com', '......', '2025-11-22 20:45:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
