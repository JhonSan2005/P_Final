<?php
$seccion8 = "SubirProductos";
?>

<head>
    <title> <?php echo "$seccion8"; ?></title>
</head>
<div class="container-fluid min-vh-100 d-flex flex-column">
    <div class="row justify-content-center">
        <div class="col-12 text-center my-3">
            <img src="../img/logol.png" alt="Logo" class="img-fluid" style="max-height: 180px; max-width: 300px;">
        </div>
    </div>

    <div class="container2">
    <h1 class="form-title">Agregar Productos</h1>
    
      <form action="../Controlador/C_agregar_producto.php" method="post" enctype="multipart/form-data">
     <input type="hidden" name="action" value="agregar">
        <div class="form-group">
            <label for="product_id" class="form-label">ID Producto</label>
            <input type="text" id="product_id" name="product_id" class="form-input" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="product_name" class="form-label">Nombre Producto</label>
            <input type="text" id="product_name" name="product_name" class="form-input" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="product_price" class="form-label">Precio</label>
            <input type="number" id="product_price" name="product_price" class="form-input" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="product_tax" class="form-label">Impuesto</label>
            <input type="number" id="product_tax" name="product_tax" class="form-input" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="product_stock" class="form-label">Stock</label>
            <input type="number" id="product_stock" name="product_stock" class="form-input" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="product_category" class="form-label">Categoría</label>
            <select id="product_category" name="product_category" class="form-input" required>
                <option value="">Selecciona una categoría</option>
                <option value="repuestos">Repuestos</option>
                <option value="llantas">Llantas</option>
                <option value="aceites">Aceites</option>
                <option value="accesorios">Accesorios</option>
            </select>
        </div>
        <div class="form-group">
            <label for="product_description" class="form-label">Descripción</label>
            <textarea id="product_description" name="product_description" class="form-input" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="product_image" class="form-label">Imagen</label>
            <label for="product_image" class="file-label">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
                <span class="mt-2 text-base leading-normal text-blue-500 font-bold">Selecciona un archivo</span>
                <input type="file" id="product_image" name="product_image" class="hidden" accept=".png, .jpg" required>
            </label>
            <p class="file-info">Tipos de archivo aceptados: Solo .png y .jpg</p>
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Agregar</button>
            <button type="reset" class="btn btn-warning">Vaciar</button>
        </div>
    </form>
</div>
</div>