CREATE DATABASE  BD_JJ;
use BD_JJ;
CREATE TABLE `clientes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `documento` INT NOT NULL UNIQUE, -- Haciendo el campo `documento` único
  `nombre` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  KEY `idx_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria`)
);
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
CREATE TABLE `compras` (
  `id_compras` int NOT NULL AUTO_INCREMENT,
  `documento` int NOT NULL,
  `id_producto` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int DEFAULT NULL,
  `impuesto` int DEFAULT NULL,
  PRIMARY KEY (`id_compras`),
  KEY `fk_clientes_compras` (`documento`),
  KEY `fk_productos_compras` (`id_producto`),
  CONSTRAINT `fk_clientes_compras` FOREIGN KEY (`documento`) REFERENCES `clientes` (`documento`),
  CONSTRAINT `fk_productos_compras` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `carrito_de_compras` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `documento` int NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  CONSTRAINT `fk_productos_carrito_de_compras` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `historial_de_compras` (
  `id_historial_de_compras` int NOT NULL AUTO_INCREMENT,
  `id_compras` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  PRIMARY KEY (`id_historial_de_compras`),
  KEY `fk_compras_historial_de_compras` (`id_compras`),
  CONSTRAINT `fk_compras_historial_de_compras` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id_compras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `facturas` (
  `id_factura` int NOT NULL AUTO_INCREMENT,
  `documento` int NOT NULL,
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
  KEY `fk_clientes_facturas` (`documento`),
  KEY `fk_productos_facturas` (`id_producto`),
  KEY `fk_categorias_facturas` (`id_categoria`),
  CONSTRAINT `fk_categorias_facturas` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  CONSTRAINT `fk_clientes_facturas` FOREIGN KEY (`documento`) REFERENCES `clientes` (`documento`),
  CONSTRAINT `fk_compras_facturas` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id_compras`),
  CONSTRAINT `fk_productos_facturas` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `id_producto` int NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
);




