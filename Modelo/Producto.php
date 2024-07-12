<?php
require_once('../config/Conexion.php');

class Producto extends Conexion{
   
    

    public static function agregarproductos($id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare("INSERT INTO productos (id_producto, nombre_producto, precio, impuesto, stock, id_categoria, descripcion, imagen_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $consulta->bind_param('ssddisss', $id_producto, $nombre_producto, $precio, $impuesto, $stock, $id_categoria, $descripcion, $imagen);
        $resultado = $consulta->execute();

        return $resultado;
    }
}


    public static function mostrarproductos(){
        $conexion = self::conectar();
        $consulta = "SELECT * from productos";
        $resultado = $conexion->query($consulta);
        if ($resultado->num_rows >0){

            $productos = array();

            while ($fila = $resultado->fetch_assoc()) {

                $productos[] = $fila;
        }
        return $productos;
    }else{
        return "No hay Productos";
    }
      
        
    }

?>
