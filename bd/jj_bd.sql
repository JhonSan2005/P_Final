use jj_bd;
CREATE DATABASE IF NOT EXISTS juan;
USE juan;

CREATE TABLE `carrito_de_compras` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  CONSTRAINT `fk_productos_carrito_de_compras` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `idx_id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categoria` VALUES (1,'Frenos','VA SOLA');

select count(*) from clientes where correo='pepito' and password='123';


select*from clientes;
CREATE TABLE `clientes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `documento` INT NOT NULL UNIQUE, -- Haciendo el campo `documento` único
  `nombre` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  KEY `idx_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


create table admin(
correo varchar(200) not null,
password varchar(50)not null,
primary key(correo)
)

select*from clientes ;
insert into admin (correo,password) value ('admin@gmail.com','admin123')


CREATE TABLE `productos` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `impuesto` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `id_categoria` int NOT NULL,
  `descripcion` Varchar(1000)not null,
  `imagen_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
);

drop table productos;

INSERT INTO `productos` (id_producto,nombre_producto,precio,impuesto,stock,id_categoria,imagen_url) VALUE ('4','Yamalube','50000','1','20','1','aceitico.png');

select*from productos;

CREATE TABLE `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria`)
);

select*from categorias;
















INSERT INTO `clientes` VALUES (1120,'Juan Diego','Juan@gmail.com','Juan123');
select*from productos;
DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id_compras` int NOT NULL AUTO_INCREMENT,
  `id_clientes` int NOT NULL,
  `id_producto` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int DEFAULT NULL,
  `impuesto` int DEFAULT NULL,
  PRIMARY KEY (`id_compras`),
  KEY `fk_clientes_compras` (`id_clientes`),
  KEY `fk_productos_compras` (`id_producto`),
  CONSTRAINT `fk_clientes_compras` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`),
  CONSTRAINT `fk_productos_compras` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `compras` VALUES (1,1120,1,3200.00,6,19);


CREATE TABLE `facturas` (
  `id_factura` int NOT NULL AUTO_INCREMENT,
  `id_clientes` int NOT NULL,
  `id_compras` int NOT NULL,
  `id_producto` int NOT NULL,
  `id_categoria` int NOT NULL,
  `id_pago` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado_de_factura` varchar(100) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `fk_compras_facturas` (`id_compras`),
  KEY `fk_clientes_facturas` (`id_clientes`),
  KEY `fk_productos_facturas` (`id_producto`),
  KEY `fk_categoria_facturas` (`id_categoria`),
  CONSTRAINT `fk_categoria_facturas` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  CONSTRAINT `fk_clientes_facturas` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`),
  CONSTRAINT `fk_compras_facturas` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id_compras`),
  CONSTRAINT `fk_productos_facturas` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `facturas` VALUES (1,1120,1,1,1,4,'2024-03-14','Va sola','pagado',3200.00);


CREATE TABLE `historial_de_compras` (
  `id_historial_de_compras` int NOT NULL AUTO_INCREMENT,
  `id_compras` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  PRIMARY KEY (`id_historial_de_compras`),
  KEY `fk_compras_historial_de_compras` (`id_compras`),
  CONSTRAINT `fk_compras_historial_de_compras` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id_compras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `metodo_de_pago` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `id_factura` int NOT NULL,
  `tipo_de_pago` varchar(100) NOT NULL,
  `numero_de_tarjeta` varchar(100) NOT NULL,
  `fecha_de_expiracion` datetime DEFAULT NULL,
  `codigo_de_seguiridad` int NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `fk_facturas_metodo_de_pago` (`id_factura`),
  CONSTRAINT `fk_facturas_metodo_de_pago` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `metodo_de_pago` VALUES (4,1,'fransferencia','7844','2025-05-11 00:00:00',5554);


CREATE TABLE `productos` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `impuesto` int DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `id_categoria` int NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `idx_id_producto` (`id_producto`),
  KEY `fk_categoria_productos` (`id_categoria`),
  CONSTRAINT `fk_categoria_productos` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `productos` VALUES (1,'frenos',3200.00,19,6,1);