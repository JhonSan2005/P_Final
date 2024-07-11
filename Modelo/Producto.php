<?php
require_once('conexion.php');

class Producto {
    private static function conectar() {
        return Conexion::conectar(); // Llama al método estático de la clase Conexion para obtener la conexión
    }

    public static function agregarProducto($id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare("INSERT INTO productos (id_producto, nombre_producto, precio, impuesto, stock, id_categoria, descripcion, imagen_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $consulta->bind_param('ssddisss', $id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen);
        $resultado = $consulta->execute();

        return $resultado;
    }
}
?>
