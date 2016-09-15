-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 05:40:24
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinemil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad`
--

CREATE TABLE `calidad` (
  `ID_CALIDAD` int(11) NOT NULL,
  `NOM_CALIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOM_CATEGORIA` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `NOM_CATEGORIA`) VALUES
(1, 'Acción'),
(2, 'Animación'),
(3, 'Documental'),
(4, 'Fantástico'),
(5, 'Infantil'),
(6, 'Musical'),
(7, 'Romance'),
(8, 'Zombies'),
(9, 'Terror'),
(10, 'Horror'),
(11, 'Suspenso'),
(12, 'Drama'),
(13, 'Deporte'),
(14, 'Comedia'),
(15, 'Ciencia Ficcion'),
(16, 'Aventura'),
(17, 'Anime'),
(18, '+18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlace`
--

CREATE TABLE `enlace` (
  `ID_ENLACE` int(11) NOT NULL,
  `TIPO_ENLACE` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `SERVIDOR` int(11) NOT NULL,
  `ENLACE` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `ID_FUENTE` int(11) NOT NULL,
  `NOM_FUENTE` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `ID_IDIOMA` int(11) NOT NULL,
  `NOM_IDIOMA` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `ID_PAIS` int(11) NOT NULL,
  `NOM_PAIS` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `ID` int(11) NOT NULL,
  `TITULO` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DIRECTOR` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `REPARTO` text COLLATE utf8_spanish_ci,
  `PRODUCTORA` int(11) NOT NULL,
  `SINOPSIS` text COLLATE utf8_spanish_ci NOT NULL,
  `TITULO_OFICIAL` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TITULO_LATINO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CATEGORIAS` int(11) NOT NULL,
  `PAIS` int(11) NOT NULL,
  `DURACION` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_ESTRENO` date NOT NULL,
  `IDIOMA` int(11) NOT NULL,
  `SUBTITULOS` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CALIDAD` int(11) DEFAULT NULL,
  `PESO` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `RESOLUCION` int(11) DEFAULT NULL,
  `TRAILER` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `PORTADA` int(100) NOT NULL,
  `CAPTURAS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CLASIFICACION` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALORACION` int(5) DEFAULT NULL,
  `ENLACES` int(11) NOT NULL,
  `SERVIDORES` int(11) NOT NULL,
  `FUENTE` int(11) NOT NULL,
  `USUARIOLOG` int(11) NOT NULL,
  `FECHALOG` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productora`
--

CREATE TABLE `productora` (
  `ID_PRODUCTORA` int(11) NOT NULL,
  `NOM_PRODUCTORA` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE `resolucion` (
  `ID_RESOLUCION` int(11) NOT NULL,
  `NOM_RESOLUCION` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servidor`
--

CREATE TABLE `servidor` (
  `ID_SERVIDOR` int(11) NOT NULL,
  `NOM_SERVIDOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NICK_USUARIO` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD PRIMARY KEY (`ID_CALIDAD`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `enlace`
--
ALTER TABLE `enlace`
  ADD PRIMARY KEY (`ID_ENLACE`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`ID_FUENTE`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`ID_IDIOMA`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCTORA` (`PRODUCTORA`,`CATEGORIAS`,`PAIS`,`IDIOMA`,`CALIDAD`,`RESOLUCION`,`USUARIOLOG`),
  ADD KEY `FK_CATEGORIA` (`CATEGORIAS`),
  ADD KEY `FK_PAIS` (`PAIS`),
  ADD KEY `FK_IDIOMA` (`IDIOMA`),
  ADD KEY `FK_CALIDAD` (`CALIDAD`),
  ADD KEY `FK_RESOLUCION` (`RESOLUCION`),
  ADD KEY `ENLACES` (`ENLACES`,`SERVIDORES`,`FUENTE`),
  ADD KEY `FK_SERVIDORES` (`SERVIDORES`),
  ADD KEY `FK_FUENTE` (`FUENTE`),
  ADD KEY `FK_USUARIO` (`USUARIOLOG`);

--
-- Indices de la tabla `productora`
--
ALTER TABLE `productora`
  ADD PRIMARY KEY (`ID_PRODUCTORA`);

--
-- Indices de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD PRIMARY KEY (`ID_RESOLUCION`);

--
-- Indices de la tabla `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`ID_SERVIDOR`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidad`
--
ALTER TABLE `calidad`
  MODIFY `ID_CALIDAD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `enlace`
--
ALTER TABLE `enlace`
  MODIFY `ID_ENLACE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `ID_IDIOMA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `ID_PAIS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  MODIFY `ID_RESOLUCION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servidor`
--
ALTER TABLE `servidor`
  MODIFY `ID_SERVIDOR` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `FK_CALIDAD` FOREIGN KEY (`CALIDAD`) REFERENCES `calidad` (`ID_CALIDAD`),
  ADD CONSTRAINT `FK_CATEGORIA` FOREIGN KEY (`CATEGORIAS`) REFERENCES `categoria` (`ID_CATEGORIA`),
  ADD CONSTRAINT `FK_ENLACES` FOREIGN KEY (`ENLACES`) REFERENCES `enlace` (`ID_ENLACE`),
  ADD CONSTRAINT `FK_FUENTE` FOREIGN KEY (`FUENTE`) REFERENCES `fuente` (`ID_FUENTE`),
  ADD CONSTRAINT `FK_IDIOMA` FOREIGN KEY (`IDIOMA`) REFERENCES `idioma` (`ID_IDIOMA`),
  ADD CONSTRAINT `FK_PAIS` FOREIGN KEY (`PAIS`) REFERENCES `pais` (`ID_PAIS`),
  ADD CONSTRAINT `FK_PRODUCTORA` FOREIGN KEY (`PRODUCTORA`) REFERENCES `productora` (`ID_PRODUCTORA`),
  ADD CONSTRAINT `FK_RESOLUCION` FOREIGN KEY (`RESOLUCION`) REFERENCES `resolucion` (`ID_RESOLUCION`),
  ADD CONSTRAINT `FK_SERVIDORES` FOREIGN KEY (`SERVIDORES`) REFERENCES `servidor` (`ID_SERVIDOR`),
  ADD CONSTRAINT `FK_USUARIO` FOREIGN KEY (`USUARIOLOG`) REFERENCES `usuario` (`ID_USUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
