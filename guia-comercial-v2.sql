-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2021 a las 03:26:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guia-comercial-v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `negocio_id` int(11) NOT NULL,
  `nom_negocio` varchar(25) NOT NULL,
  `cat_negocio` varchar(40) NOT NULL,
  `direc_negocio` varchar(50) NOT NULL,
  `tel_negocio` int(15) NOT NULL,
  `mail_negocio` varchar(25) NOT NULL,
  `web_negocio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `negocios`
--

INSERT INTO `negocios` (`negocio_id`, `nom_negocio`, `cat_negocio`, `direc_negocio`, `tel_negocio`, `mail_negocio`, `web_negocio`) VALUES
(7, 'Nombre de negocio 8', 'Galerías Comerciales, Shopping', 'Dirección de negocio 8', 12345678, 'E-mail de negocio 8', 'Web de negocio 8'),
(8, 'Nombre de negocio 3', 'Comercios varios', 'Dirección de negocio 3', 12345678, 'E-mail de negocio 3', 'Web de negocio 3'),
(9, 'Nombre de negocio 1', 'Automotor', 'Dirección de negocio 1', 12345678, 'E-mail de negocio 1', 'Web de negocio 1'),
(10, 'Nombre de negocio 4', 'Informática y Computación', 'Dirección de negocio 4', 12345678, 'E-mail de negocio 4', ''),
(11, 'Nombre de negocio 5', 'Servicios Profesionales', 'Dirección de negocio 5', 12345678, 'E-mail de negocio 5', 'Web de negocio 5'),
(12, 'Nombre de negocio 10', 'Indumentaria y Accesorios', 'Dirección de negocio 10', 12345678, 'E-mail de negocio 10', '-'),
(14, 'Negocio1', 'Gourmet, Bar, Resto, Delivery', 'La Garza', 1153358185, 'E-mail de negocio 8', 'Web de negocio 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(25) NOT NULL,
  `dni_usuario` int(11) NOT NULL,
  `mail_usuario` varchar(25) NOT NULL,
  `pass_usuario` varchar(25) NOT NULL,
  `id_negocio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nom_usuario`, `dni_usuario`, `mail_usuario`, `pass_usuario`, `id_negocio`) VALUES
(4, 'Juana Manzón', 35687123, 'jmanzon@gmail.com', 'juanajuana', 7),
(5, 'Camilo Vera', 5465466, 'cvera@gmail.com', 'camilocamilo', 8),
(6, 'Gonzalo Marchesi', 56454323, 'cmarchesi@gmail.com', 'gonzagonza', 9),
(7, 'Horacio Carbone', 546599, 'hcarbone@gmail.com', 'horaciohorcio', 10),
(8, 'Karen Ventura', 12654893, 'kventura@gmail.com', 'karenkaren', 11),
(9, 'Iliana Sabato', 56454323, 'isabato@gmail.com', 'ilianailiana', 12),
(10, 'Marcelo Gallardo', 36985124, 'mgallardo@gmail.com', 'marcelomarcelo', 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD PRIMARY KEY (`negocio_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `negocios`
--
ALTER TABLE `negocios`
  MODIFY `negocio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `negocios` (`negocio_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
