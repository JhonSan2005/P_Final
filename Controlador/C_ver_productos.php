<?php
include_once("../Modelo/Producto.php");

// Llamar a la función para mostrar los productos
$productos = Producto::showproducts();

// Incluir la vista para mostrar los productos
include_once("../Vista/seccion1.php");
?>