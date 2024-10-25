-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2024 a las 17:59:43
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
-- Base de datos: `pt02_jose_gomez`
--
CREATE DATABASE IF NOT EXISTS `pt02_jose_gomez` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt02_jose_gomez`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `titol` text NOT NULL,
  `cos` text NOT NULL,
  `correu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`ID`, `titol`, `cos`, `correu`) VALUES
(23, 'afdsffs', 'sddsds', 'pepe@gmail.com'),
(24, 'Marte', 'asdasdasd', ''),
(26, 'pepe', 'pepepee', 'pepe@gmail.com'),
(27, 'peroque', 'estapasando\r\n', 'pepe@gmail.com'),
(30, 'sini', 'sama', 'j@g.m'),
(31, 'siniola', 'samacola', 'j@g.m'),
(32, 'siniolatonto', 'samacolatonta\r\n', 'j@g.m');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE `usuaris` (
  `correu` varchar(40) NOT NULL,
  `nomusuari` varchar(20) NOT NULL,
  `contrasenya` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`correu`, `nomusuari`, `contrasenya`) VALUES
('pepe@gmail.com', 'pepe', 'pepe4'),
('pepitodelospalotes@si.com', 'pepe2', '$2y$10$8aKvF5/LCpn.eNHH0f33k.iSZpq5c7gZ.G2T0eAmWT.x6dgnFouKq'),
('pepe4@gmail.com', 'pepe4', '$2y$10$Qhhk9er06DvrmG8G8Sm9fee.WuIG4g0SBg7kRaBLJYGo07yAz4pAi'),
('asdasds@gmail.com', 'asdas', '$2y$10$.yuaifLTVfQProJKQhHOjeXjlCxnt55SjRxkC7mVvHEg1vndQPTlW'),
('a.gomez9@sapalomera.cat', 'Alvaro Gomes', '$2y$10$hXNnfXpPJhTYoVjoMc1EDe49VPnoQUi9v8S7hc.LQAvFwXJLiv8h2'),
('1234@gmail.com', 'hola', '123'),
('12345@gmail.com', 'hola', '$2y$10$iDAsGBAxMYWJuR9wUR4ioeR0jVjWA0tYTjMCU/Zl5zEzNDNz1TjJG'),
('pepe6@gmail.com', 'pepe', '$2y$10$KTeDyzc/.vR/MtAkpeXzheZEJgnD4Baoqop.ZZVIzH5dJld9a7c6W'),
('pepepe@gmail.com', 'pepe', '$2y$10$x5muI05pXAV7ppeFzL/5ZOHY4ZSEAdru.WqVGrBVhKaFfav1GD8QK'),
('pesao@gmail.com', 'pepe4', '$2y$10$Eb8bEawAzRKDQhX8oVBrxOMQlMj.I6G1ltxA7Tn822O2EhDUbB.1q'),
('j@g.m', 'alvaro', '$2y$10$wwMpYbJMg/QoLaupdstYu..tMtUidck246.2PGfxAEWvgH8CSNf6K'),
('x.martin@sapalomera.cat', 'Xavier Martin', '$2y$10$fElBooMg6yLNPYyBLNEBreQipyu4y1y0H9Ai537an8VdmW8JzO6gO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
