-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2022 a las 04:59:22
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_Empleado` int(100) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Cedula` varchar(10) DEFAULT NULL,
  `Provincia_1` varchar(255) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Observaciones_1` varchar(255) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Fecha_ingreso` date DEFAULT NULL,
  `Cargo` varchar(255) DEFAULT NULL,
  `Departamente` varchar(255) DEFAULT NULL,
  `Provincia_2` varchar(255) DEFAULT NULL,
  `Sueldo` double(18,2) DEFAULT NULL,
  `Jornada` varchar(1) DEFAULT NULL,
  `Observaciones_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_Empleado`, `Nombre`, `Apellido`, `Cedula`, `Provincia_1`, `Fecha_Nacimiento`, `Email`, `Observaciones_1`, `Foto`, `Fecha_ingreso`, `Cargo`, `Departamente`, `Provincia_2`, `Sueldo`, `Jornada`, `Observaciones_2`) VALUES
(21, 'Cristhian', 'Gordon', '1727018556', 'LOJA', '1993-02-23', 'cristhianctl@hotmail.com', 'pruebas de ingreso', 'imagen', '2022-01-01', 'Soporte', 'Soporte', 'PICHINCHA', 580.99, 'S', 'Pruebas ingreso dos'),
(22, 'Sofia', 'Cardona', '1726813494', 'PICHINCHA', '1994-12-07', 'sofia@hotmail.com', 'Ingreso nuevo', 'imagen', '2022-06-09', 'Contadora', 'Contable', 'MANABI', 500.00, 'N', 'Pruebas'),
(23, 'Karina', 'Galeas', '1202038012', 'GUAYAS', '1999-02-02', 'pruebas@gmail.com', 'Pruebas', 'imagen', '2021-12-02', 'Pasante', 'Contable', 'COTOPAXI', 200.00, 'N', ''),
(24, 'Andres', 'Aguirre', '1707826606', 'ESMERALDAS', '1999-03-12', 'andres@hotmail.com', 'Pruebas3', 'imagen', '1992-03-23', 'Fotografo', 'Disenio', 'MANABI', 223.22, 'S', ''),
(25, 'Micaela', 'Sanchez', '0904936523', 'GUAYAS', '2000-02-12', 'micaela@gmail.com', '', 'imagen', '2022-06-29', 'Quimico', 'Quimica', 'NAPO', 999.99, 'N', ''),
(26, 'Sarahi', 'Mena', '0923082069', 'PASTAZA', '1877-02-23', 'sarahi@hotmail.com', 'pruebas', 'imagen', '2022-07-01', 'Vacante', 'Soporte', 'GUAYAS', 1999.00, 'N', ''),
(27, 'Sarahi', 'Andrade', '0912341294', 'MANABI', '1999-03-23', 'sara@hotmail.com', '111111111111111111111111111', 'imagen', '2022-07-15', 'Soporte', 'Soporte', 'NAPO', 222.33, 'S', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_Empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_Empleado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
