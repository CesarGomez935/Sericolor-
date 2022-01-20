

CREATE TABLE `persona` (
  `IdPersona` int(5) NOT NULL AUTO_INCREMENT,
  `Primer_Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Primer_Apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Segundo_Apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cedula` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('1','Cliente Genérico','','','','','0','','');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('2','Almacén MI FAVORITA',' ',' ',' ','','27724249','contacto@mifavorita.com','Esquina opuesta hotel ideal, salida Jinotega, Matagalpa');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('3','Allan','Daniel','Fonseca','Blandón','441-080893-1001A','86504972','allandanielfonseca@gmail.com','De la escuela la Reynaga 1/2 C. al Norte');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('4','José','Del Carmen','González','García','441-060875-1003M','57605849','josegonzales06@yahoo.com','Comarca San Nicolás');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('5','Administrador','','','','','0','','');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('17','César','Efraín','Gómez','Barrera','441-021199-1003X','86983739','cefraingomez@gmail.com','Yaguare');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('18','kevin','Jose','Gonzalez','Viera','w','93912','louisfonseca30@gmail.com','uwu');

INSERT INTO persona (IdPersona, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Direccion) VALUES ('62','Luis','Fernando','Fonseca','Blandón','441-300701-1000M','84901824','louisfonseca30@gmail.com','De la Reynaga 1/2 C. al Norte');


CREATE TABLE `categoria` (
  `idcategoria` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO categoria (idcategoria, descripcion) VALUES ('1','Sublimación');

INSERT INTO categoria (idcategoria, descripcion) VALUES ('2','Serigrafía
');

INSERT INTO categoria (idcategoria, descripcion) VALUES ('3','Impresión Digital');

INSERT INTO categoria (idcategoria, descripcion) VALUES ('4','Bordado');

INSERT INTO categoria (idcategoria, descripcion) VALUES ('5','Multiple');


CREATE TABLE `insumos` (
  `IdInsumo` int(10) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idcategoria` int(10) DEFAULT NULL,
  PRIMARY KEY (`IdInsumo`),
  KEY `insumos_ibfk_1` (`idcategoria`),
  CONSTRAINT `insumos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('1','Camisa','2','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('2','Camisa','4','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('3','Camisa','6','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('4','Camisa','8','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('5','Camisa','10
','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('6','Camisa','12','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('7','Camisa','14','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('8','Camisa ','16','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('9','Camisa','18','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('10','Camisa','S Dama','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('11','Camisa','S Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('12','Camisa','M Dama','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('13','Camisa','M Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('14','Camisa','L Dama
','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('15','Camisa','L Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('16','Camisa','XL Dama','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('17','Camisa','XL Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('18','Camisa','2XL Dama
','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('19','Camisa ','2XL Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('20','Camisa','3XL Dama','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('21','Camisa','3XL Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('22','Camisa','5XL Dama','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('23','Camisa','5XL Caballero','5');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('24','Taza','Taza Mágica','1');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('25','Lapicero','Lapicero','1');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('26','Llavero MDF','Llavero','1');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('27','Banner','Banner Tuvo PVC','3');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('28','Microperforado','Microperforado Laser','3');

INSERT INTO insumos (IdInsumo, Tipo, Descripcion, idcategoria) VALUES ('29','Microperforado','Etiqueta','3');


CREATE TABLE `promocion` (
  `IdPromocion` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`IdPromocion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO promocion (IdPromocion, Imagen, descripcion) VALUES ('10','1639427550.jpg','Imagen promocional');


CREATE TABLE `metodo_de_pago` (
  `Id_Metodo_de_Pago` int(5) NOT NULL AUTO_INCREMENT,
  `Tipo_de_pago` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_Metodo_de_Pago`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO metodo_de_pago (Id_Metodo_de_Pago, Tipo_de_pago) VALUES ('1','Efectivo');

INSERT INTO metodo_de_pago (Id_Metodo_de_Pago, Tipo_de_pago) VALUES ('2','Tarjeta');

INSERT INTO metodo_de_pago (Id_Metodo_de_Pago, Tipo_de_pago) VALUES ('3','Transferencia Bancaria');

INSERT INTO metodo_de_pago (Id_Metodo_de_Pago, Tipo_de_pago) VALUES ('4','Movil');


CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(10) NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `Privilegios` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RolAsignado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `Usuario_fk0` (`idpersona`),
  CONSTRAINT `Usuario_fk0` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`IdPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO usuario (IdUsuario, idpersona, Usuario, password, Privilegios, RolAsignado, estado) VALUES ('3','17','cego','eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9','Gestor','Recepcion','0');

INSERT INTO usuario (IdUsuario, idpersona, Usuario, password, Privilegios, RolAsignado, estado) VALUES ('4','18','kev99','eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9','Administrador','Bordado','0');

INSERT INTO usuario (IdUsuario, idpersona, Usuario, password, Privilegios, RolAsignado, estado) VALUES ('32','62','luis12','eyJpdiI6IngwWkJRUlovZHByUm84OTh4Z1NiRmc9PSIsInZhbHVlIjoiVnVMWk5FcE9lRnd0V2JlSTRRY3JZZz09IiwibWFjIjoiMDlhZDU5MGQ4MzgwZmYyNWQ4N2FhZmI0OGJlYTBmYjE1NmQ3YTUwNDEzOTJjMTgyZDU4ZmFkYTZhYWVhZTZlZiIsInRhZyI6IiJ9','Administrador','Recepcion','1');

INSERT INTO usuario (IdUsuario, idpersona, Usuario, password, Privilegios, RolAsignado, estado) VALUES ('33','5','Adminprueba','eyJpdiI6InQvbUNobjY1MFFtOVpwczk0b2k3M3c9PSIsInZhbHVlIjoiZ1c1aXdFdVJ4SzRmLzlSblZrWDN3Z25tV01UN2VMUEp4R1Q4RnhlekE4RT0iLCJtYWMiOiIxNWJhOTlhMzM2YTgwNzViYzU4ZDk1MGRhYjg0YjNjNGZkYTY1ZDRkMmY5NzE3Nzc0NWE4ZmMyMmIwNzg0MDNiIiwidGFnIjoiIn0=','Administrador','Recepcion','0');


CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `IdPersona` int(10) NOT NULL,
  `TipoDeCliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RUC` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`IdCliente`),
  KEY `Cliente_fk0` (`IdPersona`),
  CONSTRAINT `Cliente_fk0` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`IdPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO cliente (IdCliente, IdPersona, TipoDeCliente, cargo, RUC) VALUES ('1','1','Persona Natural','na','na');

INSERT INTO cliente (IdCliente, IdPersona, TipoDeCliente, cargo, RUC) VALUES ('2','2','Empresa','','n/a');

INSERT INTO cliente (IdCliente, IdPersona, TipoDeCliente, cargo, RUC) VALUES ('4','3','Persona_Natural','','');

INSERT INTO cliente (IdCliente, IdPersona, TipoDeCliente, cargo, RUC) VALUES ('5','4','Persona_Natural','','');


CREATE TABLE `maestro` (
  `idmaestro` int(10) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(10) NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  `Notas` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total_costo` double NOT NULL,
  `saldo` double NOT NULL,
  `CodSeguimiento` int(10) DEFAULT NULL,
  `abono` double DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idmaestro`),
  KEY `Maestro_fk1` (`IdCliente`),
  KEY `Maestro_fk2` (`IdUsuario`),
  CONSTRAINT `Maestro_fk1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Maestro_fk2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('27','4','32','2021-12-16','','400','300','5146977','100','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('29','4','4','2021-12-16','','500','250','2136005','250','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('30','2','3','2021-12-16','','16','6','4918984','10','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('32','4','4','2021-12-16','','20','10','1496429','10','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('34','4','4','2021-12-16','','20','10','1496429','10','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('37','4','4','2021-12-16','','20','10','1496429','10','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('40','4','4','2021-12-16','Prueba edicion Cambio de rutas','74','64','7588419','10','En Proceso');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('42','5','32','2021-12-21','','992','900','174975','92','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('47','5','32','2021-12-21','','992','900','174975','92','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('48','4','4','2021-12-21','N','72','22','5388679','50','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('51','1','33','2021-12-21','Psssss','0','100','3260746','8','Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('52','2','32','2022-01-02','Prueba','1000','900','7250622','100','No Completado');

INSERT INTO maestro (idmaestro, IdCliente, IdUsuario, fecha, Notas, total_costo, saldo, CodSeguimiento, abono, Estado) VALUES ('53','1','4','2022-01-04','Entregar día 18','0','-400','7262521','400','Realizado - No Entregado');


CREATE TABLE `tipo_de_pago` (
  `idtipo_de_pago` int(10) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtipo_de_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO tipo_de_pago (idtipo_de_pago, Descripcion) VALUES ('1','Contado');

INSERT INTO tipo_de_pago (idtipo_de_pago, Descripcion) VALUES ('2','Credito');


CREATE TABLE `recibo` (
  `IdMaestro` int(10) NOT NULL,
  `Id_Metodo_de_Pago` int(5) NOT NULL,
  `Fecha_de_pago` date NOT NULL,
  `Cod_Recibo` int(255) NOT NULL,
  `idtipo_de_pago` int(10) DEFAULT NULL,
  UNIQUE KEY `Cod_Recibo` (`Cod_Recibo`),
  KEY `Recibo_fk0` (`IdMaestro`),
  KEY `Recibo_fk1` (`Id_Metodo_de_Pago`),
  KEY `idtipo_de_pago` (`idtipo_de_pago`),
  CONSTRAINT `Recibo_fk0` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Recibo_fk1` FOREIGN KEY (`Id_Metodo_de_Pago`) REFERENCES `metodo_de_pago` (`Id_Metodo_de_Pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`idtipo_de_pago`) REFERENCES `tipo_de_pago` (`idtipo_de_pago`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('29','1','2021-12-16','0','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('30','1','2021-12-16','31','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('34','1','2021-12-16','54','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('27','1','2021-12-16','213','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('37','1','2021-12-16','544','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('53','1','2022-01-04','813','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('32','1','2021-12-16','978','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('52','1','2022-01-02','3432','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('40','1','2021-12-16','6632','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('42','1','2021-12-21','93021','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('47','1','2021-12-21','93023','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('48','1','2021-12-21','879321','1');

INSERT INTO recibo (IdMaestro, Id_Metodo_de_Pago, Fecha_de_pago, Cod_Recibo, idtipo_de_pago) VALUES ('51','1','2021-12-21','72879312','2');


CREATE TABLE `detalle-orden-sub,bor,ser` (
  `iddetalleordensu` int(10) NOT NULL AUTO_INCREMENT,
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
  `total` double DEFAULT NULL,
  PRIMARY KEY (`iddetalleordensu`),
  KEY `Detalle-orden-Sub,Bor,Ser_fk0` (`IdInsumos`),
  KEY `Detalle-orden-Sub,Bor,Ser_fk1` (`IdMaestro`),
  KEY `IdCategoria` (`IdCategoria`),
  CONSTRAINT `Detalle-orden-Sub,Bor,Ser_fk0` FOREIGN KEY (`IdInsumos`) REFERENCES `insumos` (`IdInsumo`),
  CONSTRAINT `Detalle-orden-Sub,Bor,Ser_fk1` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle-orden-sub,bor,ser_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('17','2','27','1','p','r','u','e','b','4',' ksadl','100','400');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('19','11','29','2','ds','kj','jbk','jb','h','5','kalsd ','100','500');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('22','16','34','2','','','','','','2','dwq','2','4');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('24','16','37','2','','','','','','2','dwq','2','4');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('26','17','40','4','','','','','Mi nombre','2','awdr','4','8');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('27','9','40','4','','','','','','5','adsdas','10','50');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('28','18','42','2','','','','','','31',' 432','32','992');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('33','18','47','2','','','','','','31',' 432','32','992');

INSERT INTO `detalle-orden-sub,bor,ser` (iddetalleordensu, IdInsumos, IdMaestro, IdCategoria, pecho_izquierdo, pecho_derecho, manga_izquierda, manga_derecha, espalda, Cantidad, observacion, precio, total) VALUES ('34','17','52','2','','','','','','10',' das','100','1000');


CREATE TABLE `detalle-orden-imp` (
  `iddetalleordenimp` int(10) NOT NULL AUTO_INCREMENT,
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
  `observacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`iddetalleordenimp`),
  KEY `Detalle-orden-Imp_fk1` (`IdMaestro`),
  KEY `Detalle-orden-Imp_fk0` (`IdInsumos`),
  KEY `IdCategoria` (`IdCategoria`),
  CONSTRAINT `Detalle-orden-Imp_fk0` FOREIGN KEY (`IdInsumos`) REFERENCES `insumos` (`IdInsumo`),
  CONSTRAINT `Detalle-orden-Imp_fk1` FOREIGN KEY (`IdMaestro`) REFERENCES `maestro` (`idmaestro`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `detalle-orden-imp_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `detalle-orden-imp` (iddetalleordenimp, IdInsumos, IdMaestro, IdCategoria, ancho, alto, mt2, p_m, costo, cantidad, total, observacion) VALUES ('17','27','30','3','2','2','4','2','8','2','16','dsa');

INSERT INTO `detalle-orden-imp` (iddetalleordenimp, IdInsumos, IdMaestro, IdCategoria, ancho, alto, mt2, p_m, costo, cantidad, total, observacion) VALUES ('18','27','32','3','2','2','4','2','8','2','16','das');

INSERT INTO `detalle-orden-imp` (iddetalleordenimp, IdInsumos, IdMaestro, IdCategoria, ancho, alto, mt2, p_m, costo, cantidad, total, observacion) VALUES ('23','27','40','3','2','2','4','2','8','2','16','Editar bin');

INSERT INTO `detalle-orden-imp` (iddetalleordenimp, IdInsumos, IdMaestro, IdCategoria, ancho, alto, mt2, p_m, costo, cantidad, total, observacion) VALUES ('24','27','51','3','4','3','12','3','36','3','108','asdasdasd');


CREATE TABLE `slider` (
  `Idslider` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Idslider`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO slider (Idslider, Imagen, descripcion) VALUES ('10','1637280548.png','Imagen Slider Principal 1');

INSERT INTO slider (Idslider, Imagen, descripcion) VALUES ('11','1637280570.png','Imagen Slider Principal 2');

INSERT INTO slider (Idslider, Imagen, descripcion) VALUES ('12','1637280592.png','Imagen Slider Principal 3');


CREATE TABLE `catalogo` (
  `idcatalogo` int(11) NOT NULL AUTO_INCREMENT,
  `pdf` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `cita` text COLLATE utf16_spanish_ci NOT NULL,
  `versiculo` text COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`idcatalogo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;


INSERT INTO catalogo (idcatalogo, pdf, descripcion, telefono, correo, cita, versiculo) VALUES ('1','1641164842PDF.pdf','Catalogo 2021, Actualizar Dirección','86983739','cefraingomez@gmail.com','"Orando en todo tiempo con toda oración y súplica en el Espíritu, y velando en ello con toda perseverancia y súplica por todos los santos;"','Efesios 6:18');


CREATE TABLE `servicios` (
  `IdServicio` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf16_spanish_ci NOT NULL,
  `imagen` blob NOT NULL,
  `imagenrep` blob NOT NULL,
  PRIMARY KEY (`IdServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;


INSERT INTO servicios (IdServicio, titulo, descripcion, imagen, imagenrep) VALUES ('2','Serigrafia','La serigrafía es una técnica de impresión en el método de reproducción de documentos e imágenes sobre cualquier material, y consiste en transferir una tinta a través de una malla tensada en un marco. El paso de la tinta se bloquea en las áreas donde no habrá imagen mediante una emulsión o barniz, quedando libre la zona donde pasará la tinta.

El sistema de impresión es repetitivo una vez que el primer modelo se ha logrado, la impresión puede ser repetida cientos y hasta miles de veces sin perder resolución.','1641157969.png','1641157879rep.jpg');

INSERT INTO servicios (IdServicio, titulo, descripcion, imagen, imagenrep) VALUES ('5','Sublimacion','Sublimación es el proceso de arte gráfico con el cual se logra la impresión del color sobre la tela usando altas temperaturas para realizar una fusión entre las moléculas de color y las de la tela.','1641570055.png','1641570039rep.jpg');

INSERT INTO servicios (IdServicio, titulo, descripcion, imagen, imagenrep) VALUES ('6','Bordado','El bordado es un arte que consiste en la ornamentación de una superficie flexible, generalmente una tela, por medio de hebras textiles. Los romanos llamaban a esta ornamentación plumarium opus, en virtud de la semejanza que tienen algunas de estas labores con la pluma del ave.','1641570141.png','1641570141rep.jpg');

INSERT INTO servicios (IdServicio, titulo, descripcion, imagen, imagenrep) VALUES ('7','Impresion Digital','Cuando hablamos de impresión digital, hacemos referencia al proceso de impresión directa de un archivo digital a cualquier tipo de material (papel, vinilo, tejidos…). Un claro ejemplo sería imprimir un documento o imagen con una impresora láser o de tinta.','1641573310.png','1641570250rep.jpg');
