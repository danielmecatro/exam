-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-01-2022 a las 22:59:40
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

DROP TABLE IF EXISTS `comida`;
CREATE TABLE IF NOT EXISTS `comida` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id`, `nombre`, `precio`) VALUES
(1, 'perro', 10),
(2, 'salchi', 15),
(3, 'hamburguesa', 15),
(4, 'pizza', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechahora` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cant` int(100) NOT NULL,
  `valor` int(100) NOT NULL,
  `direc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `hespera` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hpreparacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hreparto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hentrega` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `nombre`, `fechahora`, `comida`, `cant`, `valor`, `direc`, `ciudad`, `telefono`, `estado`, `hespera`, `hpreparacion`, `hreparto`, `hentrega`) VALUES
(1, 'pedro', '02/02/2020/20:30', 'perro ', 2, -8, 'sao', 'barranquilla', '337229', 'preparacion', '20:30', '2022-01-18 17:09:28', NULL, NULL),
(2, 'pedro', '02/02/2020/20:30', 'perro ', 2, 20, 'sao', 'barranquilla', '337229', 'reparto', '20:30', '2022-01-18 17:19:24', '2022-01-18 17:39:10', NULL),
(3, 'juan', '02/02/2020/20:30', 'perro ', 3, 30, 'sao', 'barranquilla', '33722922', 'reparto', '20:30', NULL, '2022-01-18 17:39:04', NULL),
(4, 'diego', '02/02/2020/20:30', 'pizza ', 2, 20, 'sao', 'barranquilla', '337229', 'reparto', '20:30', '2022-01-18 17:43:19', '2022-01-18 17:46:29', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
