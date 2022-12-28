-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-07-2022 a las 03:02:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `vacunatorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criatura`
--

CREATE TABLE `criatura` (
  `id_criatura` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `criatura`
--

INSERT INTO `criatura` (`id_criatura`, `nombre`, `cedula`, `fecha_nacimiento`, `genero`) VALUES
(10, 'Mateo messi', '33244', '2022-07-13', 'Masculino'),
(11, 'Matheus', 'Rodriguez', '2022-07-02', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padres` int(11) NOT NULL,
  `nombre_madre` text NOT NULL,
  `cedula_madre` text NOT NULL,
  `nombre_padre` text NOT NULL,
  `cedula_padre` text NOT NULL,
  `telefono` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_padres`, `nombre_madre`, `cedula_madre`, `nombre_padre`, `cedula_padre`, `telefono`) VALUES
(6, 'Belen', '213213', 'Matias', '213213', '3234324'),
(7, 'Lina Vega', '123123', 'Roberto Cabrera', '123123', '34234'),
(9, 'Micaela', '3234234', 'Richard', '3234234', '34234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacunacion` int(11) NOT NULL,
  `criatura_nombre` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vacuna` text NOT NULL,
  `dosis` text NOT NULL,
  `enfermero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacunacion`
--

INSERT INTO `vacunacion` (`id_vacunacion`, `criatura_nombre`, `fecha`, `vacuna`, `dosis`, `enfermero`) VALUES
(5, 11, '2022-06-28', 'antigripe', 'segunda', 'Enfermero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `criatura`
--
ALTER TABLE `criatura`
  ADD PRIMARY KEY (`id_criatura`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padres`);

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD PRIMARY KEY (`id_vacunacion`),
  ADD KEY `criatura_nombre` (`criatura_nombre`),
  ADD KEY `criatura_nombre_2` (`criatura_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `criatura`
--
ALTER TABLE `criatura`
  MODIFY `id_criatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  MODIFY `id_vacunacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas