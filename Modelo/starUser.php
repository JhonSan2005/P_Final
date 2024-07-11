<?php
require_once('conexion.php');

class starUser {
    public static function loginUser($correo, $password) {
        $conexion = Conexion::conectar();
        $consulta = $conexion->prepare("SELECT * FROM clientes WHERE correo = ? LIMIT 1");
        $consulta->bind_param('s', $correo);
        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_assoc();

        if (password_verify($password, $resultado['password'])) {
            session_start();
            $_SESSION['usuario_id'] = $resultado['id'];
            return true;
        } else {
            return false;
        }
    }
}
?>