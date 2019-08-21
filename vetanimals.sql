-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2019 a las 17:37:09
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vetanimals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `nombre_paciente` varchar(30) NOT NULL,
  `fecha_actual` date NOT NULL,
  `fecha_cita` date NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `nombre_paciente`, `fecha_actual`, `fecha_cita`, `motivo`) VALUES
(1, 'asdkjhas', '2019-08-20', '2019-08-22', ''),
(2, 'asdkjhas', '2019-08-20', '2019-08-22', ''),
(3, 'asdkjhas', '2019-08-20', '2019-08-22', '        bnvjhvuhjvhjv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_consulta` date NOT NULL,
  `diagnostico` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `motivo` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(70) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(30) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `raza` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `nombre_alimento` varchar(30) DEFAULT NULL,
  `tipo_alimento` varchar(30) DEFAULT NULL,
  `cantidad_alimento` double DEFAULT NULL,
  `nombre_vacuna` varchar(100) DEFAULT NULL,
  `fecha_aplicacionv` date DEFAULT NULL,
  `producto` varchar(50) DEFAULT NULL,
  `fecha_aplicaciond` date DEFAULT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `apellido` varchar(70) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nombre_paciente`, `edad`, `sexo`, `raza`, `color`, `peso`, `nombre_alimento`, `tipo_alimento`, `cantidad_alimento`, `nombre_vacuna`, `fecha_aplicacionv`, `producto`, `fecha_aplicaciond`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(17, 'asdkjhas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'asdkjhas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'asdkjhas', 2, 'Macho', 'hgcfyg', 'kjhiug', 5, 'jghfuy', 'gfuyf', 2, 'jghvihg', '2019-08-29', 'jhvuvg', '2019-08-07', 'khg', 'iuygiyg', 'hguiyg', 834153),
(20, 'asdkjhas', 2, 'Macho', 'hgcfyg', 'kjhiug', 5, 'jghfuy', 'gfuyf', 2, 'jghvihg', '2019-08-29', 'jhvuvg', '2019-08-07', 'khg', 'iuygiyg', 'hguiyg', 834153);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_paciente`
--

CREATE TABLE `servicio_paciente` (
  `id_serviciopaciente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_servicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencias`
--

CREATE TABLE `urgencias` (
  `id_urgencias` int(11) NOT NULL,
  `nombre_paciente` varchar(30) NOT NULL,
  `causa` varchar(300) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `urgencias`
--

INSERT INTO `urgencias` (`id_urgencias`, `nombre_paciente`, `causa`, `fecha_ingreso`) VALUES
(1, 'asdkjhas', '				jkbdakjbasjkdas', '2019-08-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicio_paciente`
--
ALTER TABLE `servicio_paciente`
  ADD PRIMARY KEY (`id_serviciopaciente`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `urgencias`
--
ALTER TABLE `urgencias`
  ADD PRIMARY KEY (`id_urgencias`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio_paciente`
--
ALTER TABLE `servicio_paciente`
  MODIFY `id_serviciopaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `urgencias`
--
ALTER TABLE `urgencias`
  MODIFY `id_urgencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `ventas` (`id_producto`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicio_paciente` (`id_servicio`);

--
-- Filtros para la tabla `servicio_paciente`
--
ALTER TABLE `servicio_paciente`
  ADD CONSTRAINT `servicio_paciente_ibfk_1` FOREIGN KEY (`id_serviciopaciente`) REFERENCES `paciente` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
