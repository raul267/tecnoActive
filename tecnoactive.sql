-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 17:39:33
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

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
('', 'PDV-1/3', 0, 0),
('b2', 'pdv-4/1', 0, 0),
('b6', 'pdv-3/1', 1556, 0),
('b71', 'pdv-3/2', 42, 0),
('bl1', 'PDV-1/1', 10, 1),
('bl2', 'PDV-1/1', 40, 1),
('bl3', 'PDV-1/1', 100, 1),
('bl34', 'pdv-2/1', 900, 1),
('bl4', 'PDV-1/2', 220, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` varchar(20) NOT NULL,
  `idProducto` varchar(11) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `cantidadPedido` int(250) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idProducto`, `proveedor`, `cantidadPedido`, `fechaInicio`, `fechaTermino`) VALUES
('PDV-1', 'KK 32', 'Fruna', 20, '2019-01-04', '2019-02-02'),
('pdv-2', 'AP 40', 'fruna', 15, '2019-01-09', '2019-01-16'),
('pdv-4', 'CF 40', 'fruna', 100, '2019-01-04', '2019-01-18'),
('pdv-5', 'CF 40', 'Fruna', 90, '2019-01-18', '2019-01-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `cliente` varchar(11) NOT NULL,
  `tipoDocumento` varchar(40) NOT NULL,
  `facturaNro` int(11) NOT NULL,
  `fechaEmision` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `montoTotal` int(10) NOT NULL,
  `idProducto` varchar(20) NOT NULL,
  `cantidadKG` int(11) NOT NULL,
  `idDespacho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`cliente`, `tipoDocumento`, `facturaNro`, `fechaEmision`, `fechaEntrega`, `montoTotal`, `idProducto`, `cantidadKG`, `idDespacho`) VALUES
('Burguer Kin', 'Factura Electronica', 2, '2019-01-26', '2019-01-17', 23, 'KK 32', 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarque`
--

CREATE TABLE `embarque` (
  `idEmbarque` varchar(11) NOT NULL,
  `idCompra` varchar(30) NOT NULL,
  `cantContenedores` int(11) NOT NULL,
  `linea` varchar(11) DEFAULT NULL,
  `motoNave` varchar(30) DEFAULT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `pSeguro` varchar(30) DEFAULT NULL,
  `puertoDestino` varchar(3) DEFAULT NULL,
  `embarcador` varchar(60) DEFAULT NULL,
  `consignee` varchar(20) DEFAULT NULL,
  `tMaritimo` int(11) DEFAULT NULL,
  `coMODATO` int(11) DEFAULT NULL,
  `gateIn` int(11) DEFAULT NULL,
  `diasLibres` int(11) DEFAULT NULL,
  `depositoDevVacio` int(11) DEFAULT NULL,
  `lote` varchar(10) NOT NULL,
  `enPuerto` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `embarque`
--

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantContenedores`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `pSeguro`, `puertoDestino`, `embarcador`, `consignee`, `tMaritimo`, `coMODATO`, `gateIn`, `diasLibres`, `depositoDevVacio`, `lote`, `enPuerto`) VALUES
('PDV-1/1', 'PDV-1', 13, 'White Star', 'Titanic', '2019-01-11', '2019-01-25', 'pol', 'pod', 'Julio', 'consignee', 1, 2, 3, 4, 5, 'HR-78', 1),
('PDV-1/2', 'PDV-1', 13, 'White Star', 'Titanic', '2019-01-24', '2019-01-26', 'pol', 'POd', 'julio', 'consignee', 1, 2, 3, 4, 5, 'H56', 0),
('pdv-2/1', 'pdv-2', 200, 'White Star', 'Titanic', '2019-01-10', '2019-01-26', 'pol', 'pod', 'Julio Cesar', 'Consignee', 1, 2, 3, 4, 5, 'HH56', 1),
('pdv-3/1', 'pdv-3', 13, 'White Star', 'Titanic', '2019-01-17', '2019-01-26', 'pol', 'pod', 'julio,', 'Raul Jose Strappa Le', 1, 3, 4, 5, 6, 'FF5', 1),
('pdv-3/2', 'pdv-3', 13, 'White Star', 'Titanic', '2019-01-18', '2019-01-18', 'pol', 'pod', 'julio', 'consignee', 1, 2, 3, 4, 5, 'FFGF6', 1),
('pdv-3/3', 'pdv-3', 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
('pdv-5/1', 'pdv-5', 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internacion`
--

CREATE TABLE `internacion` (
  `idInternacion` int(11) NOT NULL,
  `nProvision` int(30) NOT NULL,
  `bl` varchar(30) NOT NULL,
  `transferido` int(30) NOT NULL,
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
(1, 1, 'bl1', 4111, '2', '2019-01-15', '32', 'PDFS/bl1.docx', '2019-01-17'),
(2, 2, 'bl2', 5000, '12', '2019-01-25', '232', 'PDFS/bl2.pdf', '2019-01-19'),
(3, 23, 'bl4', 2500, '84454', '2019-01-25', '23', 'PDFS/bl4.pdf', '2019-01-12'),
(4, 2, 'bl34', 5000, '21', '2019-01-11', '21', 'PDFS/bl34.jfif', '2019-01-10'),
(5, 45, 'bl3', 455, '23', '2019-01-18', '2323', 'PDFS/bl3.jpg', '2019-01-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `valor`) VALUES
('AP 40', 'Galletera', 1000),
('CF 40', 'Chocolatera', 1000),
('KC 35', 'Chocolatera', 1000),
('KK 32', 'Heladera', 1000);

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
(1, 'bl1', -95, 0, 105, 0, 1),
(2, 'bl2', 5, 0, 35, 0, 0),
(3, 'bl3', 100, 0, 0, 0, 0),
(4, 'bl4', 120, 0, 100, 0, 1),
(5, 'bl34', 634, 0, 266, 0, 0),
(6, 'b6', 0, 1556, 0, 0, 0),
(7, 'b71', 0, 42, 0, 0, 0),
(8, '', 0, 0, 0, 0, 0),
(9, 'b2', 0, 0, 0, 0, 0);

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
  MODIFY `idDespacho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `internacion`
--
ALTER TABLE `internacion`
  MODIFY `idInternacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
