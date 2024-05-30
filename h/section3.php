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
    <style>
           .img_rojo img {
    width: 100%;
    height: 40%;
    display: block;
}
*{
    box-sizing: border-box;
}

html{
    scroll-behavior: smooth;
}

body{
    font-family: 'Roboto', sans-serif;
    margin: 0;
}

h1{ font-size: 3.5em;}
h2{ font-size: 2.7em;}
h3{ font-size: 2em;}
p{ font-size: 1.25em;}
ul{ list-style: none;}
li{ font-size: 1.25em;}

button{
    font-size: 1.25em;
    font-weight: bold;
    padding: 10px 10px;
    border-radius: 5px;
    border: 2px solid rgba(0,0,0,0.3);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: black;
    background-color: yellow;
}

button:hover{
    background-color: rgb(101, 33, 165);
}

.container{
    max-width: 1400px;
    margin: auto;
}

.color-acento{ color:white; }



 /* header .logo{
    margin: 0;
    padding: 25px 30px;
    margin-top: -320px;
    
}  */

.perfil{
    display: flex;
    height: 50px;
    width: 50px;
    margin-left: 60px;
}

#nuestros-programas{
    background-color: #D2D2D2;
    color: white;
    text-align: center;
    padding: 150px 0;
}

#nuestros-programas h2{
    margin-top: 0;
    font-size: 3.2em;
}

#nuestros-programas p{
    display: none;
}

.carta{
    margin-top: 100px;
    background-position: center center;
    background-size: cover;
    padding: 50px 0px;
    margin-bottom: 150px;
    border-radius: 25px;
}

#caracteristicas{
    background-color: #D2D2D2;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 50px 0;
}

footer{
    background-color: #D2D2D2;
}

footer p{
    margin: 0;
    padding: 12px;
    color: rgb(100,100,100);
}

footer .container{
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}


.contenedor{
    background-image: url(imganes/principal.png);
    height: 40vh;
    background-repeat: no-repeat;
    background-size: cover;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

* {
    font-family: 'Poppins', sans-serif;
}
    </style>
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
                  <div class="menu-container">
                            <button class="menu-button">Home</button>
                            <div class="menu-content">
                              <a href="editar_perfil.html" class="menu-item">Editar Perfil</a>
                              <a href="index.html" class="menu-item">Cerrar sesión</a>
                            </div>
                          </div>

        <style>
            .menu-container {
  position: relative;
  display: inline-block;
}

.menu-button {
  background-color: #ddd;
  color: black;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

.menu-content {
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #f1f1f1;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.menu-container:hover .menu-content {
  display: block;
}

.menu-item {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.menu-item:hover {
  background-color: #ddd;
}

        </style>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
    <section id="nuestros-programas">
      <div class="container" style="margin-top: auto;">
    <h2></h2>
    <div class="row">
        <!-- Contenido de las categorías -->
    </div>
</div>

            <h2>CATEGORIAS</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/repuestos.jpg');">
                        <h3>REPUESTOS</h3>
                        <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/aceites.png');">
                        <h3>ACEITES</h3>
                        <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
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