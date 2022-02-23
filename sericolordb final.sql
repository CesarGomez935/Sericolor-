-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2022 a las 22:08:48
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sericolordb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `idcatalogo` int(11) NOT NULL,
  `pdf` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `cita` text COLLATE utf16_spanish_ci NOT NULL,
  `versiculo` text COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`idcatalogo`, `pdf`, `descripcion`, `telefono`, `correo`, `cita`, `versiculo`) VALUES
(1, 0x313634313136343834325044462e706466, 'Catalogo 2021, Actualizar Dirección', 55038173, 'sericolorpublicidad@hotmail.com', '\"Orando en todo tiempo con toda oración y súplica en el Espíritu, y velando en ello con toda perseverancia y súplica por todos los santos;\"', 'Efesios 6:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `descripcion`) VALUES
(1, 'Sublimación'),
(2, 'Serigrafía\r\n'),
(3, 'Impresión Digital'),
(4, 'Bordado'),
(5, 'Multiple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `IdPersona` int(10) NOT NULL,
  `TipoDeCliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RUC` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `IdPersona`, `TipoDeCliente`, `cargo`, `RUC`) VALUES
(1, 1, 'Persona Natural', 'na', 'na');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle-orden-imp`
--

CREATE TABLE `detalle-orden-imp` (
  `iddetalleordenimp` int(10) NOT NULL,
  `IdInsumos` int(10) NOT NULL,
  `IdMaestro` int(10) NOT NULL,
  `IdCategoria` int(10) NOT NULL,
  `ancho` double NOT NULL,
  `alto` double NOT NULL,
  `mt2` double NOT NULL,
  `p_m` double NOT NULL,
  `costo` double NOT NULL,
  `cantidad` double NOT NULL,
  `total` double NOT NULL,
  `observacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle-orden-sub,bor,ser`
--

CREATE TABLE `detalle-orden-sub,bor,ser` (
  `iddetalleordensu` int(10) NOT NULL,
  `IdInsumos` int(10) NOT NULL,
  `IdMaestro` int(10) NOT NULL,
  `IdCategoria` int(10) NOT NULL,
  `pecho_izquierdo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pecho_derecho` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `manga_izquierda` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `manga_derecha` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `espalda` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `observacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `IdInsumo` int(10) NOT NULL,
  `Tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idcategoria` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`IdInsumo`, `Tipo`, `Descripcion`, `idcategoria`) VALUES
