<?php

  //Podría haber código PHP pero se vería en todas las secciones.

?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    
    <!-- Barra de navegación -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse" style="height: 0px;">
          <ul class="nav">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="controlador.php?seccion=seccion1"></a></li>
  <li><a href="controlador.php?seccion=seccion2"></a></li>
 
</ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
    <div class="container">
      
      <?php

        include( $seccion.".php" );

      ?>

    </div>

    <!-- <div class="container">

      
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational 
website. It includes a large callout called the hero unit and three 
supporting pieces of content. Use it as a starting point to create 
something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more »</a></p>
      </div>

      
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce 
dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce 
dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
 ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
      </div>

      <hr>

    </div>--> <!-- /container -->

    <div class="container">
      <footer>
        <p>© Company 2012</p>
      </footer>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

</body>
</html>