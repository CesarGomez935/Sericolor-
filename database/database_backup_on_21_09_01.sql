

CREATE TABLE `administracion` (
  `IDadministracion` int(10) NOT NULL,
  `detalles_de_administacion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IDadministracion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE `detalledelpedido` (
  `IDdetalledelpedido` int(10) NOT NULL AUTO_INCREMENT,
  `Tipo_de_pedido` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_de_producto` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pechoizquierdo` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pechoderecho` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mangaizquierda` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mangaderecha` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `espalda` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallasCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallamCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallalCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallaxlCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla2xlCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla3xlCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla5xlCaballero` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallasDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallamDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallalDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallaxlDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla2xlDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla3xlDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla5xlDama` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tallainfantil` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alto` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ancho` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio_cantidad` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nota` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`IDdetalledelpedido`),
  KEY `IDdetalledelpedido` (`IDdetalledelpedido`),
  KEY `IDdetalledelpedido_2` (`IDdetalledelpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO detalledelpedido (`IDdetalledelpedido`, `Tipo_de_pedido`, `tipo_de_producto`, `pechoizquierdo`, `pechoderecho`, `mangaizquierda`, `mangaderecha`, `espalda`, `tallasCaballero`, `tallamCaballero`, `tallalCaballero`, `tallaxlCaballero`, `talla2xlCaballero`, `talla3xlCaballero`, `talla5xlCaballero`, `tallasDama`, `tallamDama`, `tallalDama`, `tallaxlDama`, `talla2xlDama`, `talla3xlDama`, `talla5xlDama`, `tallainfantil`, `alto`, `ancho`, `precio_cantidad`, `cantidad`, `nota`) VALUES 
('1','Serigrafía','','efe','dasdaadads','132123123','fsfdsdfdsfsdf','fdsfsdfsdfsdf','','','','','','','','','','','','','','','','','','','','Laravel Dom');

INSERT INTO detalledelpedido (`IDdetalledelpedido`, `Tipo_de_pedido`, `tipo_de_producto`, `pechoizquierdo`, `pechoderecho`, `mangaizquierda`, `mangaderecha`, `espalda`, `tallasCaballero`, `tallamCaballero`, `tallalCaballero`, `tallaxlCaballero`, `talla2xlCaballero`, `talla3xlCaballero`, `talla5xlCaballero`, `tallasDama`, `tallamDama`, `tallalDama`, `tallaxlDama`, `talla2xlDama`, `talla3xlDama`, `talla5xlDama`, `tallainfantil`, `alto`, `ancho`, `precio_cantidad`, `cantidad`, `nota`) VALUES 
('2','Serigrafía','Camisas','Yelba','Nada','Nombre de la persona','Area','nada','5','4','4','10','','','','3','3','10','2','','','','','','','','5','Entregar el viernes');
