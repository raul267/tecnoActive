-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2019 a las 19:02:26
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoactive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bl`
--

CREATE TABLE `bl` (
  `bl` varchar(100) NOT NULL,
  `idEmbarque` varchar(30) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `internado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bl`
--

INSERT INTO `bl` (`bl`, `idEmbarque`, `cantidad`, `internado`) VALUES
('bl1', 'PDV-1/9', 21, 1),
('bl10', 'PDV-1/9', 232, 0),
('bl11', 'PDV-1/9', 323, 0),
('bl12', 'PDV-1/9', 23213, 0),
('bl13', 'PDV-1/9', 2323, 0),
('bl14', 'PDV-1/9', 2323, 0),
('bl15', 'PDV-1/9', 5654, 0),
('bl16', 'PDV-1/9', 65464, 0),
('bl17', 'PDV-1/9', 2323, 0),
('bl18', 'PDV-1/9', 23213, 0),
('bl19', 'PDV-1/9', 23213, 0),
('bl2', 'PDV-1/9', 23, 0),
('bl20', 'PDV-1/9', 323, 0),
('bl21', 'PDV-1/9', 434, 0),
('bl22', 'PDV-1/9', 323, 0),
('bl23', 'PDV-1/9', 434, 0),
('bl24', 'PDV-1/9', 2323, 0),
('bl25', 'PDV-1/9', 662, 0),
('bl26', 'PDV-1/9', 323, 0),
('bl27', 'PDV-1/9', 323, 0),
('bl28', 'PDV-1/9', 323, 0),
('bl29', 'PDV-1/9', 2323, 0),
('bl3', 'PDV-1/9', 1232, 0),
('bl30', 'PDV-1/9', 12321, 0),
('bl4', 'PDV-1/9', 3232, 0),
('bl5', 'PDV-1/9', 2323, 0),
('bl6', 'PDV-1/9', 123213, 0),
('bl7', 'PDV-1/9', 213231, 0),
('bl8', 'PDV-1/9', 123213, 0),
('bl9', 'PDV-1/9', 3434, 0),
('blr', 'pdv-2/2', 32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` varchar(20) NOT NULL,
  `idProducto` varchar(11) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `cantidadPedido` double NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idProducto`, `proveedor`, `cantidadPedido`, `fechaInicio`, `fechaTermino`) VALUES
('PDV-1', 'AP 40', 'proveedor', 45, '2019-01-22', '2019-01-22'),
('pdv-2', 'AP 40', 'asdsad', 32, '2019-01-02', '2019-01-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `cliente` varchar(200) NOT NULL,
  `tipoDocumento` varchar(200) NOT NULL,
  `facturaNro` int(200) NOT NULL,
  `fechaEmision` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `montoTotal` double NOT NULL,
  `idProducto` varchar(200) NOT NULL,
  `cantidadKG` double NOT NULL,
  `idDespacho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`cliente`, `tipoDocumento`, `facturaNro`, `fechaEmision`, `fechaEntrega`, `montoTotal`, `idProducto`, `cantidadKG`, `idDespacho`) VALUES
