<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- HEAD -->
      <?php include 'head.php' ;?>

  </head>

  <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <a class="navbar-brand" href="index"><img class="img-fluid logoNew" src="media/identidad/logo.png"/></a>
          </a>
          <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index">INICIO</a>
                <span class="sr-only">(current)</span>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EMPRESA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="nosotros">Nosotros</a>
                  <a class="dropdown-item" href="mision-y-vision">Misión y Visión</a>
                  <a class="dropdown-item" href="valores">Valores</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SERVICIOS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="asesoramiento-y-proyectos">Asesoramiento y Proyectos</a>
                  <a class="dropdown-item" href="ambito-industrial">Ámbito industrial</a>
                  <a class="dropdown-item" href="ambito-residencial">Ámbito residencial</a>
                  <a class="dropdown-item" href="termomecanica">Termomécanica</a>
                </div>
              </li>

              <li class="nav-item">
                <a  class="nav-link" href="portfolio">PORTFOLIO</a>
              </li>



              <li class="nav-item">
                <a class="nav-link" href="clientes">CLIENTES</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="contacto">CONTACTO</a>
              </li>



            </ul>
          </div>
        </div>
      </nav>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.js"></script>
    <!-- end services -->

    <!-- footer & scripts -->
      <?php include 'footer.php' ;?>

</body>
</html>
