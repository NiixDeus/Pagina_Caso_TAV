-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 02:26:54
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mantenedor_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) DEFAULT NULL,
  `user_mail` varchar(40) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_password_hash` varchar(40) NOT NULL,
  `fecha_reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`firstname`, `user_mail`, `user_id`, `user_name`, `user_password_hash`, `fecha_reg`) VALUES
('Adolfo', 'ad.calderon@hotmail.com', 1, 'ad.calderon', 'caca123', '26/01/23'),
('pepe', 'sdfsdf@sdfds', 2, 'pepetap', 'caca123', '26/01/23'),
('pepe', 'sadjlkfnahkjdsf@gmail.com', 9, 'kakakaka', 'jlkndsgfanajsdkl.sdjngkalgd', '26/01/23'),
('Juan Carlos', 'Juan.car@gmail.com', 25, 'JuanCarlll', 'ADSDSGASDG', '26/01/23'),
('Pablo Chill-e', 'pablitoshishigang@gmail.com', 26, 'pablooooo', 'shishigang', '26/01/23'),
('Ana maria', 'anamari@gmail.com', 27, 'AnaMarisola', '3c9909afec25354d551dae21590bb26e38d53f21', '26/01/23'),
('Kalule Melendez', 'Kalule1990@gmail.com', 28, 'Kalulemelendez', 'd07fe910819e6cd47862bec5ae1483a9e4339081', '26/01/23'),
('asdsad', 'asdsad', 30, 'asdas', 'aeae379a6e857728e44164267fdb7a0e27b205d7', '26/01/23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
