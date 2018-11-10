-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2018 a las 20:14:55
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `malocas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `lastname`, `phone`, `address`, `email`, `created`, `modified`) VALUES
(1, 'Luis Angel', 'Agudelo Pajoy', '3156506392', 'Calle 145 # 49 - 34', 'angelus628@hotmail.com', '2018-11-09 23:29:40', '2018-11-09 19:50:48'),
(2, 'Mario Alfredo', 'Contreras', '3205467898', 'Calle 100 # 50 - 25', 'mario123@hotmail.com', '2018-11-09 19:53:19', '2018-11-09 19:53:19'),
(3, 'Jose Fernando', 'Corzo Diaz', '3014567865', 'Carrero 30 # 27 -78', 'jcorzo@hotmail.com', '2018-11-09 20:06:56', '2018-11-09 20:06:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees_shifts`
--

CREATE TABLE `employees_shifts` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `employees_shifts`
--

INSERT INTO `employees_shifts` (`id`, `employee_id`, `shift_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20181109230947, 'CreateEmployees', '2018-11-10 04:10:38', '2018-11-10 04:10:38', 0),
(20181109231733, 'CreateEmployeesShifts', '2018-11-10 04:20:15', '2018-11-10 04:20:15', 0),
(20181109231934, 'CreateShifts', '2018-11-10 04:20:15', '2018-11-10 04:20:15', 0),
(20181110000328, 'AddDateToShifts', '2018-11-10 00:03:40', '2018-11-10 00:03:41', 0),
(20181110001253, 'RenameColumnDateToDate', '2018-11-10 00:14:02', '2018-11-10 00:14:02', 0),
(20181110002242, 'RenameColumnRangeToRange', '2018-11-10 00:23:27', '2018-11-10 00:23:27', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shifts`
--

CREATE TABLE `shifts` (
  `id` int(11) NOT NULL,
  `day` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `range_` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `hours` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `year` int(11) NOT NULL,
  `date_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `shifts`
--

INSERT INTO `shifts` (`id`, `day`, `range_`, `hours`, `month`, `year`, `date_`) VALUES
(1, 'monday', '6-2', 8, 'November', 2018, 9),
(2, 'monday', '2-10', 8, 'November', 2018, 9),
(3, 'monday', '10-6', 8, 'November', 2018, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees_shifts`
--
ALTER TABLE `employees_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `employees_shifts`
--
ALTER TABLE `employees_shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
