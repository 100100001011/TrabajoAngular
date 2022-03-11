-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2022 a las 05:21:07
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
-- Base de datos: `prueba`
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
(15, 'Cristhian', 'Gordon', '1727018556', ' Pichincha', '1993-02-23', 'cristhian.gordon@hotmail.com', 'prueba 1', '', '2019-06-06', 'Empleado', 'Soporte', ' Pastaza', 500.00, 'S', 'pruebas varios'),
(16, 'Alenjandro', 'Suikovsky', '1272828382', ' Chimborazo', '2021-12-30', 'Alejandro@hotmail.com', 'Pruebas', 'C:\\fakepath\\__gwen_stacy_spider_gwen_and_mary_jane_watson_marvel_and_1_more_drawn_by_sushi_pizza_rrr__ef4fbbb597f454c2d779cd9833f445c7.jpg', '2019-01-03', 'Jefe', 'Soporte', ' El Oro', 2000.00, 'S', 'Pruebas'),
(17, 'Cristhian', 'Cardona', '1727018556', ' Azuay', '2022-01-14', 'leningodon@hotmail.com', 'prueba 1', 'C:\\fakepath\\images.jpg', '2022-01-07', 'Jefe', 'cobranzas', ' Azuay', 380.00, 'N', 'prueba '),
(18, 'Cristhian', 'Godon ARIAS', '1727018556', ' Guayas', '2022-01-06', 'sofia@love.com', 'prueba2', '', '2022-01-07', 'Cajero', 'caja', ' Chimborazo', 600.00, 'S', 'prueba'),
(19, 'Stefany', 'Gordon Suikovsky', '0564321678', ' Carchi', '2022-01-08', 'stefani@gmail.com', 'prueba 3', '', '2022-01-08', 'Prueba', 'sugerencias', ' Napo', 799.99, 'S', 'prueba '),
(20, 'Alexis', 'Ayuquina', '1727823839', ' Napo', '1999-01-01', 'alexis@gmail.com', 'pruebas varias', 'C:\\fakepath\\estos-son-algunos-de-los-edificios-construidos-en-madera.jpg', '2022-01-05', 'Jefe Soporte', 'Soporte', ' Orellana', 500.22, 'S', 'Pruebas varias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `nombre_provincia` varchar(255) NOT NULL,
  `capital_provincia` varchar(255) NOT NULL,
  `descripcion_provincia` varchar(255) NOT NULL,
  `poblacion_provincia` int(15) NOT NULL,
  `superficie_provincia` int(15) NOT NULL,
  `latitud_provincia` int(15) NOT NULL,
  `longitud_provincia` int(15) NOT NULL,
  `id_region` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`nombre_provincia`, `capital_provincia`, `descripcion_provincia`, `poblacion_provincia`, `superficie_provincia`, `latitud_provincia`, `longitud_provincia`, `id_region`) VALUES
