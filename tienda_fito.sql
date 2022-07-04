-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2022 a las 14:09:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `producto_nombre` varchar(32) NOT NULL,
  `producto_talle` varchar(32) NOT NULL,
  `producto_precio` double NOT NULL,
  `producto_imagen` varchar(100) NOT NULL,
  `producto_tipo` varchar(32) NOT NULL,
  `producto_sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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
(11, 'Pantalon Chupin', 'X', 2300, 'trousers.png', 'pantalon', 1),
(12, 'Pantalon Vaquero', '50', 5500, 'trousers.png', 'pantalon', 1),
(13, 'Pantalon Vaquero Azul', '48', 2300, 'trousers.png', 'pantalon', 0),
(14, 'Pantalon Chupin Negro', '30', 1700, 'trousers.png', 'pantalon', 0),
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

ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

