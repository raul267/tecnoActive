-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2019 a las 14:59:20
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
('bl1', 'pdv-1/2', 90, 1),
('bl13', 'pdv2/1', 90, 1),
('bl2', 'pdv-1/2', 100, 0),
('bl3', 'pdv-1/2', 10, 0),
('bl4', 'pdv-2/4', 41, 0),
('bl5', 'pdv-2/4', 80, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` varchar(20) NOT NULL,
  `idProducto` varchar(11) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `cantidadPedido` decimal(5,1) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idProducto`, `proveedor`, `cantidadPedido`, `fechaInicio`, `fechaTermino`) VALUES
('asdasd', '0', 'asdasd', '0.0', '2019-01-31', '2019-02-21'),
('pdv-1', 'AP 40', 'proveedor', '50.0', '2019-01-11', '2019-01-25'),
('pdv-2', 'CF 40', 'Fruna', '50.0', '2019-02-08', '2019-02-24'),
('pdv2', 'KC 35', 'proveedor', '123.0', '2019-02-15', '2019-02-01');

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
  `cantidadKG` decimal(5,1) NOT NULL,
  `idDespacho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`cliente`, `tipoDocumento`, `facturaNro`, `fechaEmision`, `fechaEntrega`, `montoTotal`, `idProducto`, `cantidadKG`, `idDespacho`) VALUES
('Yo', 'Factura Electronica', 1, '2019-01-09', '2019-01-18', 500, 'AP 40', '1.0', 1),
('Yo', 'Factura Electronica', 1, '2019-01-03', '2019-01-26', 500, 'AP 40', '1.0', 2),
('Yo', 'Factura Electronica', 1, '2019-02-13', '2019-02-23', 4, 'AP 40', '5.0', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despachosemanal`
--

CREATE TABLE `despachosemanal` (
  `id` int(100) NOT NULL,
  `idProducto` varchar(30) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `cantidad` decimal(5,1) NOT NULL
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
  `tMaritimo` decimal(30,0) DEFAULT NULL,
  `coMODATO` decimal(30,0) DEFAULT NULL,
  `gateIn` decimal(30,0) DEFAULT NULL,
  `diasLibres` decimal(30,0) DEFAULT NULL,
  `depositoDevVacio` decimal(30,0) DEFAULT NULL,
  `lote` varchar(200) DEFAULT NULL,
  `enPuerto` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `embarque`
--

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantContenedores`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `pSeguro`, `puertoDestino`, `embarcador`, `consignee`, `tMaritimo`, `coMODATO`, `gateIn`, `diasLibres`, `depositoDevVacio`, `lote`, `enPuerto`) VALUES
('asdasd/1', 'asdasd', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('asdasd/2', 'asdasd', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-1/1', 'pdv-1', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-1/2', 'pdv-1', 20, 'White Star', 'Titanic', '2019-01-04', '2019-01-12', 'pol', 'pod', 'julio', 'consignee', '1', '2', '3', '4', '5', 'HH33', 1),
('pdv-2/1', 'pdv-2', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-2/2', 'pdv-2', 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-2/3', 'pdv-2', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
('pdv-2/4', 'pdv-2', 7, 'White Star', 'Titanic', '2019-02-14', '2019-02-09', 'pol', 'pod', 'julio', 'consignee', '1', '2', '3', '4', '5', 'LL992', 1),
('pdv2/1', 'pdv2', 33, 'White Star', 'Titanic', '2019-02-01', '2019-02-07', 'pol', 'pod', '3', 'consignee', '1', '2', '3', '4', '5', 'L 090', 1);

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
(1, 55, 'bl1', '2500', '84454', '2019-01-09', '23', 'PDFS/bl1.jpg', '2019-01-18'),
(2, 55, 'bl13', '2500', '84454', '2019-02-23', '544', 'PDFS/bl13.sql', '2019-02-21'),
(3, 55, 'bl2', '2500', '84454', '2019-02-07', '2521', 'PDFS/bl2.sql', '2019-02-01');

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
  `internadas` decimal(5,1) NOT NULL DEFAULT '0.0',
  `porInternar` decimal(5,1) NOT NULL DEFAULT '0.0',
  `despachadas` decimal(5,1) NOT NULL DEFAULT '0.0',
  `stock` decimal(5,1) NOT NULL DEFAULT '0.0',
  `resolucion` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`idStock`, `bl`, `internadas`, `porInternar`, `despachadas`, `stock`, `resolucion`) VALUES
(1, 'bl1', '90.0', '0.0', '7.0', '85.0', 0),
(2, 'bl2', '38.9', '61.1', '0.0', '38.9', 0),
(3, 'bl3', '0.0', '10.0', '0.0', '0.0', 0),
(4, 'bl13', '90.0', '0.0', '0.0', '90.0', 0),
(5, 'bl4', '0.0', '41.0', '0.0', '0.0', 0),
(6, 'bl5', '0.0', '80.0', '0.0', '0.0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipoUsuario` int(11) NOT NULL DEFAULT '1',
  `ultimaConexion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `password`, `tipoUsuario`, `ultimaConexion`) VALUES
(1, 'admin', 'admin', 0, '02/06/2019 4:19pm'),
(4, 'raul', '123', 1, '02/07/2019 9:51am'),
(5, 'joseluis', '1', 1, '02/06/2019 4:28pm');

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
  MODIFY `idDespacho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `despachosemanal`
--
ALTER TABLE `despachosemanal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `internacion`
--
ALTER TABLE `internacion`
  MODIFY `idInternacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
