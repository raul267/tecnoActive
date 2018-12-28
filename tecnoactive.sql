-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2018 a las 21:44:22
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
  `internado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bl`
--

INSERT INTO `bl` (`bl`, `idEmbarque`, `internado`) VALUES
('bl1', 'PDV1/1', 1),
('bl2', 'PDV1/1', 0),
('bl3', 'PDV1/2', 0);

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
('PDV1', 'AP 40', 'Fruna', 100, '2018-12-20', '2018-12-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `rutEmisor` varchar(11) NOT NULL,
  `rutReceptor` int(11) NOT NULL,
  `tipoDocumento` varchar(40) NOT NULL,
  `facturaNro` int(11) NOT NULL,
  `fechaEmision` date NOT NULL,
  `montoTotal` int(10) NOT NULL,
  `idProducto` varchar(20) NOT NULL,
  `cantidadKG` int(11) NOT NULL,
  `idDespacho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarque`
--

CREATE TABLE `embarque` (
  `idEmbarque` varchar(11) NOT NULL,
  `idCompra` varchar(30) NOT NULL,
  `cantidad` int(30) NOT NULL,
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

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantidad`, `cantContenedores`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `pSeguro`, `puertoDestino`, `embarcador`, `consignee`, `tMaritimo`, `coMODATO`, `gateIn`, `diasLibres`, `depositoDevVacio`, `lote`, `enPuerto`) VALUES
('PDV1/1', 'PDV1', 0, 10, 'White Star', 'Titanic', '2018-12-19', '2018-12-21', 'pol', 'pod', 'julio', 'consignee', 1, 2, 3, 4, 5, 'H30', 1),
('PDV1/2', 'PDV1', 0, 20, 'MCS', 'Perla negra', '2018-12-14', '2018-12-30', 'pol', 'pod', 'julio', 'consignee', 1, 2, 3, 4, 5, 'H56', 0),
('PDV1/3', 'PDV1', 0, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0);

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
(1, 52, 'bl1', 6000, '84454', '2018-12-28', '2521', 'PDFS/bl1.pdf', '2018-12-28'),
(3, 55, 'bl3                           ', 2500, '455', '2018-12-29', '544', 'PDFS/bl3                                                              .jpg', '2018-12-28');

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
  `idEmbarque` varchar(10) NOT NULL,
  `internadas` int(30) NOT NULL DEFAULT '0',
  `porInternar` int(30) NOT NULL DEFAULT '0',
  `despachadas` int(30) NOT NULL DEFAULT '0',
  `stock` int(30) NOT NULL DEFAULT '0',
  `resolucion` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`idStock`, `idEmbarque`, `internadas`, `porInternar`, `despachadas`, `stock`, `resolucion`) VALUES
(24, 'PDV1/1', 0, 10, 0, 0, 0),
(25, 'PDV1/2', 0, 20, 0, 0, 0),
(26, 'PDV1/3', 0, 30, 0, 0, 0);

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
  MODIFY `idDespacho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `internacion`
--
ALTER TABLE `internacion`
  MODIFY `idInternacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
