<?php
include_once('conexion.php');

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