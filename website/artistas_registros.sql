-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 03:01:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_registros`
--

CREATE TABLE `artistas_registros` (
  `id_usuario` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `residencia` varchar(100) NOT NULL,
  `provincia_origen` varchar(100) NOT NULL,
  `disciplina` varchar(100) NOT NULL,
  `exposiciones` varchar(1) NOT NULL,
  `lugar_exposiciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas_registros`
--

INSERT INTO `artistas_registros` (`id_usuario`, `nombre`, `apellido`, `email`, `residencia`, `provincia_origen`, `disciplina`, `exposiciones`, `lugar_exposiciones`) VALUES
(2, 'Pedro', 'Maya', 'petro@info.com', 'cat', 'bsas', 'Realidad virtual', '0', 'non_expo'),
(3, 'Pedro', 'Maya', 'petro@info.com', 'cat', 'bsas', 'Realidad virtual', '0', 'non_expo'),
(4, 'Pedro', 'Maya', 'petro@info.com', 'cat', 'bsas', 'Realidad virtual', '0', 'non_expo'),
(10, 'Rosirta', 'Pee', 'ee@rosita.com', 'chu', 'bsas', 'Video arte', '0', 'todas_expo'),
(11, 'Rosirta', 'Pee', 'ee@rosita.com', 'chu', 'bsas', 'Video arte', '0', 'todas_expo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas_registros`
--
ALTER TABLE `artistas_registros`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas_registros`
--
ALTER TABLE `artistas_registros`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
