<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title>gdlWebCamp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8992bd1b71.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,300&family=Oswald:wght@300;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!--este bloque ejecuta el css según la página actual-->
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<link rel="stylesheet" href="css/colorbox.css">';
      } else if($pagina == 'conferencia'){
        echo '<link rel="stylesheet" href="css/lightbox.css">';
      };
    ?>
    <!--este bloque ejecuta el css según la página actual-->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">


  <!--HEADER-->
  <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="info-evento">
                    <div class="fecha-ciudad">
                        <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Santiago del Estero</p>
                    </div>
                    <div class="titulo-slogan">
                        <h1 class="nombre-sitio">GdlWebCamp</h1>
                        <h3 class="slogan">La mejor conferencia de <span>Diseño Web</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER-->

    <!--BARRA NAVEGACIÓN-->
    <div class="contenedor barra">
        <div class="logo">
          <a href="index.php">
            <img src="img/logo.svg" alt="Logo GdlWebCamp">
          </a>
        </div>
        <div class="menu-movil">
            <a href="#" class="burger-menu">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <nav class="nav-principal">
            <a href="conferencia.php">Conferencia</a>
            <a href="calendario.php">Calendario</a>
            <a href="invitados.php">Invitados</a>
            <a href="registro.php">Reservaciones</a>
        </nav>

    </div>
    <!--BARRA NAVEGACIÓN-->








