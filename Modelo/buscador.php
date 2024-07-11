<?php
// buscar_productos.php

// Incluye tu archivo de conexión a la base de datos
include_once("conexion.php");

$query = isset($_GET['query']) ? $_GET['query'] : '';
$query = "%" . $query . "%";

$sql = "SELECT nombre_producto FROM productos WHERE nombre_producto LIKE ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die('Prepare() failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("s", $query);
if ($stmt->execute() === false) {
    die('Execute() failed: ' . htmlspecialchars($stmt->error));
}

$result = $stmt->get_result();
if ($result === false) {
    die('get_result() failed: ' . htmlspecialchars($stmt->error));
}

$productos = [];
while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>
