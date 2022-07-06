-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 18:05:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_fito`
--
CREATE DATABASE IF NOT EXISTS `tienda_fito` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tienda_fito`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `estado_compra` int(11) NOT NULL,
  `numero_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_user`, `id_producto`, `estado_compra`, `numero_compra`) VALUES
(1, 1, 18, 0, 1),
(2, 1, 19, 0, 1),
(3, 3, 18, 1, 2),
(4, 3, 18, 1, 2),
(5, 3, 18, 1, 2),
(6, 3, 1, 1, 3),
(7, 3, 2, 1, 3),
(9, 4, 12, 1, 4),
(10, 4, 18, 1, 4),
(11, 4, 22, 1, 5),
(12, 5, 1, 1, 6),
(13, 5, 11, 1, 6),
(14, 5, 22, 1, 6),
(15, 5, 18, 1, 6),
(16, 5, 11, 1, 7),
(17, 5, 12, 1, 7),
(19, 5, 11, 1, 7),
(20, 5, 11, 1, 7),
(21, 5, 14, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `producto_nombre` varchar(32) NOT NULL,
  `producto_talle` varchar(32) NOT NULL,
  `producto_precio` double NOT NULL,
  `producto_imagen` varchar(100) NOT NULL,
  `producto_tipo` varchar(32) NOT NULL,
  `producto_sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto_nombre`, `producto_talle`, `producto_precio`, `producto_imagen`, `producto_tipo`, `producto_sexo`) VALUES
(1, 'Remera Lisa', 'M', 1000, 'tshirt.png', 'remera', 0),
(2, 'Remera Algodon', 'S', 1122, 'tshirt.png', 'remera', 1),
(3, 'Remera Lisa', 'X', 899, 'tshirt.png', 'remera', 1),
(4, 'Remera Estampada', 'XXL', 1000, 'tshirt.png', 'remera', 0),
(5, 'Remera Dibujo', 'XL', 1220, 'tshirt.png', 'remera', 1),
(6, 'Remera Roja', 'X', 1890, 'tshirt.png', 'remera', 1),
(7, 'Remera Anime', 'M', 1125, 'tshirt.png', 'remera', 0),
(8, 'Remera Japonesa', 'L', 1000, 'tshirt.png', 'remera', 0),
(9, 'Remera Japonesa', 'XXXL', 2000, 'tshirt.png', 'remera', 1),
(10, 'Remera Rock', 'S', 3499, 'tshirt.png', 'remera', 1),
(11, 'Pantalon Chupin', 'X', 2300, 'trousers.png', 'pantalon', 0),
(12, 'Pantalon Vaquero', '50', 5500, 'trousers.png', 'pantalon', 1),
(13, 'Pantalon Vaquero Azul', '48', 2300, 'trousers.png', 'pantalon', 0),
(14, 'Pantalon Chupin', 'X', 1700, 'trousers.png', 'pantalon', 0),
(15, 'Pantalon Medio Blanco', 'XXL', 2300, 'trousers.png', 'pantalon', 0),
(16, 'Pantalon Corto', '39', 3600, 'trousers.png', 'pantalon', 1),
(17, 'Pantalon Chupin Largo', 'XL', 4000, 'trousers.png', 'pantalon', 0),
(18, 'Zapatilla Adidas', '45', 12000, 'zapas.png', 'calzado', 1),
(19, 'Zapatilla Nike', '35', 13444, 'zapas.png', 'calzado', 0),
(20, 'Zapatilla Fila', '39', 6700, 'zapas.png', 'calzado', 0),
(21, 'Zapatilla Jordan', '45', 24000, 'zapas.png', 'calzado', 1),
(22, 'Boxer Negro', 'X', 1100, 'panties.png', 'ropa_interior', 1),
(23, 'Panties Rosas', 'S', 2000, 'panties.png', 'ropa_interior', 0),
(24, 'Panties azules', 'S', 3000, 'panties.png', 'ropa_interior', 0),
(25, 'Boxer Blanco', 'X', 1000, 'panties.png', 'ropa_interior', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `username`, `user_password`) VALUES
(1, 'cristianpessio11@gmail.com', 'Venecio', '2277'),
(2, 'jacks2277@gmail.com', 'Vnco', '2277'),
(3, 'cristita@gmail.com', 'Patito', '1234'),
(4, 'crisian@gmail.com', 'Venenito', '2277'),
(5, 'cristianpessio11@gmail.com', 'Mada', '2277');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