('Yo', 'Guia de despacho electronica', 1, '2019-01-24', '2019-01-25', 5254, 'AP 40', 25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despachosemanal`
--

CREATE TABLE `despachosemanal` (
  `id` int(100) NOT NULL,
  `idProducto` varchar(30) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `cantidad` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarque`
--

CREATE TABLE `embarque` (
  `idEmbarque` varchar(200) NOT NULL,
  `idCompra` varchar(200) NOT NULL,
  `cantContenedores` int(11) NOT NULL,
  `linea` varchar(11) DEFAULT NULL,
  `motoNave` varchar(100) DEFAULT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `pSeguro` varchar(200) DEFAULT NULL,
  `puertoDestino` varchar(200) DEFAULT NULL,
  `embarcador` varchar(200) DEFAULT NULL,
  `consignee` varchar(200) DEFAULT NULL,
  `tMaritimo` int(11) DEFAULT NULL,
  `coMODATO` int(11) DEFAULT NULL,
  `gateIn` int(11) DEFAULT NULL,
  `diasLibres` int(11) DEFAULT NULL,
  `depositoDevVacio` int(11) DEFAULT NULL,
  `lote` varchar(200) DEFAULT NULL,
  `enPuerto` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `embarque`
--

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantContenedores`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `pSeguro`, `puertoDestino`, `embarcador`, `consignee`, `tMaritimo`, `coMODATO`, `gateIn`, `diasLibres`, `depositoDevVacio`, `lote`, `enPuerto`) VALUES
('PDV-1/1', 'PDV-1', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/10', 'PDV-1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/11', 'PDV-1', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/12', 'PDV-1', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/13', 'PDV-1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/14', 'PDV-1', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/2', 'PDV-1', 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/3', 'PDV-1', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/4', 'PDV-1', 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/5', 'PDV-1', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/6', 'PDV-1', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/7', 'PDV-1', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/8', 'PDV-1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('PDV-1/9', 'PDV-1', 2, 'White Star', 'Titanic', '2019-01-10', '2019-01-26', 'pol', 'POd', 'Julio', 'consignee', 42, 1518, 4452, 51, 5, 'H565', 1),
('pdv-2/1', 'pdv-2', 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-2/2', 'pdv-2', 23, 'White Star', 'Titanic', '2019-01-03', '2019-01-16', 'pol', 'pod', 'julio', 'consignee', 1, 2, 3, 4, 5, 'H565', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internacion`
--

CREATE TABLE `internacion` (
  `idInternacion` int(11) NOT NULL,
  `nProvision` int(30) NOT NULL,
  `bl` varchar(200) NOT NULL,
  `transferido` decimal(30,0) NOT NULL,
  `nIdentDI` varchar(30) NOT NULL,
  `fechaPagoDI` date NOT NULL,
  `fa` varchar(30) NOT NULL,
  `faFile` varchar(100) NOT NULL,
  `fechaProvision` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `internacion`
--

INSERT INTO `internacion` (`idInternacion`, `nProvision`, `bl`, `transferido`, `nIdentDI`, `fechaPagoDI`, `fa`, `faFile`, `fechaProvision`) VALUES
(1, 55, 'bl1', '2500', '84454', '2019-01-11', '544', 'PDFS/bl1.', '2019-01-04'),
(2, 55, 'blr', '2500', '84454', '2019-01-18', '323', 'PDFS/blr.pdf', '2019-01-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `valor`) VALUES
('AP 40', 'Galletera', '1000'),
('CF 40', 'Chocolatera', '1000'),
('KC 35', 'Chocolatera', '1000'),
('KK 32', 'Heladera', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `fechaGeneracion` date NOT NULL,
  `fechaPago` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `factura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `idStock` int(10) NOT NULL,
  `bl` varchar(10) NOT NULL,
  `internadas` int(30) NOT NULL DEFAULT '0',
  `porInternar` int(30) NOT NULL DEFAULT '0',
  `despachadas` int(30) NOT NULL DEFAULT '0',
  `stock` int(30) NOT NULL DEFAULT '0',
  `resolucion` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`idStock`, `bl`, `internadas`, `porInternar`, `despachadas`, `stock`, `resolucion`) VALUES
(1, 'bl1', 21, 0, 0, 21, 0),
(2, 'bl2', 0, 22, 0, 0, 0),
(3, 'bl3', 0, 23, 0, 0, 0),
(4, 'bl4', 0, 24, 0, 0, 0),
(5, 'bl5', 0, 25, 0, 0, 0),
(6, 'bl6', 0, 26, 0, 0, 0),
(7, 'bl7', 0, 27, 0, 0, 0),
(8, 'bl8', 0, 28, 0, 0, 0),
(9, 'bl9', 0, 29, 0, 0, 0),
(10, 'bl10', 0, 30, 0, 0, 0),
(11, 'bl11', 0, 31, 0, 0, 0),
(12, 'bl12', 0, 213, 0, 0, 0),
(13, 'bl14', 0, 232, 0, 0, 0),
(14, 'bl13', 0, 90, 0, 0, 0),
(15, 'bl16', 0, 12, 0, 0, 0),
(16, 'bl15', 0, 23, 0, 0, 0),
(17, 'bl1', 21, 0, 0, 21, 0),
(18, 'bl2', 0, 23, 0, 0, 0),
(19, 'bl3', 0, 1232, 0, 0, 0),
(20, 'bl4', 0, 3232, 0, 0, 0),
(21, 'bl5', 0, 2323, 0, 0, 0),
(22, 'bl6', 0, 123213, 0, 0, 0),
(23, 'bl7', 0, 213231, 0, 0, 0),
(24, 'bl8', 0, 123213, 0, 0, 0),
(25, 'bl9', 0, 3434, 0, 0, 0),
(26, 'bl10', 0, 232, 0, 0, 0),
(27, 'bl11', 0, 323, 0, 0, 0),
(28, 'bl12', 0, 23213, 0, 0, 0),
(29, 'bl13', 0, 2323, 0, 0, 0),
(30, 'bl14', 0, 2323, 0, 0, 0),
(31, 'bl15', 0, 5654, 0, 0, 0),
(32, 'bl16', 0, 65464, 0, 0, 0),
(33, 'bl17', 0, 2323, 0, 0, 0),
(34, 'bl18', 0, 23213, 0, 0, 0),
(35, 'bl19', 0, 23213, 0, 0, 0),
(36, 'bl20', 0, 323, 0, 0, 0),
(37, 'bl21', 0, 434, 0, 0, 0),
(38, 'bl22', 0, 323, 0, 0, 0),
(39, 'bl23', 0, 434, 0, 0, 0),
(40, 'bl24', 0, 2323, 0, 0, 0),
(41, 'bl25', 0, 662, 0, 0, 0),
(42, 'bl26', 0, 323, 0, 0, 0),
(43, 'bl27', 0, 323, 0, 0, 0),
(44, 'bl28', 0, 323, 0, 0, 0),
(45, 'bl29', 0, 2323, 0, 0, 0),
(46, 'bl30', 0, 12321, 0, 0, 0),
(47, 'blr', 32, 0, 25, 7, 0);

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
-- Indices de la tabla `bl`
--
ALTER TABLE `bl`
  ADD PRIMARY KEY (`bl`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `despacho`
--
ALTER TABLE `despacho`
  ADD PRIMARY KEY (`idDespacho`);

--
-- Indices de la tabla `despachosemanal`
--
ALTER TABLE `despachosemanal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `embarque`
--
ALTER TABLE `embarque`
  ADD PRIMARY KEY (`idEmbarque`);

--
-- Indices de la tabla `internacion`
--
ALTER TABLE `internacion`
  ADD PRIMARY KEY (`idInternacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idStock`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `despacho`
--
ALTER TABLE `despacho`
  MODIFY `idDespacho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `despachosemanal`
--
ALTER TABLE `despachosemanal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `internacion`
--
ALTER TABLE `internacion`
  MODIFY `idInternacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
