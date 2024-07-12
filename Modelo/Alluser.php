<?php

include_once('../helpers/Conexion_db.php');

class Login {
    public static function loginuser($correo, $password) {
        $conexion = Conexion::conectar();
        $consulta = $conexion->prepare("SELECT * FROM clientes WHERE correo = ? LIMIT 1");
        $consulta->bind_param('s', $correo);
        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_assoc();

        if ($resultado) {
            if ($password === $resultado['password']) { // Comparación directa de contraseñas
                session_start();
                $_SESSION['usuario_id'] = $resultado['id'];
                return true;
            } else {      
                return false;
            }
        } 
    }
}


class Register {
   
    public static function registeruser($documento,$nombre, $correo, $password) {
        $conexion = Conexion::conectar();
        $consulta = $conexion->prepare("INSERT INTO clientes (documento, nombre, correo, password) VALUES (?, ?, ?, ?)");
        $consulta->bind_param('ssss', $documento, $nombre, $correo, $password);
        $resultado = $consulta->execute();

        return $resultado;
    }
}




?>