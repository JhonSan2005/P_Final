<?php
require_once("../Modelo/funciones.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'login') {
    // Recuperar los datos del formulario
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Depuración: imprimir los valores recibidos
    var_dump($correo, $password);

    // Detalles de la conexión a la base de datos
    $host = 'localhost';
    $dbname = 'jj_bd'; // Nombre de tu base de datos
    $username = 'root'; // Usuario de la base de datos
    $password_db = ''; // Contraseña de la base de datos

    // Crear una instancia de la clase User
    $user = new Iniciar_sesion($host, $username, $password_db, $dbname);

    // Iniciar sesión
    $loggedInUser = $user->login($correo, $password);

    if ($loggedInUser) {
        // Inicio de sesión exitoso, redireccionar
        header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion9");
        exit(); // Asegúrate de que no haya salida antes de la redirección
    } else {
        header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion01");
     exit();
    }
} else {
    header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion01");
    exit(); 
}
?>
