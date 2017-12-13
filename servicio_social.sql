-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2017 a las 09:34:33
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `rfc` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_admin` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pin` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`rfc`, `foto`, `nombre_admin`, `pin`, `cargo`, `email`) VALUES
('GOMR790305SEP', NULL, 'Ramón Gonzales Marrón', 'mexico86', 'Jefe de Oficina', 'ramon_itver@edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `no_control` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idCarrera` int(11) NOT NULL,
  `periodo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `idTitular` int(11) NOT NULL,
  `pin` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idHoras_realizadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`no_control`, `nombre`, `apellido_paterno`, `apellido_materno`, `sexo`, `telefono`, `email`, `idCarrera`, `periodo`, `semestre`, `idTitular`, `pin`, `idHoras_realizadas`) VALUES
('E14000000', 'Prueba', 'Prueba', 'Prueba', 'M', '1000000', 'prueba@prueba.com', 1, 'Ago-Dic 2017', 1, 14000000, NULL, 14000000),
('E14020191', 'Alex', 'Del Moral', 'Gomez', 'M', '2291405890', 'alex190@gmail.com', 8, 'Ene-Jun 2018', 8, 14020191, NULL, 14020191),
('E14021100', 'prueba', 'prueba', 'prueba', 'M', '00000', 'prueba@prueba.com', 1, 'Ago-Dic 2017', 7, 14021100, '1234', 14021100),
('E14021215', 'Jose Antonio', 'Flores ', 'Vargas', 'M', '2299686804', 'ske48@gmail.com', 1, 'Ago-Dic 2017', 7, 14021215, 'argentinabrasil', 14021215),
('E14021345', 'Juan Carlos', 'Hernandez', 'Garcia', 'M', '2291098711', 'carlos90@hotmail.com', 3, 'Ene-Jun 2018', 5, 14021345, 'mikuhatsune', 14021345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nom_carrera` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nom_carrera`) VALUES
(1, 'INGENIERÍA EN SISTEMAS COMPUTACIONALES'),
(2, 'INGENIERÍA BIOQUÍMICA'),
(3, 'INGENIERÍA ELECTRÓNICA'),
(4, 'LICENCIATURA EN ADMINISTRACIÓN'),
(5, 'INGENIERÍA INDUSTRIAL'),
(6, 'INGENIERÍA ELÉCTRICA'),
(7, 'INGENIERÍA QUÍMICA'),
(8, 'INGENIERÍA MECATRÓNICA'),
(9, 'INGENIERÍA MECÁNICA'),
(10, 'INGENIERÍA EN ENERGÍAS RENOVABLES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decision_admin`
--

CREATE TABLE `decision_admin` (
  `idDecision_Admin` int(11) NOT NULL,
  `decision` varchar(10) COLLATE utf8_spanish_ci DEFAULT 'espera',
  `rfc` char(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `decision_admin`
--

INSERT INTO `decision_admin` (`idDecision_Admin`, `decision`, `rfc`) VALUES
(1, 'espera', 'GOMR790305SEP'),
(2, 'aceptado', 'GOMR790305SEP'),
(3, 'rechazado', 'GOMR790305SEP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL,
  `no_control` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `nom_documento` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documento` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEstadoDocumento` int(11) NOT NULL,
  `idPeriodos` int(11) NOT NULL,
  `observaciones` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumentos`, `no_control`, `nom_documento`, `documento`, `idEstadoDocumento`, `idPeriodos`, `observaciones`) VALUES
(1, 'E14021215', 'Solicitud del servicio social', 'debe poder abrirse', 1, 1, NULL),
(2, 'E14021215', 'Carta de asignación', 'debe poder abrirse', 1, 1, NULL),
(3, 'E14021215', 'Carta compromiso', 'debe poder abrirse', 1, 1, NULL),
(4, 'E14021215', 'Liberación del extraescolar', 'debe poder abrirse', 1, 1, NULL),
(5, 'E14021215', 'Kardex actualizado', 'debe poder abrirse', 1, 1, NULL),
(6, 'E14021215', 'Copia del horario actual escolar', 'debe poder abrirse', 1, 1, NULL),
(7, 'E14021215', 'Carta de aceptación', 'debe poder abrirse', 1, 1, NULL),
(8, 'E14021215', '1er Reporte', 'debe poder abrirse', 1, 2, NULL),
(9, 'E14021215', '2do Reporte', 'debe poder abrirse', 1, 3, NULL),
(10, 'E14021215', '3er Reporte', 'debe poder abrirse', 1, 4, NULL),
(11, 'E14021215', 'Reporte final', 'debe poder abrirse', 1, 5, NULL),
(12, 'E14021345', 'Solicitud del Servicio Social', 'debe poder abrirse', 1, 1, NULL),
(13, 'E14021345', 'Carta de asignación', 'debe poder abrirse', 1, 1, NULL),
(14, 'E14021345', 'Carta compromiso', 'debe poder abrirse', 1, 1, NULL),
(15, 'E14021345', 'Liberación del extraescolar', 'debe poder abrirse', 1, 1, NULL),
(16, 'E14021345', 'Kardex actualizado', 'debe poder abrirse', 1, 1, NULL),
(17, 'E14021345', 'Copia del horario actual escolar', 'debe poder abrirse', 1, 1, NULL),
(18, 'E14021345', 'Carta de aceptación', 'debe poder abrirse', 1, 1, NULL),
(19, 'E14021345', '1er Reporte', 'debe poder abrirse', 1, 2, NULL),
(20, 'E14021345', '2do Reporte', 'debe poder abrirse', 1, 3, NULL),
(21, 'E14021345', '3er Reporte', 'debe poder abrirse', 1, 4, NULL),
(22, 'E14021345', 'Reporte Final', 'debe poder abrirse', 1, 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadodocumento`
--

CREATE TABLE `estadodocumento` (
  `idEstadoDocumento` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estadodocumento`
--

INSERT INTO `estadodocumento` (`idEstadoDocumento`, `estado`) VALUES
(1, 'No enviado'),
(2, 'Por revisar'),
(3, 'Revisado'),
(4, 'archivo dañado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_realizadas`
--

CREATE TABLE `horas_realizadas` (
  `idHoras_realizadas` int(11) NOT NULL,
  `horas_reportadas` int(11) DEFAULT '0',
  `horas_acumuladas` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horas_realizadas`
--

INSERT INTO `horas_realizadas` (`idHoras_realizadas`, `horas_reportadas`, `horas_acumuladas`) VALUES
(14000000, 0, 0),
(14020191, 0, 0),
(14021100, 0, 0),
(14021215, 0, 0),
(14021345, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaalumnos`
--

CREATE TABLE `listaalumnos` (
  `idActivos` int(11) NOT NULL,
  `fotoAlumno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `no_control` char(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `listaalumnos`
--

INSERT INTO `listaalumnos` (`idActivos`, `fotoAlumno`, `no_control`) VALUES
(1, '../imagenesalumno/E14021215.png', 'E14021215'),
(12, '../imagenesalumno/Chrysanthemum.jpg', 'E14021100'),
(13, '../imagenesalumno/perfil.jpg', 'E14020191'),
(14, '../imagenesalumno/perfil.jpg', 'E14000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `idPeriodos` int(11) NOT NULL,
  `periodo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`idPeriodos`, `periodo`) VALUES
(0, 'Proceso de Solicitud'),
(1, '07 de Agosto al 28 de Agosto'),
(2, '28 De Agosto al 28 de Octubre 2017'),
(3, '28 de Octubre al 28 Diciembre de 2017'),
(4, '28 de Diciembre al 28 de Febrero de 2018'),
(5, '28 de Febrero de 2018 al 12 de Marzo del 2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `idSolicitudes` int(11) NOT NULL,
  `no_control` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `idDecision_Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`idSolicitudes`, `no_control`, `idDecision_Admin`) VALUES
(1, 'E14021215', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulares`
--

CREATE TABLE `titulares` (
  `idTitular` int(11) NOT NULL,
  `nom_tit` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puesto` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `titulares`
--

INSERT INTO `titulares` (`idTitular`, `nom_tit`, `puesto`) VALUES
(14000000, 'prueba', 'prueba'),
(14020191, 'Luis Angel Perez Parroquin', 'Licenciado'),
(14021100, 'prueba', 'prueba'),
(14021215, 'Leonardo Lezama', 'Jefe de departamento'),
(14021345, 'Felipe Salazar', 'Gerente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`rfc`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`no_control`),
  ADD KEY `fk_Alumnos_Carrera1_idx` (`idCarrera`),
  ADD KEY `fk_Alumnos_Titulares1_idx` (`idTitular`),
  ADD KEY `fk_Alumnos_Horas_realizadas1_idx` (`idHoras_realizadas`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `decision_admin`
--
ALTER TABLE `decision_admin`
  ADD PRIMARY KEY (`idDecision_Admin`),
  ADD KEY `rfc` (`rfc`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`idDocumentos`),
  ADD KEY `fk_Documentos_EstadoDocumento1_idx` (`idEstadoDocumento`),
  ADD KEY `fk_Documentos_Alumnos1_idx` (`no_control`),
  ADD KEY `fk_Documentos_Periodos1_idx` (`idPeriodos`);

--
-- Indices de la tabla `estadodocumento`
--
ALTER TABLE `estadodocumento`
  ADD PRIMARY KEY (`idEstadoDocumento`);

--
-- Indices de la tabla `horas_realizadas`
--
ALTER TABLE `horas_realizadas`
  ADD PRIMARY KEY (`idHoras_realizadas`);

--
-- Indices de la tabla `listaalumnos`
--
ALTER TABLE `listaalumnos`
  ADD PRIMARY KEY (`idActivos`),
  ADD KEY `fk_Activos_Alumnos1_idx` (`no_control`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`idPeriodos`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`idSolicitudes`),
  ADD KEY `fk_Solicitudes_Alumnos1_idx` (`no_control`),
  ADD KEY `fk_idDecision_Admin1_idx` (`idDecision_Admin`);

--
-- Indices de la tabla `titulares`
--
ALTER TABLE `titulares`
  ADD PRIMARY KEY (`idTitular`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `decision_admin`
--
ALTER TABLE `decision_admin`
  MODIFY `idDecision_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `listaalumnos`
--
ALTER TABLE `listaalumnos`
  MODIFY `idActivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `idPeriodos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `idSolicitudes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `titulares`
--
ALTER TABLE `titulares`
  MODIFY `idTitular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14021346;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_Alumnos_Carrera1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnos_Horas_realizadas1` FOREIGN KEY (`idHoras_realizadas`) REFERENCES `horas_realizadas` (`idHoras_realizadas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnos_Titulares1` FOREIGN KEY (`idTitular`) REFERENCES `titulares` (`idTitular`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `decision_admin`
--
ALTER TABLE `decision_admin`
  ADD CONSTRAINT `decision_admin_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `administrador` (`rfc`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`idEstadoDocumento`) REFERENCES `estadodocumento` (`idEstadoDocumento`),
  ADD CONSTRAINT `fk_Documentos_Alumnos1` FOREIGN KEY (`no_control`) REFERENCES `alumnos` (`no_control`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Documentos_Periodos1` FOREIGN KEY (`idPeriodos`) REFERENCES `periodos` (`idPeriodos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `listaalumnos`
--
ALTER TABLE `listaalumnos`
  ADD CONSTRAINT `fk_Activos_Alumnos1` FOREIGN KEY (`no_control`) REFERENCES `alumnos` (`no_control`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `fk_Solicitudes_Alumnos1` FOREIGN KEY (`no_control`) REFERENCES `alumnos` (`no_control`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idDecision_Admin1` FOREIGN KEY (`idDecision_Admin`) REFERENCES `decision_admin` (`idDecision_Admin`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