(1, 'Camisa', '2', 5),
(2, 'Camisa', '4', 5),
(3, 'Camisa', '6', 5),
(4, 'Camisa', '8', 5),
(5, 'Camisa', '10\n', 5),
(6, 'Camisa', '12', 5),
(7, 'Camisa', '14', 5),
(8, 'Camisa ', '16', 5),
(9, 'Camisa', '18', 5),
(10, 'Camisa', 'S Dama', 5),
(11, 'Camisa', 'S Caballero', 5),
(12, 'Camisa', 'M Dama', 5),
(13, 'Camisa', 'M Caballero', 5),
(14, 'Camisa', 'L Dama\n', 5),
(15, 'Camisa', 'L Caballero', 5),
(16, 'Camisa', 'XL Dama', 5),
(17, 'Camisa', 'XL Caballero', 5),
(18, 'Camisa', '2XL Dama\n', 5),
(19, 'Camisa ', '2XL Caballero', 5),
(20, 'Camisa', '3XL Dama', 5),
(21, 'Camisa', '3XL Caballero', 5),
(22, 'Camisa', '5XL Dama', 5),
(23, 'Camisa', '5XL Caballero', 5),
(24, 'Taza', 'Taza Mágica', 1),
(25, 'Lapicero', 'Lapicero', 1),
(26, 'Llavero MDF', 'Llavero', 1),
(27, 'Banner', 'Banner Tuvo PVC', 3),
(28, 'Microperforado', 'Microperforado Laser', 3),
(29, 'Microperforado', 'Etiqueta', 3),
(30, 'Empastado', 'Estado de tesis', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `idmaestro` int(10) NOT NULL,
  `IdCliente` int(10) NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  `Notas` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total_costo` double NOT NULL,
  `saldo` double NOT NULL,
  `CodSeguimiento` int(10) DEFAULT NULL,
  `abono` double DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_de_pago`
--

CREATE TABLE `metodo_de_pago` (
  `Id_Metodo_de_Pago` int(5) NOT NULL,
  `Tipo_de_pago` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `metodo_de_pago`
--

INSERT INTO `metodo_de_pago` (`Id_Metodo_de_Pago`, `Tipo_de_pago`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta'),
(3, 'Transferencia Bancaria'),
(4, 'Movil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `IdPersona` int(5) NOT NULL,
  `Primer_Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Primer_Apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Segundo_Apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cedula` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Cedula`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'Cliente Genérico', '', '', '', '', 0, '', ''),
(5, 'Administrador', '', '', '', '', 0, '', ''),
(17, 'César', 'Efraín', 'Gómez', 'Barrera', '441-021199-1003X', 86983739, 'cefraingomez@gmail.com', 'Yaguare'),
(18, 'kevin', 'Jose', 'Gonzalez', 'Viera', 'w', 93912, 'louisfonseca30@gmail.com', 'uwu'),
(62, 'Luis', 'Fernando', 'Fonseca', 'Blandón', '441-300701-1000M', 84901824, 'louisfonseca30@gmail.com', 'De la Reynaga 1/2 C. al Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `IdPromocion` int(11) NOT NULL,
  `Imagen` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`IdPromocion`, `Imagen`, `descripcion`) VALUES
(10, 0x313633393432373535302e6a7067, 'Imagen promocional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `IdMaestro` int(10) NOT NULL,
  `Id_Metodo_de_Pago` int(5) NOT NULL,
  `Fecha_de_pago` date NOT NULL,
  `Cod_Recibo` int(255) DEFAULT NULL,
  `idtipo_de_pago` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `IdServicio` int(10) NOT NULL,
  `titulo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf16_spanish_ci NOT NULL,
  `imagen` blob NOT NULL,
  `imagenrep` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`IdServicio`, `titulo`, `descripcion`, `imagen`, `imagenrep`) VALUES
(2, 'Serigrafia', 'La serigrafía es una técnica de impresión en el método de reproducción de documentos e imágenes sobre cualquier material, y consiste en transferir una tinta a través de una malla tensada en un marco. El paso de la tinta se bloquea en las áreas donde no habrá imagen mediante una emulsión o barniz, quedando libre la zona donde pasará la tinta.\r\n\r\nEl sistema de impresión es repetitivo una vez que el primer modelo se ha logrado, la impresión puede ser repetida cientos y hasta miles de veces sin perder resolución.', 0x313634313135373936392e706e67, 0x313634313135373837397265702e6a7067),
(5, 'Sublimacion', 'Sublimación es el proceso de arte gráfico con el cual se logra la impresión del color sobre la tela usando altas temperaturas para realizar una fusión entre las moléculas de color y las de la tela.', 0x313634313537303035352e706e67, 0x313634313537303033397265702e6a7067),
(6, 'Bordado', 'El bordado es un arte que consiste en la ornamentación de una superficie flexible, generalmente una tela, por medio de hebras textiles. Los romanos llamaban a esta ornamentación plumarium opus, en virtud de la semejanza que tienen algunas de estas labores con la pluma del ave.', 0x313634313537303134312e706e67, 0x313634313537303134317265702e6a7067),
(7, 'Impresion Digital', 'Cuando hablamos de impresión digital, hacemos referencia al proceso de impresión directa de un archivo digital a cualquier tipo de material (papel, vinilo, tejidos…). Un claro ejemplo sería imprimir un documento o imagen con una impresora láser o de tinta.', 0x313634313537333331302e706e67, 0x313634313537303235307265702e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `Idslider` int(11) NOT NULL,
  `Imagen` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`Idslider`, `Imagen`, `descripcion`) VALUES
(10, 0x313633373238303534382e706e67, 'Imagen Slider Principal 1'),
(11, 0x313633373238303537302e706e67, 'Imagen Slider Principal 2'),
(12, 0x313633373238303539322e706e67, 'Imagen Slider Principal 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_pago`
--

CREATE TABLE `tipo_de_pago` (
  `idtipo_de_pago` int(10) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_de_pago`
--

INSERT INTO `tipo_de_pago` (`idtipo_de_pago`, `Descripcion`) VALUES
(1, 'Contado'),
(2, 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `idpersona` int(10) NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `Privilegios` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RolAsignado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `idpersona`, `Usuario`, `password`, `Privilegios`, `RolAsignado`, `estado`) VALUES
(3, 17, 'cego', 'eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9', 'Gestor', 'Recepcion', 1),
(4, 18, 'kev99', 'eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9', 'Administrador', 'Bordado', 1),
(32, 62, 'luis12', 'eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9', 'Administrador', 'Recepcion', 1),
(33, 5, 'Adminprueba', 'eyJpdiI6InQvbUNobjY1MFFtOVpwczk0b2k3M3c9PSIsInZhbHVlIjoiZ1c1aXdFdVJ4SzRmLzlSblZrWDN3Z25tV01UN2VMUEp4R1Q4RnhlekE4RT0iLCJtYWMiOiIxNWJhOTlhMzM2YTgwNzViYzU4ZDk1MGRhYjg0YjNjNGZkYTY1ZDRkMmY5NzE3Nzc0NWE4ZmMyMmIwNzg0MDNiIiwidGFnIjoiIn0=', 'Administrador', 'Recepcion', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idcatalogo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`),
  ADD KEY `Cliente_fk0` (`IdPersona`);

--
-- Indices de la tabla `detalle-orden-imp`
--
ALTER TABLE `detalle-orden-imp`
  ADD PRIMARY KEY (`iddetalleordenimp`),
  ADD KEY `Detalle-orden-Imp_fk1` (`IdMaestro`),
  ADD KEY `Detalle-orden-Imp_fk0` (`IdInsumos`),
  ADD KEY `IdCategoria` (`IdCategoria`);

--
-- Indices de la tabla `detalle-orden-sub,bor,ser`
--
ALTER TABLE `detalle-orden-sub,bor,ser`
  ADD PRIMARY KEY (`iddetalleordensu`),
  ADD KEY `Detalle-orden-Sub,Bor,Ser_fk0` (`IdInsumos`),
  ADD KEY `Detalle-orden-Sub,Bor,Ser_fk1` (`IdMaestro`),
  ADD KEY `IdCategoria` (`IdCategoria`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`IdInsumo`),
  ADD KEY `insumos_ibfk_1` (`idcategoria`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`idmaestro`),
  ADD KEY `Maestro_fk1` (`IdCliente`),
  ADD KEY `Maestro_fk2` (`IdUsuario`);

--
-- Indices de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  ADD PRIMARY KEY (`Id_Metodo_de_Pago`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IdPersona`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`IdPromocion`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD UNIQUE KEY `Cod_Recibo` (`Cod_Recibo`),
  ADD KEY `Recibo_fk0` (`IdMaestro`),
  ADD KEY `Recibo_fk1` (`Id_Metodo_de_Pago`),
  ADD KEY `idtipo_de_pago` (`idtipo_de_pago`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`IdServicio`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Idslider`);

--
-- Indices de la tabla `tipo_de_pago`
--
ALTER TABLE `tipo_de_pago`
  ADD PRIMARY KEY (`idtipo_de_pago`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `Usuario_fk0` (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `idcatalogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle-orden-imp`
--
ALTER TABLE `detalle-orden-imp`
  MODIFY `iddetalleordenimp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `detalle-orden-sub,bor,ser`
--
ALTER TABLE `detalle-orden-sub,bor,ser`
  MODIFY `iddetalleordensu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `IdInsumo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `idmaestro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  MODIFY `Id_Metodo_de_Pago` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `IdPersona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `IdPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `IdServicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `Idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_de_pago`
--
ALTER TABLE `tipo_de_pago`
  MODIFY `idtipo_de_pago` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Cliente_fk0` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`IdPersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle-orden-imp`
--
ALTER TABLE `detalle-orden-imp`
  ADD CONSTRAINT `Detalle-orden-Imp_fk0` FOREIGN KEY (`IdInsumos`) REFERENCES `insumos` (`IdInsumo`),
  ADD CONSTRAINT `Detalle-orden-Imp_fk1` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalle-orden-imp_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`idcategoria`);

--
-- Filtros para la tabla `detalle-orden-sub,bor,ser`
--
ALTER TABLE `detalle-orden-sub,bor,ser`
  ADD CONSTRAINT `Detalle-orden-Sub,Bor,Ser_fk0` FOREIGN KEY (`IdInsumos`) REFERENCES `insumos` (`IdInsumo`),
  ADD CONSTRAINT `Detalle-orden-Sub,Bor,Ser_fk1` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle-orden-sub,bor,ser_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`idcategoria`);

--
-- Filtros para la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD CONSTRAINT `insumos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD CONSTRAINT `Maestro_fk1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Maestro_fk2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `Recibo_fk0` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Recibo_fk1` FOREIGN KEY (`Id_Metodo_de_Pago`) REFERENCES `metodo_de_pago` (`Id_Metodo_de_Pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`idtipo_de_pago`) REFERENCES `tipo_de_pago` (`idtipo_de_pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Usuario_fk0` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`IdPersona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
