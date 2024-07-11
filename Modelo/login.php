<?php
require_once('conexion.php');

class Login {
    private static function conectar() {
        return Conexion::conectar(); // Llama al método estático de la clase Conexion para obtener la conexión
    }

    public static function registerUser($documento,$nombre, $correo, $password) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare("INSERT INTO clientes (documento, nombre, correo, password) VALUES (?, ?, ?, ?)");
        $consulta->bind_param('ssss', $documento, $nombre, $correo, $password);
        $resultado = $consulta->execute();

        return $resultado;
    }
}
?>
