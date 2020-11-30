-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 04:24:25
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
-- Base de datos: `restaurante`
--
CREATE DATABASE IF NOT EXISTS `restaurante` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurante`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `numeroCarro` int(11) NOT NULL,
  `identificadorProducto` int(11) NOT NULL,
  `precioTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id`, `numeroCarro`, `identificadorProducto`, `precioTotal`) VALUES
(9, 1, 51, 5000),
(10, 1, 49, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`numeroDocumento`) VALUES
('1005815552');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliario`
--

CREATE TABLE `domiciliario` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domiciliario`
--

INSERT INTO `domiciliario` (`numeroDocumento`) VALUES
('1006983232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `identificador` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `valor` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `numeroDocumentoCliente` varchar(11) NOT NULL,
  `numeroDocumentoDomiciliario` varchar(11) DEFAULT NULL,
  `idCarroCompras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `identificador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`identificador`, `nombre`, `descripcion`, `foto`, `precio`) VALUES
(48, 'Bandeja paisa', 'Carne extra jugosa', 'https://cdn.colombia.com/gastronomia/2011/08/02/bandeja-paisa-1616.gif', 30000),
(49, 'Carne llanera', 'Extra grande ', 'https://storage.contextoganadero.com/s3fs-public/blog/field_image/2020-05/1188_gastronomia-carne-a-la-llanera_1024x600.jpg', 10000),
(50, 'Tamal', 'Doble arepa y gaseosa incluida', 'https://2.bp.blogspot.com/-sPZyekqGxy0/VH1BYUwrnmI/AAAAAAAAB_w/vqwgdrsL-HI/s1600/Tamales%2BTolimenses%2BSySPMS.jpg', 10000),
(51, 'Lechona', 'Con insulso', 'https://cuponassets.cuponatic-latam.com/backendCo/uploads/imagenes_descuentos/137423/6226266bf23a1e98cd37aa401c52bfbca97efa28.S.jpg', 5000),
(52, 'Sancocho de gallina', 'Doble pollo', 'https://t1.rg.ltmcdn.com/es/images/1/8/1/img_sancocho_de_gallina_o_pollo_12181_600.jpg', 4000),
(54, 'Cazuela de mariscos', 'Con gaseosa incluida', 'https://www.goya.com/media/4126/cazuela-de-mariscos_spanish-style-shellfish-stew.jpg?quality=80', 3000),
(55, 'Gaseosa Coca-cola', 'Con y sin azucar', 'https://www.cocacola.es/content/dam/GO/CokeZone/Spain/Coca-Cola-Full-vidrio-Red-Zero.jpg', 2000),
(56, 'Gaseosa Colombiana', 'Personal ', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/176120-1000-1000/7702090022766-281-29.jpg?v=636114531436370000', 2000),
(58, 'Agua con gas ', 'Personal ', 'https://cdn2.totalcode.net/homesentry/product-zoom/es/agua-con-gas-cristal-600ml-2.jpg', 1000),
(59, 'Agua sin gas', 'Personal ', 'https://exitocol.vtexassets.com/arquivos/ids/1978221-800-auto?width=800&height=auto&aspect=true', 500),
(60, 'Jugo de mango ', 'Extra fruta', 'https://saboreando.tips/wp-content/uploads/jugo-de-mango.jpg', 2000),
(61, 'Jugo de lulo', 'Extra fruta', 'https://t1.rg.ltmcdn.com/es/images/2/9/3/img_jugo_de_lulo_6392_600_square.jpg', 2000),
(63, 'Jugo de guanabana ', 'Extra fruta y saludable', 'https://saboreando.tips/wp-content/uploads/jugo-de-guanabana.jpg', 2500),
(64, 'Postre de tres leches ', 'Con galletas ducales incluidas', 'https://t2.rg.ltmcdn.com/es/images/0/3/4/postre_de_tres_leches_frio_34430_600.jpg', 4000),
(65, 'Postre de maracuya', 'Con galletas saltin incluidas', 'https://t2.rg.ltmcdn.com/es/images/2/3/9/img_postre_de_maracuya_con_galletas_y_gelatina_58932_600_square.jpg', 4000),
(66, 'Postre de frutos rojos', 'Con galletas ducales incluidas', 'https://gastronomiaycia.republica.com/wp-content/photos/hangop_frutos2.jpg', 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numeroDocumento` varchar(11) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `contrasenia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`numeroDocumento`, `rol`, `nombre`, `apellido`, `telefono`, `direccion`, `email`, `estado`, `contrasenia`) VALUES
('1005815552', 'Cliente', 'Harry', 'Peralta', '3134026253', 'Calle 15 1-22', 'harry77094@gmail.com', 'Activo', ''),
('1006983232', 'Domiciliario', 'Santiago', 'Ballen', '313232312', 'Calle 19 Cra 1', 'santicomunicaciones@hotmail.com', 'libre', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`);

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identificadorProducto` (`identificadorProducto`),
  ADD KEY `identificadorProducto_2` (`identificadorProducto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`),
  ADD KEY `numeroDocumento_2` (`numeroDocumento`),
  ADD KEY `numeroDocumento_3` (`numeroDocumento`);

--
-- Indices de la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`identificador`),
  ADD UNIQUE KEY `idCarroCompras` (`idCarroCompras`),
  ADD UNIQUE KEY `numeroDocumentoDomiciliario` (`numeroDocumentoDomiciliario`),
  ADD KEY `numeroCliente` (`numeroDocumentoCliente`),
  ADD KEY `numeroDocumentoCliente` (`numeroDocumentoCliente`),
  ADD KEY `numeroDocumentoDomiciliario_2` (`numeroDocumentoDomiciliario`),
  ADD KEY `idCarroCompras_2` (`idCarroCompras`),
  ADD KEY `idCarroCompras_3` (`idCarroCompras`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`identificador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numeroDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`identificadorProducto`) REFERENCES `producto` (`identificador`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD CONSTRAINT `domiciliario_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`numeroDocumentoCliente`) REFERENCES `cliente` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`numeroDocumentoDomiciliario`) REFERENCES `domiciliario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idCarroCompras`) REFERENCES `carro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
