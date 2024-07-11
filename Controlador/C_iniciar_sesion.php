<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once("../Modelo/starUser.php");

// Verificar si se han enviado los datos del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de inicio de sesión
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Verificar si el usuario está bloqueado temporalmente
    if (isset($_SESSION['bloqueado_hasta']) && $_SESSION['bloqueado_hasta'] > time()) {
        $tiempoRestante = $_SESSION['bloqueado_hasta'] - time();
        // Usuario bloqueado temporalmente, redirigir con información de bloqueo
        header("location: ../Controladores/controlador.php?seccion=seccion2&error=blocked&time=$tiempoRestante");
        exit;
    }

    // Intentar iniciar sesión
    $login_exitoso = starUser::loginUser($correo, $password);

    if ($login_exitoso) {
        // Redirigir a alguna página de éxito
        header("location: ../Vista/index.php");
        exit(); // Asegurarse de que el script se detenga después de redirigir
    }
}
?>
