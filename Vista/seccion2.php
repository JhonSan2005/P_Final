<?php
$seccion2 = "Iniciar Sesión";
?>

<head>
    <title> <?php echo "$seccion2"; ?></title>
</head>




<div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-3">
                <img src="../img/logol.png" alt="Logo" class="img-fluid" style="max-height: 180px; max-width: 300px;">
            </div>
        </div>
        <audio autoplay>
            <source src="mp3/misc308.mp3">
        </audio>
        <div class="container d-flex justify-content-center align-items-center flex-grow-1">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                    <div class="featured-image mb-3">
                        <video controls autoplay class="img-fluid" style="width: auto;">
                            <source src="mp3/trailer.mp4" type="video/mp4">
                            Tu navegador no admite el elemento de video.
                        </video>
                    </div>
                    <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;"></p>
                    <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace;"></small>
                </div>
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-2">
                            <h2>Hola, Bienvenidos a Repuestos JJJ</h2>
                            <p>Estamos felices de tenerte de vuelta.</p>
                        </div>




                        <form action="C_iniciar_sesion.php" method="POST">
                        <input type="hidden" name="action" value="login">
            
                                  <div class="input-group mb-3">
                               <input type="email" class="form-control form-control-lg bg-light fs-6" name="correo" placeholder="Correo" required>
                              </div>
                                <div class="input-group mb-1">
                                 <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password" required>
                                </div>
                                     
                        
                                 <button type="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Iniciar</button>
                             </form>  
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <small>¿No tienes cuenta? <a href="controlador.php?seccion=seccion3" style="color: #FF0000;">Registrarse</a></small>
                            </div>
                            <div class="col-12 text-center mt-2">
                                <small>¿Olvidaste tu contraseña? <a href="controlador.php?seccion=seccion5" style="color: #FF0000;">Recuperar</a></small>
                            </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Script para mostrar SweetAlert -->
       <script src="htps://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../JS/alerta_bloqueo.js"></script>