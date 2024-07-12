<?php
include("../Modelo/productos.php");

// Llamar a la función para mostrar los productos
$productos = Productos::showproducts();

// Incluir la vista para mostrar los productos
include_once("../Vista/seccion1.php");
?>