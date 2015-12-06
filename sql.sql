-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2015 a las 18:22:07
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `movil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientation`
--

CREATE TABLE IF NOT EXISTS `orientation` (
  `idorientation` int(11) NOT NULL,
  `landscape` int(255) NOT NULL,
  `portrait` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orientation`
--

INSERT INTO `orientation` (`idorientation`, `landscape`, `portrait`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `swipe`
--

CREATE TABLE IF NOT EXISTS `swipe` (
  `idSwipe` int(11) NOT NULL,
  `Swipe1` int(255) NOT NULL,
  `Swipe2` int(255) NOT NULL,
  `Swipe3` int(255) NOT NULL,
  `Swipe4` int(255) NOT NULL,
  `Swipe5` int(255) NOT NULL,
  `multiswipe` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `swipe`
--

INSERT INTO `swipe` (`idSwipe`, `Swipe1`, `Swipe2`, `Swipe3`, `Swipe4`, `Swipe5`, `multiswipe`) VALUES
(1, 1, 4, 6, 6, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tap`
--

CREATE TABLE IF NOT EXISTS `tap` (
  `idTap` int(11) NOT NULL,
  `CantTap` int(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tap`
--

INSERT INTO `tap` (`idTap`, `CantTap`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `touch`
--

CREATE TABLE IF NOT EXISTS `touch` (
  `idTouch` int(11) NOT NULL,
  `Touch1` int(225) NOT NULL,
  `Touch2` int(225) NOT NULL,
  `Touch3` int(225) NOT NULL,
  `Touch4` int(225) NOT NULL,
  `Touch5` int(225) NOT NULL,
  `Touch6` int(225) NOT NULL,
  `Touch7` int(225) NOT NULL,
  `Touch8` int(225) NOT NULL,
  `Touch9` int(225) NOT NULL,
  `Touch10` int(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `touch`
--

INSERT INTO `touch` (`idTouch`, `Touch1`, `Touch2`, `Touch3`, `Touch4`, `Touch5`, `Touch6`, `Touch7`, `Touch8`, `Touch9`, `Touch10`) VALUES
(1, 5, 6, 4, 2, 5, 3, 1, 7, 2, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `orientation`
--
ALTER TABLE `orientation`
  ADD PRIMARY KEY (`idorientation`);

--
-- Indices de la tabla `swipe`
--
ALTER TABLE `swipe`
  ADD PRIMARY KEY (`idSwipe`);

--
-- Indices de la tabla `tap`
--
ALTER TABLE `tap`
  ADD PRIMARY KEY (`idTap`);

--
-- Indices de la tabla `touch`
--
ALTER TABLE `touch`
  ADD PRIMARY KEY (`idTouch`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orientation`
--
ALTER TABLE `orientation`
  MODIFY `idorientation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `swipe`
--
ALTER TABLE `swipe`
  MODIFY `idSwipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tap`
--
ALTER TABLE `tap`
  MODIFY `idTap` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `touch`
--
ALTER TABLE `touch`
  MODIFY `idTouch` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
