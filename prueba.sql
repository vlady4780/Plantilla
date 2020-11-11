-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2020 a las 14:25:00
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Cod_Carrera` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Cod_Carrera`, `Nombre`, `Imagen`) VALUES
(4, 'Administración de Empresas', 'img1'),
(5, 'Agroindustria', 'img2'),
(6, 'Artes Gráficas', 'img3'),
(7, 'Electrotécnia', 'img4'),
(8, 'Hotelería y Turismo', 'img5'),
(9, 'Industria Manufacturera', 'img6'),
(10, 'Industrias Alimentarias', 'img7'),
(11, 'Informática', 'img8'),
(12, 'Mecánica Automotriz', 'img9'),
(13, 'Metalmecánica', 'img10'),
(14, 'Tecnologías Ambientales', 'img11'),
(15, 'Textil Confecciones', 'img12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `Cod_Proyecto` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Especialidad` varchar(100) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `Sede` varchar(50) NOT NULL,
  `Año` int(11) NOT NULL,
  `Ruta_archivo` varchar(100) NOT NULL,
  `Nombre_archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`Cod_Proyecto`, `Titulo`, `Descripcion`, `Especialidad`, `Autor`, `Sede`, `Año`, `Ruta_archivo`, `Nombre_archivo`) VALUES
(21, 'a', '', 'Informatica', 'a', 'a', 2015, 'C:/xampp/htdocs/proyectos/Plantilla/Docs/', 'Diagrama_de_flujo.pdf'),
(22, 'a', '', 'Administración de empresas', 'a', 'a', 2015, 'C:/xampp/htdocs/proyectos/Plantilla/Docs/', 'Sesión 03 - UML.pdf'),
(23, 'asdsad', '', 'Informatica', 'asdsa', 'asdsa', 2020, 'C:/xampp/htdocs/proyectos/Plantilla/Docs/', 'Los 10 principios del Decálogo de Mavila.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Cod_Rol` int(10) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Cod_Rol`, `Rol`) VALUES
(1, 'administrador'),
(2, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `User_id` int(10) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_mobile` int(9) NOT NULL,
  `User_Clave` varchar(50) NOT NULL,
  `User_Rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`User_id`, `User_name`, `User_Email`, `User_mobile`, `User_Clave`, `User_Rol`) VALUES
(1, 'juan', 'juan@gmail.com', 123456789, '123456', 1),
(2, 'alfredo', 'alf@gmail.com', 123456789, '123456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Cod_Carrera`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`Cod_Proyecto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Cod_Rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `User_Rol` (`User_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Cod_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `Cod_Proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Cod_Rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`User_Rol`) REFERENCES `rol` (`Cod_Rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
