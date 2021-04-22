-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2021 a las 03:40:14
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guinda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id_calendario` int(11) NOT NULL,
  `dias` int(10) DEFAULT NULL,
  `semana` int(10) DEFAULT NULL,
  `mes` int(10) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_TC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_TP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` varchar(60) DEFAULT NULL,
  `respuesta` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `pregunta`, `respuesta`) VALUES
(1, 'el santo', NULL),
(2, 'oñiwejvñoiejvw', NULL),
(3, 'El atrevido pitrs', 'aloja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_usu_cal`
--

CREATE TABLE `rel_usu_cal` (
  `idRUC` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_calendario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_usu_paq`
--

CREATE TABLE `rel_usu_paq` (
  `idRUP` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_paquete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cal`
--

CREATE TABLE `tipo_cal` (
  `id_TC` int(11) NOT NULL,
  `tipoC` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_paque`
--

CREATE TABLE `tipo_paque` (
  `id_TP` int(11) NOT NULL,
  `tipoC` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_perfil`
--

CREATE TABLE `usuario_perfil` (
  `id_usuario` int(11) NOT NULL,
  `nombreusu` varchar(25) DEFAULT NULL,
  `nombre_s` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `correo` varchar(25) DEFAULT NULL,
  `boleta` int(10) DEFAULT NULL,
  `telefonom` varchar(15) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `hashp` varchar(20) DEFAULT NULL,
  `tema` varchar(40) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_perfil`
--

INSERT INTO `usuario_perfil` (`id_usuario`, `nombreusu`, `nombre_s`, `apellidos`, `correo`, `boleta`, `telefonom`, `contrasena`, `hashp`, `tema`, `active`, `descripcion`) VALUES
(1, 'Nxs_Romo', NULL, NULL, 'brazukaone@gmail.com', 2019092462, NULL, NULL, NULL, NULL, 0, NULL),
(2, 'ElMamastrofico', NULL, NULL, 'rilheasun6969@gmail.com', 2019090112, NULL, NULL, NULL, NULL, 0, NULL),
(3, 'RuBernal', NULL, NULL, 'Elnalgon78@hotmail.com', 2019090101, NULL, NULL, NULL, NULL, 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_calendario`),
  ADD KEY `id_TC` (`id_TC`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`),
  ADD KEY `id_TP` (`id_TP`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPregunta`) USING BTREE;

--
-- Indices de la tabla `rel_usu_cal`
--
ALTER TABLE `rel_usu_cal`
  ADD PRIMARY KEY (`idRUC`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_calendario` (`id_calendario`);

--
-- Indices de la tabla `rel_usu_paq`
--
ALTER TABLE `rel_usu_paq`
  ADD PRIMARY KEY (`idRUP`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_paquete` (`id_paquete`);

--
-- Indices de la tabla `tipo_cal`
--
ALTER TABLE `tipo_cal`
  ADD PRIMARY KEY (`id_TC`);

--
-- Indices de la tabla `tipo_paque`
--
ALTER TABLE `tipo_paque`
  ADD PRIMARY KEY (`id_TP`);

--
-- Indices de la tabla `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_calendario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rel_usu_cal`
--
ALTER TABLE `rel_usu_cal`
  MODIFY `idRUC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rel_usu_paq`
--
ALTER TABLE `rel_usu_paq`
  MODIFY `idRUP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cal`
--
ALTER TABLE `tipo_cal`
  MODIFY `id_TC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_paque`
--
ALTER TABLE `tipo_paque`
  MODIFY `id_TP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`id_TC`) REFERENCES `tipo_cal` (`id_TC`);

--
-- Filtros para la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD CONSTRAINT `paquete_ibfk_1` FOREIGN KEY (`id_TP`) REFERENCES `tipo_paque` (`id_TP`);

--
-- Filtros para la tabla `rel_usu_cal`
--
ALTER TABLE `rel_usu_cal`
  ADD CONSTRAINT `rel_usu_cal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_perfil` (`id_usuario`),
  ADD CONSTRAINT `rel_usu_cal_ibfk_2` FOREIGN KEY (`id_calendario`) REFERENCES `calendario` (`id_calendario`);

--
-- Filtros para la tabla `rel_usu_paq`
--
ALTER TABLE `rel_usu_paq`
  ADD CONSTRAINT `rel_usu_paq_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_perfil` (`id_usuario`),
  ADD CONSTRAINT `rel_usu_paq_ibfk_2` FOREIGN KEY (`id_paquete`) REFERENCES `paquete` (`id_paquete`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
