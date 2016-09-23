-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 07:41:33
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdworkshop1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asistente`
--

CREATE TABLE `Asistente` (
  `idAsistente` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `rutAsistente` varchar(10) NOT NULL,
  `correoAsistente` varchar(100) NOT NULL,
  `contactoAsistente` varchar(12) NOT NULL,
  `idCarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Carrera`
--

CREATE TABLE `Carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Carrera`
--

INSERT INTO `Carrera` (`idCarrera`, `nombreCarrera`) VALUES
(1, 'Auditoria'),
(2, 'Ingeniería en Administración'),
(3, 'Ingeniería en Administración de Recursos Humanos'),
(4, 'Ingeniería en Comercio Exterior'),
(5, 'Ingeniería en Gestión Logística'),
(6, 'Ingeniería en Marketing'),
(7, 'Administración de Empresas Mención Marketing'),
(8, 'Administración de Recursos Humanos'),
(9, 'Administración Financiera'),
(10, 'Comercio Exterior'),
(11, 'Contabilidad General Mención Legislación Tributaria'),
(12, 'Gestión Comercial'),
(13, 'Técnico en Gestión Logística'),
(14, 'Actuación'),
(15, 'Animación Digital'),
(16, 'Comunicación Audiovisual'),
(17, 'Ingeniería en Sonido'),
(18, 'Publicidad'),
(19, 'Relaciones Públicas Mención Marketing'),
(20, 'Publicidad Técnica Mención Producción Publicitaria'),
(21, 'Técnico Audiovisual'),
(22, 'Tecnología en Sonido'),
(23, 'Ingeniería en Construcción'),
(24, 'Ingeniería en Prevención de Riesgos'),
(25, 'Dibujo y Modelamiento Arquitectónico y Estructural'),
(26, 'Restauración Patrimonial'),
(27, 'Técnico en Construcción'),
(28, 'Técnico en Instalaciones y Proyectos Eléctricos'),
(29, 'Técnico en Prevención de Riesgos'),
(30, 'Técnico Topógrafo'),
(31, 'Diseño de Ambientes'),
(32, 'Diseño de Vestuario'),
(33, 'Diseño Gráfico'),
(34, 'Diseño Industrial'),
(35, 'Ilustración'),
(36, 'Producción Web'),
(37, 'Técnico en Diseño Gráfico'),
(38, 'Técnico en Producción Industrial de Vestuario'),
(39, 'Ingeniería en Conectividad y Redes'),
(40, 'Ingeniería en Gestión de Tecnologías de Información'),
(41, 'Ingeniería Informática'),
(42, 'Ingeniería en Infraestructura y Plataformas Tecnológicas'),
(43, 'Administración de Redes Computacionales'),
(44, 'Administrador de Infraestructura y Plataformas Tecnológicas'),
(45, 'Analista Programador Computacional'),
(46, 'Técnico en Telecomunicaciones'),
(47, 'Ingeniería en Electricidad y Automatización Industrial'),
(48, 'Ingeniería en Maquinaria y Vehículos Pesados'),
(49, 'Ingeniería en Mecánica Automotriz y Autotrónica'),
(50, 'Técnico en Electricidad y Automatización Industrial'),
(51, 'Técnico en Enegías Renovables y Eficiencia Energética'),
(52, 'Técnico en Mantenimiento Electromecánico'),
(53, 'Técnico en Mantenimiento Electromecánico Mención Industrias'),
(54, 'Técnico en Mantenimiento Preventivo Mención Minería'),
(55, 'Técnico en Maquinaria y Vehículos Pesados'),
(56, 'Técnico en Mecánica Automotriz y Autotrónica'),
(57, 'Ingeniería Agrícola'),
(58, 'Ingeniería en Medio Ambiente'),
(59, 'Técnico Agrícola'),
(60, 'Técnico en Calidad y Seguridad Agroalimentaria'),
(61, 'Técnico en Geología y Control de Sondaje'),
(62, 'Técnico en Geomática'),
(63, 'Técnico Veterinario'),
(64, 'Informática Biomédica'),
(65, 'Técnico de Enfermería'),
(66, 'Técnico de Laboratorio Clínico y Banco de Sangre'),
(67, 'Técnico de Radiodiagnóstico y Radioterapia'),
(68, 'Técnico en Fisioterapia'),
(69, 'Técnico en Nutrición y Dietética'),
(70, 'Técnico en Odontología'),
(71, 'Técnico en Preparación Física'),
(72, 'Técnico en Química y Farmacia'),
(73, 'Ecoturismo'),
(74, 'Gastronomía Internacional'),
(75, 'Tourism & Hospitality'),
(76, 'Turismo y Hotelería'),
(77, 'Administración Hotelera'),
(78, 'Gastronomía'),
(79, 'Turismo de Aventura'),
(80, 'Turismo Técnico Mención en Empresas Turísticas'),
(81, 'Turismo Técnico Mención en Servicios Aerocomerciales');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Asistente`
--
ALTER TABLE `Asistente`
  ADD PRIMARY KEY (`idAsistente`),
  ADD KEY `carrera` (`idCarrera`);

--
-- Indices de la tabla `Carrera`
--
ALTER TABLE `Carrera`
  ADD PRIMARY KEY (`idCarrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Asistente`
--
ALTER TABLE `Asistente`
  MODIFY `idAsistente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Carrera`
--
ALTER TABLE `Carrera`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Asistente`
--
ALTER TABLE `Asistente`
  ADD CONSTRAINT `Asistente_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `Carrera` (`idCarrera`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
