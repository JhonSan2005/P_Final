<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RN2W1P2L8D"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-RN2W1P2L8D');
</script>

</head>
<body>
    <header>
        <div class="contenedor">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 d-flex justify-content-center d-md-block">
                    <img src="imganes/logol.png" alt="" width="50px" class="me-4" style=" height: 180px; width: 300px; padding-left: 80px; padding-top: -80px;">
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-center align-items-center" style="padding-top: 9%;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2" style="height:40px;">
                        <button class="btn btn-warning" type="button" id="button-addon2">Buscar</button>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-end align-items-center" style="padding-top: 8%; padding-right: 10%;">
                    <div class="d-flex align-items-center">
                        <img src="imganes/perfil.png" alt="" width="50px" class="me-3">
                         <a href="controlador.php?seccion=seccion2" class="text-decoration-none me-3">Iniciar / Registrarse</a>
                <a href="admistrador.html">Administrador</a>
                </div>
            </div>
        </div>
    </header>
    
    
    <div class="contenedor-audio" style=" text-align: center;">
        <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/x4fSOEsy0d0?si=tlSZfgQ1Y0it_HXd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
        <div class="audio-player">
            <audio id="audio-player" controls muted>
                <source src="mp3/kawasaki-ninja.mp3" type="audio/mpeg">
            </audio>
            <div class="controls">
                <button id="play-btn" class="btn">
                    <i class="fas fa-play"></i>
                </button>
                <button id="pause-btn" class="btn">
                    <i class="fas fa-pause"></i>
                </button>
                <button id="mute-btn" class="btn">
                    <i class="fas fa-volume-mute"></i>
                </button>
                <button id="unmute-btn" class="btn">
                    <i class="fas fa-volume-up"></i>
                </button>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="nuestros-programas">
        <div class="container">
            <h2>CATEGORIAS</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/repuestos.png');">
                        <h3>REPUESTOS</h3>
                        <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/aceites.png');">
                        <h3>ACEITES</h3>
                        <a href="controlador.php?seccion=seccion2"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/llantas.png');">
                        <h3>LLANTAS</h3>
                        <a href="llantas.html"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
