<?php
require_once("../Modelo/funciones.php");

// Verificar si el método de la solicitud es POST y el parámetro 'action' es 'agregar'
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'agregar') {
    // Recibir y sanitizar los datos del formulario (ejemplo)
    $product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);

    // Directorio donde se guardará la imagen (ruta relativa)
    $target_dir = "../Sitio/img/";

    // Nombre del archivo y su ruta de destino
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);

    // Verificar si el archivo es una imagen real
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if($check === false) {
        die("El archivo no es una imagen.");
    }

    // Verificar el tipo de archivo
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png") {
        die("Solo se permiten archivos JPG y PNG.");
    }

    // Mover el archivo subido a la carpeta de destino
    if (!move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
        die("Hubo un error subiendo la imagen. Verifica los permisos del directorio.");
    }
    // Datos de conexión a la base de datos
    $host = 'localhost';
    $dbname = 'jj_bd'; // Nombre de tu base de datos
    $username = 'root'; // Nombre de usuario de tu base de datos
    $db_password = ''; // Contraseña de tu base de datos

    // Crear una instancia de la clase Agregar_producto
    $producto = new Agregar_producto($host, $username, $db_password, $dbname);

    // Agregar el producto
    $result = $producto->agregar($product_id, $product_name, $product_price, $product_tax, $product_stock, $product_category, $product_description, $target_file);

    // Mostrar el resultado
    echo $result;
}
?>
