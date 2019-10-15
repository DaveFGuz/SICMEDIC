-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2019 at 01:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicmedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbitacora`
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
-- Table structure for table `tcita`
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
-- Table structure for table `tconsulta`
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
-- Table structure for table `texamen`
--

CREATE TABLE `texamen` (
  `idexamen` int(11) NOT NULL,
  `img_examen` text NOT NULL,
  `idconsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpaciente`
--

CREATE TABLE `tpaciente` (
  `idpaciente` int(11) NOT NULL,
  `nombre_paciente` varchar(40) NOT NULL,
  `apellido_paciente` varchar(40) NOT NULL,
  `sexo_paciente` varchar(9) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dui_paciente` varchar(10) NOT NULL,
  `correo_paciente` varchar(50) NOT NULL,
  `telefonop_paciente` varchar(10) NOT NULL,
  `telefonos_paciente` varchar(10) NOT NULL,
  `direccion_paciente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpaciente`
--

INSERT INTO `tpaciente` (`idpaciente`, `nombre_paciente`, `apellido_paciente`, `sexo_paciente`, `fecha_nacimiento`, `dui_paciente`, `correo_paciente`, `telefonop_paciente`, `telefonos_paciente`, `direccion_paciente`) VALUES
(1, 'David', 'Flores', 'Masculino', '2019-12-12', '', '0', '', '', ''),
(2, 'david', 'flores', 'Masculino', '2019-10-11', '', '0', '', '', ''),
(3, 'david', 'flores', 'Masculino', '2019-10-11', '', '0', '', '', ''),
(4, 'david', 'flores', 'Masculino', '2019-10-11', '', '0', '', '', ''),
(5, 'david', 'flores', 'Masculino', '2019-10-11', '', '0', '', '', ''),
(6, 'david', 'flores', 'Masculino', '2019-10-10', '', '0', '', '', ''),
(7, 'eva', 'flores', 'Masculino', '2019-10-10', '', '0', '', '', ''),
(8, 'daniela', 'flores', 'Masculino', '2019-10-10', '', '0', '', '', ''),
(9, 'daniela', 'flores', 'Masculino', '2019-10-10', '', '0', '', '', ''),
(10, 'daviso', 'flores', 'Masculino', '2019-10-10', '', '0', '', '', ''),
(11, 'david', 'flores', 'Masculino', '2019-10-11', '', '0', '', '', ''),
(12, 'dasdas', 'dada', 'Masculino', '2019-10-24', '', '0', '', '', ''),
(13, 'dasdas', 'dada', 'Masculino', '2019-10-24', '', '0', '', '', ''),
(14, 'JOSE DANIEL', 'dada', 'Masculino', '2019-10-24', '', '0', '', '', ''),
(15, 'David', 'Flores Guzman', 'Masculino', '1995-05-05', '12345-2', 'davi@gmail.com', '12341234', '12341234', 'colonia santa lucia'),
(16, 'David', 'Flores Guzman', 'M', '1995-05-05', '12345-2', 'davi@gmail.com', '12341234', '12341234', 'colonia santa lucia'),
(17, 'David', 'Flores', 'F', '1995-05-05', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tresponsable`
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
-- Table structure for table `tusuario`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD PRIMARY KEY (`idbitacora`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `tcita`
--
ALTER TABLE `tcita`
  ADD KEY `idpaciente` (`idpaciente`);

--
-- Indexes for table `tconsulta`
--
ALTER TABLE `tconsulta`
  ADD PRIMARY KEY (`idconsulta`);

--
-- Indexes for table `texamen`
--
ALTER TABLE `texamen`
  ADD PRIMARY KEY (`idexamen`),
  ADD KEY `idconsulta` (`idconsulta`);

--
-- Indexes for table `tpaciente`
--
ALTER TABLE `tpaciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Indexes for table `tresponsable`
--
ALTER TABLE `tresponsable`
  ADD PRIMARY KEY (`idresponsable`),
  ADD KEY `idpaciente` (`idpaciente`);

--
-- Indexes for table `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbitacora`
--
ALTER TABLE `tbitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tconsulta`
--
ALTER TABLE `tconsulta`
  MODIFY `idconsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `texamen`
--
ALTER TABLE `texamen`
  MODIFY `idexamen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpaciente`
--
ALTER TABLE `tpaciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tresponsable`
--
ALTER TABLE `tresponsable`
  MODIFY `idresponsable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD CONSTRAINT `tbitacora_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tusuario` (`idusuario`);

--
-- Constraints for table `tcita`
--
ALTER TABLE `tcita`
  ADD CONSTRAINT `tcita_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`);

--
-- Constraints for table `texamen`
--
ALTER TABLE `texamen`
  ADD CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`);

--
-- Constraints for table `tresponsable`
--
ALTER TABLE `tresponsable`
  ADD CONSTRAINT `tresponsable_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
