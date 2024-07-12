<?php
require_once('../config/Conexion.php');

class Producto {
   
    

    public static function agregarProducto($id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen) {
        $conexion = Conexion::conectar();
        $consulta = $conexion->prepare("INSERT INTO productos (id_producto, nombre_producto, precio, impuesto, stock, id_categoria, descripcion, imagen_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $consulta->bind_param('ssddisss', $id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen);
        $resultado = $consulta->execute();

        return $resultado;
    }
}

class Productos{
    public static function mostrarProductos(){

        $conexion = conexion::conectar();
        if ($conexion === "no se pudo conectar") {
            return $conexion;
        }
        $consulta = "SELECT * from productos";

        $resultado = $conexion->query($consulta);


        if ($resultado->num_rows >0){

            $productos = array();

            while ($fila = $resultado->fetch_assoc()) {

                $productos[] = $fila;
        }
        return $productos;
    }else{
        return "NBo hay Productos";
    }
      
        
    }
}
?>
