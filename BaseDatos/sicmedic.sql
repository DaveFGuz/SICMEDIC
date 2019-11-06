-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2019 a las 01:38:30
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sicmedic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitacora`
--

CREATE TABLE `tbitacora` (
  `idbitacora` int(11) NOT NULL,
  `fecha_hora_accion` datetime NOT NULL,
  `accion_bitacora` int(11) NOT NULL,
  `modulo_bitacora` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcita`
--

CREATE TABLE `tcita` (
  `idcita` int(11) NOT NULL,
  `idpaciente` int(11) DEFAULT NULL,
  `nombre_citado` varchar(50) NOT NULL,
  `fecha_hora_cita` datetime NOT NULL,
  `estado_cita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tcita`
--

INSERT INTO `tcita` (`idcita`, `idpaciente`, `nombre_citado`, `fecha_hora_cita`, `estado_cita`) VALUES
(1, 2, '', '2019-11-07 07:00:00', 0),
(2, NULL, 'DAVID FLORES GUZMAN', '2020-11-13 07:50:00', 1),
(3, 1, '', '2019-11-04 08:26:00', 0),
(4, NULL, 'DAVID', '2020-11-04 08:26:00', 1),
(5, 1, '', '2019-11-20 08:31:00', 0),
(6, 1, '', '2019-11-19 08:50:00', 0),
(7, NULL, 'DAVID', '2020-11-19 08:50:00', 1),
(8, 1, '', '2019-11-07 00:12:00', 2),
(9, 1, '', '2019-11-06 10:30:00', 1),
(10, NULL, 'DIEGO OSCAR PALACIOS MARAVILLA', '2019-11-08 09:00:00', 1),
(11, 2, '', '2019-11-06 10:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tconsulta`
--

CREATE TABLE `tconsulta` (
  `idconsulta` int(11) NOT NULL,
  `fecha_hora_consulta` datetime NOT NULL,
  `razon_consulta` text NOT NULL,
  `antecedentes_consulta` text NOT NULL,
  `diagnostico_consutla` text NOT NULL,
  `observaciones_consulta` text NOT NULL,
  `recomendacion_consulta` text NOT NULL,
  `ordenexamen_consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texamen`
--

CREATE TABLE `texamen` (
  `idexamen` int(11) NOT NULL,
  `img_examen` text NOT NULL,
  `idconsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinventario_medicamento`
--

CREATE TABLE `tinventario_medicamento` (
  `idreferencia_medicamento` int(11) NOT NULL,
  `idmedicamento` int(11) NOT NULL,
  `fecha_ingreso_medicamento` date NOT NULL,
  `fecha_vencim_medicamento` int(11) NOT NULL,
  `cantidad_medicamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmedicamento`
--

CREATE TABLE `tmedicamento` (
  `idmedicamento` int(11) NOT NULL,
  `nombre_medicamento` varchar(50) NOT NULL,
  `presentacion_medicamento` varchar(50) NOT NULL,
  `via_admin_medicamento` varchar(50) NOT NULL,
  `concentracion_medicamento` varchar(50) NOT NULL,
  `stock_minimo_medicamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaciente`
--

CREATE TABLE `tpaciente` (
  `idpaciente` int(11) NOT NULL,
  `n_expediente` varchar(8) NOT NULL,
  `nombre_paciente` varchar(40) NOT NULL,
  `apellido_paciente` varchar(40) NOT NULL,
  `sexo_paciente` varchar(9) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dui_paciente` varchar(10) NOT NULL,
  `correo_paciente` varchar(50) NOT NULL,
  `telefonop_paciente` varchar(10) NOT NULL,
  `telefonos_paciente` varchar(10) NOT NULL,
  `direccion_paciente` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tpaciente`
--

INSERT INTO `tpaciente` (`idpaciente`, `n_expediente`, `nombre_paciente`, `apellido_paciente`, `sexo_paciente`, `fecha_nacimiento`, `dui_paciente`, `correo_paciente`, `telefonop_paciente`, `telefonos_paciente`, `direccion_paciente`, `estado`) VALUES
(1, 'DF00000', 'DANIEL JOSUE', 'FLORS CACERES', 'MASCULINO', '1995-09-16', '', 'daniel.flores.dfg@gmail.com', '7291-3748', '7205-3757', 'colonia santa lucia pasaje #3 casa #5', 1),
(2, 'YF00001', 'JASMIN BEATRIZ', 'FLORES GUZMÁN', 'MASCULINO', '1996-10-20', '09830238-2', '', '', '', '', 1),
(3, 'JF00002', 'JOSE ELIEZER', 'FLORES CACERES', 'MASCULINO', '1995-05-05', '08740343-7', 'jose999666@gmail.con', '3983-2898', '2323-8389', 'colonia divina providencia casa#2 pasaje#4', 1),
(4, 'CF00003', 'CRISANTOS', 'FLORES CASTILLOS', 'MASCULINO', '1960-11-02', '09830238-2', 'jose999666@gmail.con', '', '', '', 1),
(5, 'JV00004', 'JUAN CARLOS', 'VALLADARES CORNEJO', 'MASCULINO', '1990-05-12', '09291927-9', 'juan5566@gmail.com', '7676-2682', '7686-8268', 'colonia iva pasaje #5 casa#3', 1),
(6, 'EG00005', 'EVA DE LOS ANGELES', 'GUZMAN AYALA', 'FEMENINO', '1995-12-05', '08382739-7', '', '8626-1551', '7281-9721', 'colonia santa lucia casa#3 pasaje#3', 1),
(7, 'DB00006', 'DANIEL ERNESTO', 'BELTRAN BONILLA', 'MASCULINO', '1995-12-14', '', '', '', '', '', 1),
(8, 'HC00007', 'HERMINIA', 'CACERES GUZMAN', 'FEMENINO', '1985-11-09', '09880808-3', 'hermina1972@gmail.com', '7686-2612', '7668-7218', '', 1),
(9, 'dp00008', 'diego alejandro', 'palacios beltran', 'MASCULINO', '1995-11-03', '11234566-6', 'palacios@gmail.com', '6069-3049', '', 'cuabto calle oriente barrio san francisco', 1),
(10, 'cm00009', 'cristian emerson', 'marvailla palacios', 'MASCULINO', '2010-11-07', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treceta`
--

CREATE TABLE `treceta` (
  `idreceta` int(11) NOT NULL,
  `idmedicamento` int(11) NOT NULL,
  `nombre_medicamento` varchar(50) NOT NULL,
  `cantidad_entregada` int(11) NOT NULL,
  `cantidad_indicada` int(11) NOT NULL,
  `indicaciones` varchar(200) NOT NULL,
  `idconsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tresponsable`
--

CREATE TABLE `tresponsable` (
  `idresponsable` int(11) NOT NULL,
  `nombre_responsable` varchar(40) NOT NULL,
  `apellido_responsable` varchar(40) NOT NULL,
  `relacion_responsable` varchar(20) NOT NULL,
  `dui_responsable` varchar(10) NOT NULL,
  `telefonoP_responsable` varchar(9) NOT NULL,
  `telefonoS_responsable` varchar(9) NOT NULL,
  `idpaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tresponsable`
--

INSERT INTO `tresponsable` (`idresponsable`, `nombre_responsable`, `apellido_responsable`, `relacion_responsable`, `dui_responsable`, `telefonoP_responsable`, `telefonoS_responsable`, `idpaciente`) VALUES
(1, 'ANDREA', 'FLORES CORDOVA', 'MADRE', '12345677-8', '7291-3748', '7291-3743', 1),
(2, 'CRISANTOS', 'FLORES CACERES', 'PADRE', '', '2829-8983', '0383-9839', 3),
(3, 'ANDREA', 'FLORES CORDOVA', 'MADRE', '12345677-8', '7291-3748', '7291-3743', 4),
(4, 'ANA LUISA', 'VALLLADARES VELASQUEZ', 'MADRE', '79179791-7', '', '', 5),
(5, 'CONCEPCION DE LOS ANGELES', 'AYALA', 'PADRE', '08392797-3', '7328-6283', '7382-6387', 8),
(6, 'david enrique', 'maravilla palacios', 'PADRE', '12044343-5', '', '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `codigo_recuperacion` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD PRIMARY KEY (`idbitacora`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `tcita`
--
ALTER TABLE `tcita`
  ADD PRIMARY KEY (`idcita`),
  ADD KEY `idpaciente` (`idpaciente`);

--
-- Indices de la tabla `tconsulta`
--
ALTER TABLE `tconsulta`
  ADD PRIMARY KEY (`idconsulta`);

--
-- Indices de la tabla `texamen`
--
ALTER TABLE `texamen`
  ADD PRIMARY KEY (`idexamen`),
  ADD KEY `idconsulta` (`idconsulta`);

--
-- Indices de la tabla `tinventario_medicamento`
--
ALTER TABLE `tinventario_medicamento`
  ADD PRIMARY KEY (`idreferencia_medicamento`),
  ADD KEY `idmedicamento` (`idmedicamento`);

--
-- Indices de la tabla `tmedicamento`
--
ALTER TABLE `tmedicamento`
  ADD PRIMARY KEY (`idmedicamento`);

--
-- Indices de la tabla `tpaciente`
--
ALTER TABLE `tpaciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Indices de la tabla `treceta`
--
ALTER TABLE `treceta`
  ADD PRIMARY KEY (`idreceta`),
  ADD KEY `id_medicamento` (`idmedicamento`),
  ADD KEY `idconsulta` (`idconsulta`);

--
-- Indices de la tabla `tresponsable`
--
ALTER TABLE `tresponsable`
  ADD PRIMARY KEY (`idresponsable`),
  ADD KEY `idpaciente` (`idpaciente`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tcita`
--
ALTER TABLE `tcita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tconsulta`
--
ALTER TABLE `tconsulta`
  MODIFY `idconsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `texamen`
--
ALTER TABLE `texamen`
  MODIFY `idexamen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tpaciente`
--
ALTER TABLE `tpaciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tresponsable`
--
ALTER TABLE `tresponsable`
  MODIFY `idresponsable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD CONSTRAINT `tbitacora_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tusuario` (`idusuario`);

--
-- Filtros para la tabla `tcita`
--
ALTER TABLE `tcita`
  ADD CONSTRAINT `tcita_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`);

--
-- Filtros para la tabla `texamen`
--
ALTER TABLE `texamen`
  ADD CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`);

--
-- Filtros para la tabla `treceta`
--
ALTER TABLE `treceta`
  ADD CONSTRAINT `treceta_ibfk_1` FOREIGN KEY (`idmedicamento`) REFERENCES `tmedicamento` (`idmedicamento`),
  ADD CONSTRAINT `treceta_ibfk_2` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`);

--
-- Filtros para la tabla `tresponsable`
--
ALTER TABLE `tresponsable`
  ADD CONSTRAINT `tresponsable_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
