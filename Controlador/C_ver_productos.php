<?php
include_once("../Modelo/Products.php");

// Llamar a la función para mostrar los productos
$productos = Allproducts::showproducts();

// Incluir la vista para mostrar los productos
include_once("../Vista/seccion1.php");
?>