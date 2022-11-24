-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 18:52:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bunglebuild`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `codComunidad` int(4) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`codComunidad`, `nombre`) VALUES
(1, 'Andalucía'),
(2, 'Aragón'),
(3, 'Asturias (Principado de)'),
(4, 'Balears (IIles)'),
(5, 'Canarias'),
(6, 'Cantabria'),
(7, 'Castilla-La Mancha'),
(8, 'Castilla y León'),
(9, 'Cataluña'),
(10, 'Comunidad Valenciana'),
(11, 'Extremadura'),
(12, 'Galicia'),
(13, 'Madrid (Comunidad de)'),
(14, 'Murcia (Región de)'),
(15, 'Navarra (Comunidad Foral de)'),
(16, 'País Vasco'),
(17, 'Rioja (La)'),
(18, 'Ceuta'),
(19, 'Melilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codPoblacion` int(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `codComunidad` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codPoblacion`, `nombre`, `codComunidad`) VALUES
(1, 'Alava', 16),
(2, 'Albacete', 7),
(3, 'Alicante', 10),
(4, 'Almería', 1),
(5, 'Avila', 8),
(6, 'Badajoz', 11),
(7, 'Balears (Illes)', 4),
(8, 'Barcelona', 9),
(9, 'Burgos', 8),
(10, 'Cáceres', 11),
(11, 'Cádiz', 1),
(12, 'Castellón', 10),
(13, 'Ciudad Real', 7),
(14, 'Córdoba', 1),
(15, 'Coruña (A)', 12),
(16, 'Cuenca', 7),
(17, 'Girona', 9),
(18, 'Granada', 1),
(19, 'Guadalajara', 7),
(20, 'Guipzcoa', 16),
(21, 'Huelva', 1),
(22, 'Huesca', 2),
(23, 'Jaén', 1),
(24, 'León', 8),
(25, 'Lleida', 9),
(26, 'Rioja (La)', 17),
(27, 'Lugo', 12),
(28, 'Madrid', 13),
(29, 'Málaga', 1),
(30, 'Murcia', 14),
(31, 'Navarra', 15),
(32, 'Ourense', 12),
(33, 'Asturias', 3),
(34, 'Palencia', 8),
(35, 'Palmas (Las)', 5),
(36, 'Pontevedra', 12),
(37, 'Salamanca', 8),
(38, 'Santa Cruz de Tenerife', 5),
(39, 'Cantabria', 6),
(40, 'Segovia', 8),
(41, 'Sevilla', 1),
(42, 'Soria', 8),
(43, 'Tarragona', 9),
(44, 'Teruel', 2),
(45, 'Toledo', 7),
(46, 'Valencia', 10),
(47, 'Valladolid', 8),
(48, 'Vizcaya', 16),
(49, 'Zamora', 8),
(50, 'Zaragoza', 2),
(51, 'Ceuta', 18),
(52, 'Melilla', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(5) NOT NULL,
  `nif_cif` varchar(9) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `poblacion` varchar(30) DEFAULT NULL,
  `codigo_postal` int(5) DEFAULT NULL,
  `provincia` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `operario_encargado` varchar(30) DEFAULT NULL,
  `fecha_realizacion` date DEFAULT NULL,
  `anotaciones_ant` text DEFAULT NULL,
  `anotaciones_pos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nif_cif`, `nombre`, `apellidos`, `telefono`, `descripcion`, `correo`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado`, `fecha_creacion`, `operario_encargado`, `fecha_realizacion`, `anotaciones_ant`, `anotaciones_pos`) VALUES
(18, '48937837R', 'Víctor', 'Martínez Domínguez', '657121379', 'Construir gallinero', 'victor_mar_dom@hotmail.es', 'Calleja 24', 'Valverde del Camino', 21600, '21', 'P', '2022-11-24', '56723465J', '2022-11-25', 'Derribar caseta', 'Escombros sacados'),
(22, '48937837R', 'Víctor', 'Domínguez', '657121379', 'eeffe', 'victor_mar_dom@hotmail.es', 'Calleja 24', 'Valverde del Camino', 21600, '1', 'B', '2022-11-24', '45678912L', '2022-11-24', 'effff', 'fefwfe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nif` varchar(9) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `es_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nif`, `nombre`, `clave`, `correo`, `telefono`, `es_admin`) VALUES
('45678912L', 'Ghenciu, Nicolae Adrián', '1111', 'nicolae@gmail.com', '654123789', 0),
('46798712E', 'Domínguez Bermúdez, Esteban', '1111', 'esteban@gmail.com', '642345123', 0),
('48923735R', 'Hinestrosa González, Rafael', '1111', 'rafael@gmail.com', '657121456', 0),
('48937834B', 'Martínez Domínguez, Víctor', '1111', 'victor@gmail.com', '657121378', 1),
('56723465J', 'López Gómez, Adrián', '1111', 'adrian@gmail.com', '654789332', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`codComunidad`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codPoblacion`),
  ADD KEY `comAutonoma_fk` (`codComunidad`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operarioEncargado` (`operario_encargado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nif`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `comAutonoma_fk` FOREIGN KEY (`codComunidad`) REFERENCES `comunidades` (`codComunidad`);

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`operario_encargado`) REFERENCES `usuarios` (`nif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
