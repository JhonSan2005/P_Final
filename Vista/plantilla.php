<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<!-- <link rel="stylesheet" href="estilo.css"> -->



</head>


<?php
    if ($seccion == 'seccion1'  || $seccion == 'seccion7' || $seccion == 'seccion9') {
        ?>
        <link href="../css/estilo.css" rel="stylesheet">
        <?php
    } elseif ($seccion == 'seccion00' ||$seccion == 'seccion2' || $seccion == 'seccion3' || $seccion == 'seccion4' || $seccion == 'seccion5' || $seccion == 'seccion6' || $seccion == 'seccion7'|| $seccion == 'seccion8'|| $seccion == 'seccion11'|| $seccion == 'seccion12' || $seccion == 'seccion01' || $seccion == 'seccion20') {
        ?>
        <link href="../css/stilo2.css" rel="stylesheet">
        <?php
    }
    ?>
 

<body>

    

 

<div class="container">

<?php
// Verificar el valor de $seccion y incluir el archivo PHP correspondiente
if ($seccion == 'seccion00' || $seccion == 'seccion1' || $seccion == 'seccion2' || $seccion == 'seccion3' || $seccion == 'seccion4'|| $seccion == 'seccion5'|| $seccion == 'seccion6'|| $seccion == 'seccion7'|| $seccion == 'seccion8'|| $seccion == 'seccion9' || $seccion == 'seccion10'|| $seccion == 'seccion11'|| $seccion == 'seccion12'|| $seccion == 'seccion13' || $seccion == 'seccion01'|| $seccion == 'seccion20') {
    include($seccion . ".php");
} else {
    // Manejar el caso donde $seccion no coincide con ningún valor esperado
    echo "Sección no encontrada.";
}
?>




    <!-- Le javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

     <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-RN2W1P2L8D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-RN2W1P2L8D');
    </script>
    <script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
