-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2019 a las 00:53:51
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
  `idpaciente` int(11) NOT NULL,
  `citado` varchar(50) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `asunto_cita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'DF00000', 'DAVID', 'FLORES', 'MASCULINO', '1995-05-05', '123456789', '', '', '', '', 1),
(2, 'JF00001', 'JOSE DAVID', 'FLORES', 'MASCULINO', '1995-05-05', '', '', '', '', '', 1),
(3, 'JF00002', 'JOSE DANIEL', 'FLORES', 'MASCULINO', '1995-05-05', '123456786', '', '', '', '', 1),
(4, 'JF00003', 'JOSE HUGO', 'FLORES', 'MASCULINO', '1995-05-05', '', '', '', '', '', 1);

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
-- Indices de la tabla `tpaciente`
--
ALTER TABLE `tpaciente`
  ADD PRIMARY KEY (`idpaciente`);

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
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tresponsable`
--
ALTER TABLE `tresponsable`
  MODIFY `idresponsable` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `tresponsable`
--
ALTER TABLE `tresponsable`
  ADD CONSTRAINT `tresponsable_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
