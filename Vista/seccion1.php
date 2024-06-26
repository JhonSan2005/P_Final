<?php
$seccion1 = "Inicio";
?>

<head>
    <title> <?php echo "$seccion1"; ?></title>
</head>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-12 text-center text-md-left mb-1 mb-md-0">
                <img src="../img/logol.png" alt="Logo" class="img-fluid" style="max-height: 180px; max-width: 300px;">
            </div>
            <div class="col-md-4 col-12 mb-1 mb-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button" id="button-addon2">Buscar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center text-md-center mb-1 mb-md-0"style="margin: righ 20px;">
                <div class="menu-container">
                    <button class="btn btn-secondary menu-button">Perfil</button>
                    <div class="menu-content">
                        <a href="controlador.php?seccion=seccion2" class="menu-item">Iniciar Sesión</a>
                        <a href="controlador.php?seccion=seccion3" class="menu-item">Regístrate YA!</a>
                        <a href="controlador.php?seccion=seccion4" class="menu-item">Administrador</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contenedor-audio" style="text-align: center;">
    <!-- Video de YouTube en un iframe -->
    <div class="video">
        <iframe width="50%" height="200" src="https://www.youtube.com/embed/x4fSOEsy0d0?si=tlSZfgQ1Y0it_HXd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<section id="nuestros-programas">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/repuestos.png');">
                    <h3>REPUESTOS</h3>
                    <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/aceites.png');">
                    <h3>ACEITES</h3>
                    <a href="controlador.php?seccion=seccion"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/llantas.png');">
                    <h3>LLANTAS</h3>
                    <a href="llantas.html"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  
include ("../Controlador/productos.php");
?>
    </div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-muted my-3">
                &copy; Repuestos JJ
            </div>
            <div class="col-12 text-center text-muted">
                repuestosjj@gmail.com
            </div>
        </div>
    </div>
</footer>