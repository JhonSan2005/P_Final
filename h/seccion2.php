<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Repuestos JJJ</title>
    <style>
      
body {
    background-image: url('imganes/klole.png');
    background-size: cover;
    background-repeat: no-repeat;
    width: auto;
    
}

.custom-label a {
        color: #FF0000;
    }



    </style>
</head>
<body>

    <!----------------------- Contenedor principal -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Contenedor de registrarse -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Cuadro izquierdo ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #FF0000;">
           <div class="featured-image mb-3">
          <video controls autoplay class="img-fluid" style="width: auto;">
            <source src="mp3/trailer.mp4" type="video/mp4">
             Tu navegador no admite el elemento de video.
</video>
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;"></p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;"></small>
       </div> 

    <!-------------------- ------ Caja derecha ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Registrarte</h2>
                     <p>Es rápido y fácil.</p>
                </div>
              <div class="d-flex justify-content-between mb-3">
    <a href="https://accounts.google.com/signin" target="_blank" class="btn btn-lg btn-light fs-6 d-flex align-items-center justify-content-center" style="width: 32%;">
        <img src="imganes/google.png" style="width:20px" class="me-2">
        <small>Inicia sesión con Google</small>
    </a>
    <a href="https://www.facebook.com/login/" target="_blank" class="btn btn-lg btn-light fs-6 d-flex align-items-center justify-content-center" style="width: 32%;">
        <img src="imganes/facebook.png.webp" style="width:20px" class="me-2">
        <small>Inicia sesión con Facebook</small>
    </a>
    <a href="https://twitter.com/login" target="_blank" class="btn btn-lg btn-light fs-6 d-flex align-items-center justify-content-center" style="width: 32%;">
        <img src="imganes/twitter.svg.webp" style="width:20px" class="me-2">
        <small>Inicia sesión con Twitter</small>
    </a>
</div>


<form action="registro.php" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="documento" placeholder="N° Documento">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="nombre" placeholder="Nombre">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="correo" placeholder="Correo">
    </div>
    <div class="input-group mb-1">
        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="password">
    </div>
    <!-- Resto del formulario -->
    <button type="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Registrarse</button>
</form>
                <div class="input-group mb-5 d-flex justify-content-between">
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="formCheck">
        <label for="formCheck" class="form-check-label text-secondary custom-label">
            <small><a href="terminos.html">Acepto los Términos y Condiciones</a></small>
        </label>
    </div>
</div>
    </div>

</body>
</html>