('Azuay', 'Cuenca', 'Es llamada la Atenas del Ecuador por su arquitectura, su diversidad cultural, su aporte a las artes, ciencias y letras ecuatorianas y por ser el lugar de nacimiento de muchos personajes ilustres de la sociedad ecuatoriana', 569, 122, -3, -79, 1),
('Bolivar', 'Guaranda', 'Bolívar es una provincia del centro de Ecuador, en la cordillera occidental de los Andes. Su capital es la ciudad de Guaranda. La Provincia de Bolívar se llama así en honor al Libertador Simón Bolívar.', 183, 3254, -2, -79, 1),
('Cañar', 'Azoguez', 'La provincia destaca como uno de los sitios turísticos más importantes del país, destacándose entre otros la Fortaleza de Ingapirca, la Laguna de Culebrillas y la ciudad de Azogues.', 33848, 3908, -3, -79, 1),
('Carchi', 'Tulcán', 'Carchi es una provincia ecuatoriana situada al norte del Ecuador en la frontera con Colombia. Su capital es la ciudad de Tulcán. Forma parte de la región 1', 82734, 3783, 1, -78, 1),
('Chimborazo', 'Riobamba', 'En esta provincia se encuentran varias de las cumbres más elevadas del país, como el Carihuairazo, el Altar, Igualata, Sangay, entre otros, que en algunos casos comparte con otras provincias.', 223586, 6487, -2, -79, 1),
('Cotopaxi', 'Latacunga', 'La provincia toma el nombre del volcán más grande e importante de su territorio, el volcán Cotopaxi. Cotopaxi se encuentra dividida políticamente en 7 cantones. Según el último ordenamiento territorial, la provincia de Cotopaxi pertenece a la región centr', 409, 6569, -1, -79, 1),
('El Oro', 'Machala', 'La capital de la provincia de El Oro es la ciudad de Machala, quinta ciudad del país, considerada como la  capital bananera del mundo .', 260528, 6188, -3, -80, 2),
('Esmeraldas', 'Esmeraldas', 'Provincia del Ecuador situada en su costa noroccidental, conocida popularmente como la provincia verde. Sucapital homónima es uno de los puertos principales del Ecuador y terminal del oleoducto transandino. Posee un aeropuerto para vuelos nacionales e int', 189504, 15, -1, -80, 2),
('Galápagos', 'P. Baquerizo Moreno', 'Es el mayor centro turístico del Ecuador, así como también una de las reservas ecológicas más grandes e importantes del planeta. Con sus 26.640 habitantes, Galápagos es la provincia menos poblada del país, debido principalmente al afán de conservar al máx', 5600, 8010, -1, -91, 3),
('Guayas', 'Guayaquil', 'Es el mayor centro comercial e industrial del Ecuador. Con sus 3,8 millones de habitantes, Guayas es la provincia más poblada del país, constituyéndose con el 24,5% de la población de la República.', 2526927, 17139, -2, -80, 2),
('Imbabura', 'Ibarra', 'La provincia también es conocida por sus contrastes poblacionales es así que la población está marcada por diferentes factores demográficos, además desde siempre ha sido núcleo de artesanías y cultura.', 181722, 4599, 0, -78, 1),
('Loja', 'Loja', 'Loja es una ciudad del Ecuador, capital de la provincia y cantón Loja, tiene una rica tradición en las artes, y por esta razón es conocida como la capital musical y cultural del Ecuador.', 207, 57, -4, -80, 1),
('Los Rios', 'Babahoyo', 'Los Ríos, oficialmente Provincia de Los Ríos, es una de las 24 provincias de la República del Ecuador, localizada en la Región Costa del país. Su capital es la ciudad de Babahoyo y su localidad más poblada es la ciudad de Quevedo. Es uno de los más import', 778115, 6254, -2, -79, 2),
('Manabí', 'Portoviejo', 'Manabí es una provincia ecuatoriana localizada en el emplazamiento centro-noroeste del Ecuador continental, cuya unidad jurídica se ubica en la región geográfica del litoral, que a su vez se encuentra dividida por el cruce de la línea equinoccial. Su capi', 1369780, 18400, -1, -80, 2),
('Morona Santiago', 'Macas', 'Morona Santiago (nombre oficial Provincia de Morona Santiago) es una de las 24 provincias que conforman la República del Ecuador. Es una provincia de la Amazonía ecuatoriana. Su capital es la ciudad de Macas, la cual además, es su urbe más poblada. Su ter', 147940, 25690, -2, -78, 4),
('Napo', 'Tena', 'La provincia de Napo es una de las provincias de la Región Centro Norte (Ecuador), de la República del Ecuador, situada en la región amazónica ecuatoriana e incluyendo parte de las laderas de los Andes, hasta las llanuras amazónicas. Toma su nombre del rí', 103697, 13271, 1, -78, 4),
('Orellana', 'Francisco de Orellana', 'Orellana, provincia de la Región Centro Norte (Ecuador), Ecuador, La capital de la provincia es El Coca más conocida como «Coca». Al norte limita con Sucumbíos, al sur con la provincia de Pastaza, al este con Perú y al oeste con Napo. Tiene una superficie', 136396, 20773, -1, -76, 4),
('Pastaza', 'Puyo', 'Pastaza, oficialmente Provincia de Pastaza, es una de las 24 provincias que conforman la República del Ecuador, situada en laRegión Amazónica del Ecuador. Recibe su nombre del río Pastaza, que la separa al sur de la provincia de Morona Santiago. Su capita', 83933, 29520, -1, -78, 4),
('Pichincha', 'Quito', 'La Provincia de Pichincha es una de las 24 provincias que conforman la República del Ecuador. Se encuentra ubicada al norte del país, en la zona geográfica conocida como sierra. Su capital administrativa es la ciudad de Quito, la cual además es su urbe má', 2576287, 9612, 0, -79, 1),
('Santa Elena', 'Santa Elena', 'Santa Elena es una provincia de la costa de Ecuador creada el 7 de noviembre de 2007, la más reciente de las 24 actuales, con territorios que anterior a esa fecha formaban parte de la provincia del Guayas, al oeste de ésta.', 308693, 3763, -2, -81, 2),
('Santo Domingo de los Tsáchilas', 'Santo Domingo', 'La Provincia de Santo Domingo de los Tsáchilas es una de las provincias de la República del Ecuador y forma parte de laRegión Costa, históricamente conocida como Provincia de Yumbos. Su territorio está en zona de trópico húmedo. La provincia toma su nombr', 410937, 4180, 0, -79, 2),
('Sucumbios', 'Nueva Loja', 'Sucumbíos es una provincia del nor-oriente del Ecuador. Su capital es Nueva Loja. Es una de las principales provincias que proveen al Estado ecuatoriano del petróleo que necesita para las exportaciones. Se caracteriza por sus bellos paisajes amazónicos, e', 176472, 18612, 0, -77, 4),
('Tungurahua', 'Ambato', 'Tungurahua, oficialmente Provincia de Tungurahua, es una de las 24 provincias que conforman la República del Ecuador. Se encuentra al centro del país, en la región geográfica conocida como sierra. La ciudad de Ambato es su capital administrativa; se divid', 504583, 3334, -1, -79, 1),
('Zamora Chimchipe', 'Zamora', 'Zamora Chinchipe es una provincia de Ecuador ubicada en el sur-oriente de la Amazonía ecuatoriana, que limita con la provincia de Morona Santiago al norte; con la provincia de Loja al oeste; y con Perú al sur y este. Según el último ordenamiento territori', 91376, 10556, -3, -79, 4);

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
  MODIFY `id_Empleado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
