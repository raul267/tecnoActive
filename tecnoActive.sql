-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2018 a las 06:11:37
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
('JJP-JJ', 1, 'Kokooo', 60, '2018-12-19', '2018-12-22'),
('Milk-kk', 1, 'tecPro', 43, '2018-12-19', '2018-12-20'),
('MKV-JG', 1, 'tecPro', 6, '2018-12-18', '2019-02-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarque`
--

CREATE TABLE `embarque` (
  `idEmbarque` varchar(11) NOT NULL,
  `idCompra` varchar(30) NOT NULL,
  `cantContenedores` int(11) NOT NULL,
  `bl` varchar(30) NOT NULL,
  `linea` varchar(11) NOT NULL,
  `motoNave` varchar(30) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `enPuerto` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `embarque`
--

INSERT INTO `embarque` (`idEmbarque`, `idCompra`, `cantContenedores`, `bl`, `linea`, `motoNave`, `fechaPedido`, `fechaEntrega`, `enPuerto`) VALUES
('JJP-JJ-1', 'JJP-JJ', 5, 'JJ/II', 'Recta', 'Poseidon', '2018-12-12', '2018-12-30', 0),
('JJP-JJ-2', 'JJP-JJ', 2, 'JJ/II/P', 'Curva', 'Perla negra', '2018-12-26', '2018-12-23', 0),
('JJP-JJ-3', 'JJP-JJ', 7, 'KK/PP', 'Pirata', 'Holandes Herrante', '2018-12-19', '2018-12-23', 0),
('JJP-JJ-4', 'JJP-JJ', 5, 'II', 'OO', 'Comodoro', '2018-12-19', '2019-01-13', 0),
('JJP-JJ-5', 'JJP-JJ', 90, 'Lp', 'LL', 'nave', '2018-12-21', '2019-01-20', 0),
('Milk-kk-1', 'Milk-kk', 3, 'blbl', 'White Star', 'asdasd', '2018-11-28', '2018-12-21', 0),
('Milk-kk-2', 'Milk-kk', 4, 'xzczxc', 'White Star', 'Olimpic', '2018-12-18', '2018-12-21', 0),
('Milk-kk-3', 'Milk-kk', 2, 'gfdgfd', 'ghgfhg', 'ertret', '2018-12-04', '2018-12-28', 1),
('Milk-kk-4', 'Milk-kk', 6, 'ghghgfh', 'dfgfdgfd', 'fghgfh', '2018-12-20', '2018-12-29', 0),
('Milk-kk-5', 'Milk-kk', 7, 'erewrew', 'tertre', 'fhgfg', '2018-12-29', '2019-01-04', 0),
('MKV-JG-1', 'MKV-JG', 3, 'no/se/que/bl/poner', 'White Star', 'Titanic', '2018-12-09', '2018-12-17', 1),
('MKV-JG-2', 'MKV-JG', 4, 'ahora/tengo/bl', 'White Star', 'Olimpic', '2018-12-22', '2018-12-30', 1);

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
