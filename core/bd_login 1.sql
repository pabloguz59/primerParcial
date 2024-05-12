-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-05-2024 a las 02:17:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `contraseña`) VALUES
(16, 'luismario', 'luis@mario', '$2y$10$n8wFQ9kEWSH1aUM5jyASjujBRVr2eXk9PRG6rWGyh5X'),
(17, 'feo', 'feo@luis', '$2y$10$io.RKZZreTMAz6KshYUsgOZN5zbdX3LsEjAkYcIRM/v'),
(18, 'pepe', 'pe@pe', '$2y$10$X8vmN7H0sYI9Blimll0HRuvdjR13HVi4J.kS5KJWPY5'),
(19, 'na', 'n@a', '$2y$10$Imllnsz2B37yfsPqngkf9O/qQRljY9kZS/HeICEruMf'),
(20, 'causa', 'causa@pe', '$2y$10$JbQV9yXqu4VFi6w/6kR9n.ZFXlEcUfY2by143ABcZTyouaydbpA8u'),
(21, 'xd', 'x@d', '$2y$10$1TcbIn.qtkuLyHC95B5I7O1Iv2ZROVXTyZ6h6GlLaipCZbnTnjbCC'),
(22, 'a', 'a@a', '$2y$10$apsIydqSC4ZuIh2mUH31BOpvgRQYzPJX49g3l1X1Rn6ga6XjzluKO'),
(23, 'pablin', 'pablin@gmail', '$2y$10$GRUAA92IB6QWfX8pneQ7t.bX8qW4osi936yxi7fRYxPPS8Pttn7Eu'),
(24, 'lukillas', 'val3n@hmail.com', '$2y$10$70E.oeiuGqn6OYMvAszXGeh/TBmV.w3alU1IQf5BBa8SKuFZPAvma');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
