CREATE DATABASE IF NOT EXISTS `sicmedic`;

USE `sicmedic`;

SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `tbitacora`;

CREATE TABLE `tbitacora` (
  `idbitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hora_accion` datetime NOT NULL,
  `accion_bitacora` varchar(200) NOT NULL,
  `modulo_bitacora` varchar(20) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idbitacora`),
  KEY `idusuario` (`idusuario`),
  CONSTRAINT `tbitacora_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tusuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbitacora` VALUES (1,"2020-01-17 13:52:10","Registro paciente con Expediente EG01","PACIENTE",1),
(2,"2020-01-17 13:53:29","Registro paciente con Expediente CF02","PACIENTE",1),
(3,"2020-01-17 13:55:15","Registro paciente con Expediente JF03","PACIENTE",1),
(4,"2020-01-17 13:58:19","Registro paciente con Expediente JC04","PACIENTE",1),
(5,"2020-01-17 14:00:10","Registro paciente con Expediente AC05","PACIENTE",1);


DROP TABLE IF EXISTS `tcita`;

CREATE TABLE `tcita` (
  `idcita` int(11) NOT NULL AUTO_INCREMENT,
  `idpaciente` int(11) DEFAULT NULL,
  `nombre_citado` varchar(50) NOT NULL,
  `telefono_citado` varchar(10) NOT NULL,
  `fecha_hora_cita` datetime NOT NULL,
  `estado_cita` int(11) NOT NULL,
  PRIMARY KEY (`idcita`),
  KEY `idpaciente` (`idpaciente`),
  CONSTRAINT `tcita_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tconsulta`;

CREATE TABLE `tconsulta` (
  `idconsulta` int(11) NOT NULL AUTO_INCREMENT,
  `idpaciente` int(11) NOT NULL,
  `fecha_hora_consulta` datetime NOT NULL,
  `razon_consulta` text NOT NULL,
  `antecedentes_consulta` text NOT NULL,
  `diagnostico_consutla` text NOT NULL,
  `observaciones_consulta` text NOT NULL,
  `ordenexamen_consulta` text NOT NULL,
  `recomendacion` text NOT NULL,
  PRIMARY KEY (`idconsulta`),
  KEY `idpaciente` (`idpaciente`),
  CONSTRAINT `tconsulta_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `texamen`;

CREATE TABLE `texamen` (
  `idexamen` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_imagen` varchar(100) NOT NULL,
  `idconsulta` int(11) NOT NULL,
  PRIMARY KEY (`idexamen`),
  KEY `idconsulta` (`idconsulta`),
  CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tinventario_medicamento`;

CREATE TABLE `tinventario_medicamento` (
  `idreferencia_medicamento` int(11) NOT NULL AUTO_INCREMENT,
  `idmedicamento` int(11) NOT NULL,
  `fecha_ingreso_medicamento` date NOT NULL,
  `fecha_vencim_medicamento` date NOT NULL,
  `cantidad_medicamento` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idreferencia_medicamento`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idmedicamento` (`idmedicamento`),
  CONSTRAINT `tinventario_medicamento_ibfk_1` FOREIGN KEY (`idmedicamento`) REFERENCES `tmedicamento` (`idmedicamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tmedicamento`;

CREATE TABLE `tmedicamento` (
  `idmedicamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_medicamento` varchar(50) NOT NULL,
  `presentacion_medicamento` varchar(50) NOT NULL,
  `via_admin_medicamento` varchar(50) NOT NULL,
  `concentracion_medicamento` varchar(50) NOT NULL,
  `stock_minimo_medicamento` int(11) NOT NULL,
  `unidad` varchar(3) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idmedicamento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tpaciente`;

CREATE TABLE `tpaciente` (
  `idpaciente` int(11) NOT NULL AUTO_INCREMENT,
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
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tpaciente` VALUES (9,"EG01","Eva de los Angeles","Guzman Ayala","FEMENINO","1970-05-20","","","7291-3748","7205-3822","colonia santa lucia casa#3 pasaje #2",1),
(10,"CF02","Crisanto","Flores Castillos","MASCULINO","1970-05-21","","","2393-4108","2393-4747","",1),
(11,"JF03","Jasmin Beatriz","Flores Guzman","FEMENINO","1990-05-25","09880080-8","jasminbea@gmail.com","7627-2782","7979-2792","",1),
(12,"JC04","Josue Daniel","Caceres Ayala","MASCULINO","1998-05-21","","danieljos@hotmail.com","9729-7279","9727-1799","colonia divina providencia pasaje#2 casa#3",1),
(13,"AC05","Andrea","Cordova Castillos","FEMENINO","1930-12-24","","","7299-2972","","colonia santa espiga de oro casa#3 pasaje#10",1);


DROP TABLE IF EXISTS `tproveedor`;

CREATE TABLE `tproveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estadop` int(11) NOT NULL,
  PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tproveedor` VALUES (1,"LABORATORIO LOPEZ","7666-4897","",0),
(2,"LABORATORIO GAMNA","4645-4645","",0),
(3,"BAYER","7979-1279","GERSON MIGUEL ANTONIO PALACIOS",0),
(4,"LACOSTE","1234-1231","DAVID FLORES",1);


DROP TABLE IF EXISTS `treceta`;

CREATE TABLE `treceta` (
  `idreceta` int(11) NOT NULL AUTO_INCREMENT,
  `idmedicamento` int(11) DEFAULT NULL,
  `nombre_medicamento` varchar(50) NOT NULL,
  `cantidad_entregada` int(11) NOT NULL,
  `cantidad_indicada` int(11) NOT NULL,
  `indicaciones` varchar(200) NOT NULL,
  `idconsulta` int(11) NOT NULL,
  PRIMARY KEY (`idreceta`),
  KEY `idconsulta` (`idconsulta`),
  KEY `idmedicamento` (`idmedicamento`),
  CONSTRAINT `treceta_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`),
  CONSTRAINT `treceta_ibfk_2` FOREIGN KEY (`idmedicamento`) REFERENCES `tinventario_medicamento` (`idreferencia_medicamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tresponsable`;

CREATE TABLE `tresponsable` (
  `idresponsable` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_responsable` varchar(40) NOT NULL,
  `apellido_responsable` varchar(40) NOT NULL,
  `relacion_responsable` varchar(20) NOT NULL,
  `dui_responsable` varchar(10) NOT NULL,
  `telefonoP_responsable` varchar(9) NOT NULL,
  `telefonoS_responsable` varchar(9) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  PRIMARY KEY (`idresponsable`),
  KEY `idpaciente` (`idpaciente`),
  CONSTRAINT `tresponsable_ibfk_1` FOREIGN KEY (`idpaciente`) REFERENCES `tpaciente` (`idpaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tresponsable` VALUES (1,"","","","","","",9),
(2,"","","","","","",10),
(3,"Eva de Los Angeles","Guzman Ayala","HIJA","","7929-2792","8929-7297",11),
(4,"Francisca","Caceres Ayala","MADRE","","8298-2989","9289-2982",12),
(5,"Crisantos","Flores Castillos","HIJO","00828010-8","7297-2972","7927-9279",13);


DROP TABLE IF EXISTS `tsignosvitales`;

CREATE TABLE `tsignosvitales` (
  `idsignovital` int(11) NOT NULL AUTO_INCREMENT,
  `presion` varchar(6) NOT NULL,
  `frecuencia` varchar(5) NOT NULL,
  `temperatura` varchar(4) NOT NULL,
  `peso` int(11) NOT NULL,
  `estatura` int(11) NOT NULL,
  `frecuenciares` int(11) NOT NULL,
  `idconsulta` int(11) NOT NULL,
  PRIMARY KEY (`idsignovital`),
  KEY `idconsulta` (`idconsulta`),
  CONSTRAINT `tsignosvitales_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `tusuario`;

CREATE TABLE `tusuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `contrasena` text NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `codigo_recuperacion` text NOT NULL,
  `estado` int(11) NOT NULL,
  `fechacreacion` date NOT NULL,
  `nombrep` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tusuario` VALUES (1,"ANALUISAVELASQ","TGRmT2E1Y0xWblV5TUgwOXpnZ2VDQT09","davidflores.guzman.dfg@gmail.com","admin","",1,"2019-11-29","DR.ANA LUISA VELAZQUEZ");


SET foreign_key_checks = 1;
