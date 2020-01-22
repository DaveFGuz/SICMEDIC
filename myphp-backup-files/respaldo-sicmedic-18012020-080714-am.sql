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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbitacora` VALUES (1,"2020-01-17 13:52:10","Registro paciente con Expediente EG01","PACIENTE",1),
(2,"2020-01-17 13:53:29","Registro paciente con Expediente CF02","PACIENTE",1),
(3,"2020-01-17 13:55:15","Registro paciente con Expediente JF03","PACIENTE",1),
(4,"2020-01-17 13:58:19","Registro paciente con Expediente JC04","PACIENTE",1),
(5,"2020-01-17 14:00:10","Registro paciente con Expediente AC05","PACIENTE",1),
(6,"2020-01-17 14:08:25","Registro nueva cita para paciente Eva de los Angeles Guzman Ayala","CITA",1),
(7,"2020-01-17 14:09:35","Registro nueva cita para paciente Crisanto Flores Castillos","CITA",1),
(8,"2020-01-17 15:44:03","Inicio de sesión","LOGIN",1),
(9,"2020-01-17 17:23:55","Registro nueva cita para paciente Josue Daniel Caceres Ayala","CITA",1),
(10,"2020-01-17 17:32:20","Registro nueva cita para paciente Eva de los Angeles Guzman Ayala","CITA",1),
(11,"2020-01-17 17:32:20","Registro nueva cita para paciente Eva de los Angeles Guzman Ayala","CITA",1),
(12,"2020-01-17 17:35:48","Registro nueva cita para paciente Crisanto Flores Castillos","CITA",1),
(13,"2020-01-18 07:40:44","Inicio de sesión","LOGIN",1),
(14,"2020-01-18 07:42:00","Cierre de sesión","LOGIN",1),
(15,"2020-01-18 07:42:52","Inicio de sesión","LOGIN",14),
(16,"2020-01-18 07:43:00","Cierre de sesión","LOGIN",14),
(17,"2020-01-18 07:43:19","Inicio de sesión","LOGIN",1),
(18,"2020-01-18 07:46:36","Inicio de sesión","LOGIN",1),
(19,"2020-01-18 07:57:32","Registro nueva cita para paciente Eva de los Angeles Guzman Ayala","CITA",1),
(20,"2020-01-18 08:04:31","Inicio de sesión","LOGIN",1),
(21,"2020-01-18 08:05:54","Da de baja  al paciente  Andrea Cordova Castillos","PACIENTE",1),
(22,"2020-01-18 08:06:01","Dio de alta al paciente con nombre Andrea Cordova Castillos","PACIENTE",1);


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tcita` VALUES (1,9,"","","2020-01-18 10:00:00",0),
(2,10,"","","2020-01-19 13:00:00",0),
(3,12,"","","2020-01-17 12:00:00",0),
(4,9,"","","2020-01-17 12:00:00",0),
(5,9,"","","2020-01-17 12:00:00",1),
(6,10,"","","2020-01-17 12:00:00",1),
(7,9,"","","2020-01-18 12:00:00",3);


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tconsulta` VALUES (1,9,"2020-01-17 15:50:48","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","-EXAMEN DE SANGRE\r\n-EXAMEN DE CREATININA\r\n-EXAMEN DE ORINA","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original"),
(2,9,"2020-01-17 15:50:49","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","-EXAMEN DE SANGRE\r\n-EXAMEN DE CREATININA\r\n-EXAMEN DE ORINA","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original"),
(3,9,"2020-01-17 15:57:25","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original","",""),
(4,9,"2020-01-17 16:25:03","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,","Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona,"),
(5,9,"2020-01-17 16:28:07","","","","","",""),
(6,9,"2020-01-17 16:31:39","","","","","",""),
(7,13,"2020-01-17 16:33:31","","","","","",""),
(8,12,"2020-01-17 17:24:24","","","","","",""),
(9,12,"2020-01-17 17:25:06","","","","","",""),
(10,12,"2020-01-17 17:26:35","El paciente presenta dolor de cabeza y vomito","el paciente tiene antecedente de hipertension","","","",""),
(11,12,"2020-01-17 17:26:47","El paciente presenta dolor de cabeza y vomito","el paciente tiene antecedente de hipertension","","","",""),
(12,12,"2020-01-17 17:28:11","","","","","",""),
(13,12,"2020-01-17 17:29:06","","","","","",""),
(14,12,"2020-01-17 17:29:24","","","","","",""),
(15,12,"2020-01-17 17:30:14","","","","","",""),
(16,10,"2020-01-17 17:36:13","","","","","","");


DROP TABLE IF EXISTS `texamen`;

CREATE TABLE `texamen` (
  `idexamen` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_imagen` varchar(100) NOT NULL,
  `idconsulta` int(11) NOT NULL,
  PRIMARY KEY (`idexamen`),
  KEY `idconsulta` (`idconsulta`),
  CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

