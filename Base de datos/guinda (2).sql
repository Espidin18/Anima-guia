-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2021 a las 19:11:50
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
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `idtipo` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`idtipo`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Editor'),
(4, 'Artista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_usuario`, `nombre`, `usuario`) VALUES
(3, 'BRUCE WAYNE', '¿quien es batman?'),
(5, 'BUSCALO', '¿de que dia es el 7 de mayo?'),
(6, 'CARLOS', '¿dc o marvel?'),
(53, 'TOMARLA', '¿matarla o salvarla?'),
(56, 'PIZZA HAWAIANA', '¿pepperoni o pizza?'),
(59, 'pay de piña plx', '¿Cajita feliz o pay de piña?'),
(60, 'yep', '¿Hoy es el dia?'),
(63, 'NO, EL SISTEMA ESTÁ HECHO, PARA QUE TOME LA HORA LOCAL ', '¿se puede cambiar la fecha del calendario?'),
(64, ' Las que sean necesarias resolver', '¿Cuántas preguntas se pueden subir?'),
(65, 'En el módulo de perfil tiene una opción para personalizarlo', '¿Se puede cambiar el color de los elementos?'),
(66, 'Debe tener una forma cuadrada y debe encontrarse la imagen en tu galería, arrastras el archivo y se cambia', '¿Cómo se puede subir una foto de perfil?'),
(67, 'Para el Instituto Politécnico Nacional', '¿Para qué institución se pensó creando el programa?'),
(68, 'No, se puede subir cuantas tareas tengas', '¿Hay un limite de tareas para un día?'),
(69, 'no', '¿Cualquiera puede subir preguntas a la página?'),
(70, 'no valido', '¿+dar alta a+´{‘¿?'),
(71, '', '');

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
(26, '54erfg78iuojik', '78yuhjnkoml '),
(27, '234567890', 'tgbnjiklplpl,l');

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
  `descripcion` varchar(200) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_perfil`
--

INSERT INTO `usuario_perfil` (`id_usuario`, `nombreusu`, `nombre_s`, `apellidos`, `correo`, `boleta`, `telefonom`, `contrasena`, `hashp`, `tema`, `active`, `descripcion`, `id`) VALUES
(4, 'cliente', NULL, NULL, 'cliente@gmail.com', NULL, '55481238', 'cliente', NULL, NULL, 0, NULL, 2),
(28, 'Akenaton', 'akenton', 'hernandez', 'artista@gmail.com', NULL, '55394720938', 'artista', NULL, NULL, 0, NULL, 4),
(29, 'carro', 'carro', 'rojo', 'editor@gmail.com', NULL, '5587697769', 'editor', NULL, NULL, 0, NULL, 3),
(30, 'muffin', 'muffin', 'gmail', 'admin@gmail.com', NULL, '5578876879', 'admin', NULL, NULL, 0, NULL, 1);

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
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

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
  ADD PRIMARY KEY (`idPregunta`);

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
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_calendario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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

--
-- Filtros para la tabla `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  ADD CONSTRAINT `usuario_perfil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `catalogo` (`idtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
