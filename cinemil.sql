-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2016 a las 22:54:18
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.34

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
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `ID` int(11) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `USER` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`ID`, `IP`, `USER`, `FECHA`) VALUES
(1, '::1', 1, '2016-09-15 20:40:09'),
(2, '::1', 1, '2016-09-15 20:40:13'),
(3, '::1', 1, '2016-09-15 20:40:20'),
(4, '::1', 1, '2016-09-15 20:40:29'),
(5, '::1', 1, '2016-09-15 20:40:38'),
(6, '::1', 1, '2016-09-15 20:40:46'),
(7, '::1', 1, '2016-09-15 20:42:04'),
(8, '::1', 1, '2016-09-15 20:42:05'),
(9, '::1', 1, '2016-09-15 20:42:18'),
(10, '::1', 1, '2016-09-15 20:42:40'),
(11, '::1', 1, '2016-09-15 20:44:34'),
(12, '::1', 1, '2016-09-15 20:45:04'),
(13, '::1', 1, '2016-09-15 20:45:30'),
(14, '::1', 1, '2016-09-15 20:46:26'),
(15, '::1', 1, '2016-09-15 20:47:09'),
(16, '::1', 1, '2016-09-15 20:47:30'),
(17, '::1', 1, '2016-09-15 20:47:31'),
(18, '::1', 1, '2016-09-15 20:47:33'),
(19, '::1', 1, '2016-09-15 20:52:26'),
(20, '::1', 1, '2016-09-15 20:52:27'),
(21, '::1', 1, '2016-09-15 20:52:27'),
(22, '::1', 1, '2016-09-15 20:52:27'),
(23, '::1', 1, '2016-09-15 20:52:27'),
(24, '::1', 1, '2016-09-15 20:52:28'),
(25, '::1', 1, '2016-09-15 20:52:28'),
(26, '::1', 1, '2016-09-15 20:52:28'),
(27, '::1', 1, '2016-09-15 20:52:28'),
(28, '::1', 1, '2016-09-15 20:52:28'),
(29, '::1', 1, '2016-09-15 20:52:29'),
(30, '::1', 1, '2016-09-15 20:52:29'),
(31, '::1', 1, '2016-09-15 20:53:32');

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` bigint(255) NOT NULL,
  `USER` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `S_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GENERO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL,
  `IMAGEN` text COLLATE utf8_unicode_ci,
  `KEYPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NEWPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ULTIMA_CONEXION` int(32) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USER`, `PASS`, `EMAIL`, `NOMBRES`, `P_APELLIDO`, `S_APELLIDO`, `GENERO`, `FECHA_REGISTRO`, `IMAGEN`, `KEYPASS`, `NEWPASS`, `ULTIMA_CONEXION`) VALUES
(1, 'ironman', 'de9fd5a771a37d06cbf841051c9c8aff', 'milton.otavo@gmail.com', 'MILTON', 'OTAVO', 'VARON', 'M', '2016-07-03', '20401-3254avatar.jpg', '573e5feb61b20121114c322b050f0dfd', '9699F73A', 0);

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
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER` (`USER`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
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
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `FK_SERVIDORES` FOREIGN KEY (`SERVIDORES`) REFERENCES `servidor` (`ID_SERVIDOR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