INSERT INTO `texamen` VALUES (1,"expediente/EG01/",1),
(2,"expediente/EG01/",1),
(3,"expediente/EG01/",2),
(4,"expediente/EG01/image-1.jpg",3),
(5,"expediente/EG01/image-2.jpg",3),
(6,"expediente/EG01/",4),
(7,"expediente/EG01/",5),
(8,"expediente/EG01/",6),
(9,"expediente/AC05/",7),
(10,"expediente/AC05/",7),
(11,"expediente/JC04/",8),
(12,"expediente/JC04/",8),
(13,"expediente/JC04/",9),
(14,"expediente/JC04/",10),
(15,"expediente/JC04/",11),
(16,"expediente/JC04/",12),
(17,"expediente/JC04/",13),
(18,"expediente/JC04/",14),
(19,"expediente/JC04/",15),
(20,"expediente/CF02/",16),
(21,"expediente/CF02/",16);


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tinventario_medicamento` VALUES (6,3,"2020-01-17","2020-01-24",2,6,"ESTANTE 1 ANALGESICOS",1),
(7,3,"2020-01-17","2020-01-25",3,7,"ESTANTE 2 ANALGESICOS",1);


DROP TABLE IF EXISTS `tmedicamento`;

CREATE TABLE `tmedicamento` (
  `idmedicamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_medicamento` varchar(50) NOT NULL,
  `presentacion_medicamento` varchar(50) NOT NULL,
  `via_admin_medicamento` varchar(50) NOT NULL,
  `concentracion_medicamento` varchar(50) NOT NULL,
  `stock_minimo_medicamento` int(11) NOT NULL,
  `unidad` varchar(3) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idmedicamento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tmedicamento` VALUES (3,"PARACETAMOL","pastilla","orales",500,5,"mg","Analgesicos",1);


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tproveedor` VALUES (1,"LABORATORIO LOPEZ","7666-4897","",0),
(2,"LABORATORIO GAMNA","4645-4645","",0),
(3,"BAYER","7979-1279","GERSON MIGUEL ANTONIO PALACIOS",0),
(4,"LACOSTE","1234-1231","DAVID FLORES",0),
(5,"BAYER","7792-9779","MIGUEL ANGEL SANCHEZ RIVAS",1),
(6,"LABORATORIO GAMNA","9792-7929","OSCAR ANTONI PALACIOS",1),
(7,"LABORATORIO LOPEZ","9717-9217","CARLOS DAVID SANCHEZ HERNANDÉZ",1);


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `treceta` VALUES (1,6,"",1,0,"2 cada 28 horas durante 30",3),
(2,7,"",1,0,"2 cada 24 horas durante 30",3),
(3,7,"",3,0,"2 cada 8 horas durante 15",4),
(4,6,"",1,0,"2 cada 8 horas durante 15 dias",5),
(5,6,"",5,0,"2 cada 8 horas durante 30",6),
(6,6,"",2,0,"2 cada 8 horas durante 15",7),
(7,7,"",2,0,"2 cada 8 horas durante 20",7);


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tsignosvitales` VALUES (1,"100/80","",37,185,190,25,1),
(2,"100/80","",37,185,190,25,2),
(3,"120/10","",37,180,200,0,3),
(4,"","","",0,0,0,4),
(5,"","","",0,0,0,5),
(6,"","","",0,0,0,6),
(7,"","","",0,0,0,7),
(8,"","","",0,0,0,8),
(9,"","","",0,0,0,9),
(10,"100/80","",120,185,200,0,10),
(11,"100/80","",120,185,200,0,11),
(12,"","","",0,0,0,12),
(13,"","","",0,0,0,13),
(14,"","","",0,0,0,14),
(15,"","","",0,0,0,15),
(16,"","","",0,0,0,16);


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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tusuario` VALUES (1,"ANALUISA","TGRmT2E1Y0xWblV5TUgwOXpnZ2VDQT09","davidflores.guzman.dfg@gmail.com","admin","",1,"2019-11-29","DR.ANA LUISA VELAZQUEZ"),
(14,"SECRE","TGRmT2E1Y0xWblV5TUgwOXpnZ2VDQT09","herminiaflores@hotmail.com","secret","",1,"2020-01-17","HERMINIA FLORES CALLEJAS");


SET foreign_key_checks = 1;
