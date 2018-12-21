-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-12-2018 a las 06:00:24
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoActive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` varchar(20) NOT NULL,
  `idProducto` int(255) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `cantidadPedido` int(250) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idProducto`, `proveedor`, `cantidadPedido`, `fechaInicio`, `fechaTermino`) VALUES
('Milk', 2, 'tecPro', 323, '2018-12-29', '2018-12-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarque`
--

CREATE TABLE `embarque` (
  `idEmbarque` varchar(11) NOT NULL,
  `idCompra` varchar(30) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `cantContenedores` int(11) NOT NULL,
  `bl` varchar(30) DEFAULT NULL,
  `linea` varchar(11) DEFAULT NULL,
  `motoNave` varchar(30) DEFAULT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `pSeguro` varchar(30) DEFAULT NULL,
  `puertoDestino` varchar(3) DEFAULT NULL,
  `embarcador` varchar(60) DEFAULT NULL,
  `consignee` varchar(20) DEFAULT NULL,
  `tMaritimo` int(11) DEFAULT NULL,
  `gateIn` int(11) DEFAULT NULL,
  `diasLibres` int(11) DEFAULT NULL,
  `depositoDevVacio` int(11) DEFAULT NULL,
  `enPuerto` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `embarque`
--

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantidad`, `cantContenedores`, `bl`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `pSeguro`, `puertoDestino`, `embarcador`, `consignee`, `tMaritimo`, `gateIn`, `diasLibres`, `depositoDevVacio`, `enPuerto`) VALUES
('Milk-1', 'Milk', 900, 3, 'no/se/que/bl/poner', 'White Star', 'Titanic', '2018-12-21', '2018-12-27', NULL, '', '', '', 0, 0, 0, 0, 1),
('Milk-2', 'Milk', 500, 3, 'ahora/tengo/bl', 'black star', 'Olimpic', '2018-12-14', '2018-12-30', NULL, '', '', '', 0, 0, 0, 0, 0),
('Milk-3', 'Milk', 100, 2, 'ferer', 'Sparrow', 'Perla Negra', '0000-00-00', '0000-00-00', NULL, '', '', '', 0, 0, 0, 0, 1),
('Milk-4', 'Milk', 50, 5, 'quiero/un/bl', 'Barbosa', 'Venganza', '2018-12-22', '2018-12-23', NULL, '', '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `valor`) VALUES
(1, 'mouse', 5000),
(2, 'teclado', 10000),
(3, 'galleta', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `embarque`
--
ALTER TABLE `embarque`
  ADD PRIMARY KEY (`idEmbarque`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
