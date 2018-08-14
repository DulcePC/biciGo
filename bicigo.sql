-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2018 a las 10:40:12
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bicigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio`
--

CREATE TABLE `accesorio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `provincia` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesorio`
--

INSERT INTO `accesorio` (`id`, `titulo`, `marca`, `precio`, `estado`, `telefono`, `provincia`, `descripcion`, `imagen`) VALUES
(1, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '12.jpg'),
(2, 'bienvenidos', 'bienveni', 'w', 'w', 'w', 'w', 'ww', '7.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `texto` text NOT NULL,
  `thumb` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Mi primer articulo', 'Vamos esto klk', '2018-08-09 21:41:37', 'AYUDA\r\nAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDAAYUDA\r\nAYUDA\r\nAYUDAAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA\r\nAYUDA', ''),
(2, 'Este es el verdadero titulo', 'La fuerza de lo yegar ', '2018-08-10 00:12:00', 'one way este beso que ta le queire da replau\r\none way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replau', 'bici6.jpg'),
(3, 'Este es el cuarto titulo', 'aqui lo que vamos a meter mano', '2018-08-10 19:09:10', 'one way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replauone way este beso que ta le queire da replau', 'bici8.jpg'),
(4, 'Este es el cuarto titulo', 'Dale ahi para que vea un chin ma', '2018-08-10 19:06:52', 'yo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\nyo se que tu quiere dame un replay\r\n', 'bici10.jpg'),
(5, 'por el cuello', 'por la boca ma', '2018-08-11 20:31:38', '<p>porfavor&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>funciona</p>', 'Captura de pantalla 2018-08-10 a las 10.56.36 a.m..png'),
(6, 'Prueba de imagenes', 'Prueba de imagenes', '2018-08-13 17:59:43', '<p>Ver prueba de imagenes</p>', 'fotito.jpg'),
(7, 'Segunda prueba de imagenes', 'Segunda prueba de imagenes', '2018-08-13 18:22:23', '<p>Esta es la segunda prueba de imagenes</p>', 'fotito.jpg'),
(8, 'la falsa noticia', 'ya es la falsa noticia', '2018-08-13 21:15:06', '<p>skjhclakjs</p>', 'fotito.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicleta`
--

CREATE TABLE `bicicleta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `provincia` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bicicleta`
--

INSERT INTO `bicicleta` (`id`, `titulo`, `marca`, `precio`, `estado`, `telefono`, `provincia`, `descripcion`, `imagen`) VALUES
(2, 'bicicleta 1', 'bwm', '10000', '0', '123456789', 'Santo domingo', 'Una bicicleta bien dura', '1.jpeg'),
(3, 'bicicleta2', 'bmw', '11000', '0', '123456789', 'santo domingo', 'una vaina bien', '2.jpeg'),
(4, 'bicicleta3', 'bwm', '12000', '0', '123456789', 'Santo Domingo', 'una vaina bien', '3.jpeg'),
(5, '5', '5', '5', '0', '5', '5', '5', '5.jpeg'),
(6, '6', '6', '6', '0', '6', '6', '6', '6.jpeg'),
(7, '7', '7', '7', '0', '7', '7', '7', '7.jpeg'),
(8, '9', '9', '9', '0', '9', '9', '9', '9.jpeg'),
(9, '10', '10', '10', '0', '10', '10', '10', '10.jpeg'),
(10, '11', '11', '11', '0', '11', '11', '11', '11.jpeg'),
(11, '12', '12', '12', '0', '12', '12', '12', '12.jpg'),
(12, 'Vendo la real grasa', '159bmw', '15,950', 'Usado', '123456789', 'Punta cana', 'Esta bicicleta es la real grasa ella vuela', '3.jpeg'),
(13, 'e', 'e', 'e', 'e', 'e', 'e', 'e', '10.jpeg'),
(14, 'BiciTron', 'Wilt', '14894', 'Nuevo', '8294586696', 'Santo Domingo', 'La real vaina', 'Captura de pantalla 2018-08-11 a las 10.44.26 a.m..png'),
(15, 'La real bicicleta', 'nose', '5616415165', 'Nuevo', '156148949', 'Santo domingo', 'blablabbalala', 'fotito.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE `pieza` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `precio` varchar(300) NOT NULL,
  `estado` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `provincia` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pieza`
--

INSERT INTO `pieza` (`id`, `titulo`, `marca`, `precio`, `estado`, `telefono`, `provincia`, `descripcion`, `imagen`) VALUES
(1, 'prueba', '', '', '', '', '', '', '8.jpeg'),
(2, 'Sillom', 'bwn', '700', 'Usado', '8292151544', 'Santo Domingo ', 'Sillon para tu bicicleta, esta es facil de instalar y te doy hasta los tornillos', 'Captura de pantalla 2018-08-11 a las 10.44.26 a.m..png'),
(3, 'Pedales', 'bmw', '598', 'Nuevos', '8295642356', 'Punta Cana', 'Vendo pedales super nuevos ', 'maleta.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `clave`) VALUES
(1, 'carlos', 'carlos', '123'),
(2, 'carlos', 'carlos', '123'),
(3, 'Dulce Perez', 'a', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09'),
(4, 'queso', 'queso', '5082abaa01171fc8c51f74a41770d7e9e63a43fc21a8353a98d01080537f4187a2df4f8314a183c591ffbe5716aa4dcef72e3cb86272c31ca5e80d557d2c93f5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
