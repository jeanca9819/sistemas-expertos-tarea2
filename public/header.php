  <!--inicio de la vista-->
<!doctype html>
<html lang="es-LA">
  <head>

      <!--Definición de los recursos externos usados en la vista-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="#">
    <title>Sistemas Expertos</title>

  </head>

  <!--Se define el body y se le agrega una imágen general de fondo.-->
  <body style="background-image: url('public/images/hero_1.jpg');">

  <!--Esta fragmento ayuda a que cuando la pantalla es de celular el menú se vea tipo hamburguesa.-->
  <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
      <!--Estructura completa del menú, se le agregaron las respectivas redirecciones de página, directamente usando el controlador y la acción.-->
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="index.php">Tarea #2</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="index.php" class="nav-link">Inicio</a></li>
                    <li class="has-children">
                      <a class="nav-link">Determinar</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="index.php?c=determinarEstilo&a=determinarEstiloAction" class="nav-link">Estilo de Aprendizaje</a></li>
                        <li><a href="index.php?c=determinarProfesor&a=determinarProfesorAction" class="nav-link">Tipo de profesor</a></li>
                        <li><a href="index.php?c=determinarRed&a=determinarRedAction" class="nav-link">Clasificación de red</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a class="nav-link">Adivinar</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="index.php?c=adivinarEstilo&a=adivinarEstiloAction" class="nav-link">Estilo de Aprendizaje</a></li>
                        <li><a href="index.php?c=adivinarRecinto&a=adivinarRecintoAction" class="nav-link">Recinto de origen</a></li>
                        <li><a href="index.php?c=adivinarSexo&a=adivinarSexoAction" class="nav-link">Sexo</a></li>
                      </ul>
                    </li>
                    <li class="active"><a href="index.php?c=acercaDe&a=acercaAction" class="nav-link">Acerca de</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

  
