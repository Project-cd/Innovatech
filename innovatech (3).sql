-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2024 a las 02:36:59
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
-- Base de datos: `innovatech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen_url` varchar(255) NOT NULL,
  `categoria` enum('celulares','tablets','audios','televisores','accesorios','laptops') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen_url`, `categoria`) VALUES
(5, 'A55-Azul', 1900.00, 'a55.png', 'celulares'),
(6, 'S20FE-AZUL', 1000.00, 's20fe.png', 'celulares'),
(7, 'S23-BLANCO', 2300.00, 's23.png', 'celulares'),
(17, 'Galaxy TabA8', 1500.00, 'TABA8.png', 'tablets'),
(18, 'Samsung Galaxy Tab S9', 6500.00, 'TABS9.png', 'tablets'),
(19, 'TABLET HUAWEI MATEPAD T 10', 2500.00, 'MATEPADT10.png', 'tablets'),
(20, 'WH-CH520', 99.00, 'Sony.png', 'audios'),
(21, 'JBL Audifonos Bluetooth 76Hrs', 250.00, '720bt.png', 'audios'),
(22, 'Audífonos Philips TAT1207', 100.00, 'TAT1207.png', 'audios'),
(23, 'Televisor Panasonic Smart TV 32', 700.00, '32MS600.png', 'televisores'),
(24, 'Smart TV 43\" TCL LED 4K', 949.00, '43P635.png', 'televisores'),
(25, 'Televisor Samsung Smart TV', 900.00, '43P635.png', 'televisores'),
(26, 'Altavoz inteligente Amazon Alexa', 300.00, 'ALEXA.png', 'accesorios'),
(27, 'APPLE WATCH SE 2DA GENERACIÓN GPS', 1200.00, 'APPLEWATCH.png', 'accesorios'),
(28, 'Redragon K530 Draconic', 100.00, 'teclado.png', 'accesorios'),
(29, 'Laptop Asus Intel Core i5 8GB 512GB ', 2000.00, 'ASUS512.png', 'laptops'),
(30, 'Gamer Lenovo Intel® Core i5 ', 3200.00, 'LENOVOLOQ12.png', 'laptops'),
(31, 'Gamer Asus Intel Core i7', 1200.00, 'ASUS.png', 'laptops');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `contraseña`) VALUES
(2, 'raiomj@gmail.com', '$2y$10$h122H.JUD/D/WAifnMCgMun18JDEKDWMTuDSgUZnrT8Yu/tltuCQW'),
(4, 'pioj@gmail.com', '$2y$10$3otS.NMcx8kNiItl8ZYinOtclRtmtT5mS7fTB0MMaP6omgdQh5i1m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
