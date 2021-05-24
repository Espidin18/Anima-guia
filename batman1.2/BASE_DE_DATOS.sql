-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2017 a las 00:44:04
-- Versión del servidor: 5.0.91
-- Versión de PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `baul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_demo`
--

CREATE TABLE IF NOT EXISTS `tabla_demo` (
  `id` int(11) NOT NULL auto_increment,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `tabla_demo`
--

INSERT INTO `tabla_demo` (`id`, `nombres`, `apellidos`) VALUES
(3, 'Juan Carlos', 'Albarracin Flores'),
(4, 'Meliza Estela', 'Loza Morales'),
(5, 'Mario', 'Ruiz Sotomayor'),
(6, 'Luisa Eugenia', 'Candia Quintana'),
(7, 'Nohelia Maria', 'Valdivia Valdivia'),
(8, 'Nilda Elena', 'Castillo Garcia');