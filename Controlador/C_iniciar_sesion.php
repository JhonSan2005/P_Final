<?php
session_start();
require_once("../Modelo/funciones.php");

// Inicializar variables de sesión
if (!isset($_SESSION['stop'])) {
    $_SESSION['stop'] = 0;
}

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if (!isset($_SESSION['login_intentos'])) {
    $_SESSION['login_intentos'] = 0;
}

// Función para manejar las visitas
function manejarVisitas() {
    global $conn;

    // Preparar consulta SQL
    $stmt = $conn->prepare("INSERT INTO conteo_visitas (count) VALUES (?)");
    $stmt->bind_param("i", $_SESSION['stop']);

    // Ejecutar consulta SQL
    if ($stmt->execute()) {
        $_SESSION['stop'] += 1;
        if ($_SESSION['stop'] >= 3) {
            $_SESSION['mensaje'] = "☢️ Piratas Informáticos ☢️";
            $_SESSION['stop'] = 0; // Reiniciar el contador después de "No paso"
            $_SESSION['intentos'] += 1; // Aumentar los intentos fallidos
        } else {
            $_SESSION['mensaje'] = "Visita número: {$_SESSION['stop']}";
        }
    } else {
        $_SESSION['mensaje'] = "Error al registrar visita: " . $conn->error;
    }

    $stmt->close();
}

// Función para manejar el login
function manejarLogin($correo, $password) {
    global $host, $dbname, $username, $password_db;

    // Crear una instancia de la clase User
    $user = new Iniciar_sesion($host, $username, $password_db, $dbname);

    // Iniciar sesión
    $loggedInUser = $user->login($correo, $password);

    if ($loggedInUser) {
        // Inicio de sesión exitoso, redireccionar
        $_SESSION['login_intentos'] = 0; // Reiniciar el contador de intentos fallidos
        header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion9");
        exit();
    } else {
        $_SESSION['login_intentos'] += 1;
        if ($_SESSION['login_intentos'] >= 2) {
            header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion20");
        } else {
            header("Location: http://localhost/Sitio/Controlador/controlador.php?seccion=seccion01");
        }
        exit();
    }
}

// Conexión a la base de datos para visitas
$conn = new mysqli("localhost", "root", "", "visitas");

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Manejar visitas
manejarVisitas();

$conn->close();

// Verificar el número de intentos fallidos de visitas
if ($_SESSION['intentos'] >= 2) {
    header("Location: controlador.php?seccion=seccion20");
    exit();
}

// Verificar si se trata de una solicitud de login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'login') {
    // Recuperar los datos del formulario
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Detalles de la conexión a la base de datos
    $host = 'localhost';
    $dbname = 'jj_bd'; // Nombre de tu base de datos
    $username = 'root'; // Usuario de la base de datos
    $password_db = ''; // Contraseña de la base de datos

    // Manejar login
    manejarLogin($correo, $password);
} else {
    // Redirigir si no es una solicitud de login
    header("Location: controlador.php?seccion=seccion20");
    exit();
}
?>
