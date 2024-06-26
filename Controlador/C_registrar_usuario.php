
<?php
require_once("../Modelo/funciones.php");

// Check if the request method is POST and 'action' parameter is 'register'
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'register') {
    // Retrieve form data
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Database connection details
    $host = 'localhost';
    $dbname = 'jj_bd'; // Your database name
    $username = 'root'; // Your database username
    $db_password = ''; // Your database password

    // Create an instance of the User class
    $user = new Registrar_usuario($host, $username, $db_password, $dbname);

    // Register the user
    $result = $user->registrar($documento, $nombre, $correo, $password);

    // Display the result
    echo $result;
}

?>