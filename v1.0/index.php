<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- HEAD -->
      <?php include 'head.php' ;?>

  </head>

  <body>
    <!--Preload-->
    <div class="preloader">
    	<div class="preloader_image"></div>
    </div>


      <!-- Navigation -->
        <?php include 'menu.php' ;?>
    <!-- end nav -->


      <div id="banner" class="carousel carousel-fade">
    	<!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox">
    		<div class="item active" style="background-image:url('media/home1.webp');">
    			<div class="caption-info">
    				<div class="container">
    					<div class="row">
    						<div class="col-sm-12">
    							<div class="caption-info-inner">
    								<h1 class="animated fadeInDown display-5">
                      Empresa argentina dedicada a <br>
                      la construcción, arquitectura, ingeniería,<br>
                      servicios y obras de termomecánica
                    </h1>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div><!--end carousel-inner-->
    </div>

    <div class="container">
      <section class="section-spacing">
      	<div class="container">
      		<div class="row">
      			<div class="col-xs-12">
      				<div class="services-left">
      					<div class="service-list">
      						<div class="service-thumb">
      							<a href="nosotros">
      								<img src="media/home/nosotrosHome.jpg" alt="">
      								<div class="service-overlay">
      									<h3>Nuestra Empresa</h3>
      								</div>
      							</a>
      						</div>
      					</div>
      				</div>
      				<div class="services-right">
      					<ul>
      						<li>
      							<div class="service-list">
      								<div class="service-thumb">
      									<a href="proyectos">
      										<img src="media/home/proyectosHome.jpg" alt="">
      										<div class="service-overlay">
      											<h3>Proyectos</h3>
      										</div>
      									</a>
      								</div>
      							</div>
      						</li>
      						<li>
      							<div class="service-list">
      								<div class="service-thumb">
      									<a href="servicios">
      										<img src="media/home/serviciosHome.jpg" alt="">
      										<div class="service-overlay">
      											<h3>Servicios</h3>
      										</div>
      									</a>
      								</div>
      							</div>
      						</li>
      						<li>
      							<div class="service-list">
      								<div class="service-thumb">
      									<a href="clientes">
      										<img src="media/home/clientesHome.jpg" alt="">
      										<div class="service-overlay">
      											<h3>Clientes</h3>
      										</div>
      									</a>
      								</div>
      							</div>
      						</li>
      						<li>
      							<div class="service-list">
      								<div class="service-thumb">
      									<a href="contacto">
      										<img src="media/home/contactoHome.jpg" alt="">
      										<div class="service-overlay">
      											<h3>Contacto</h3>
      										</div>
      									</a>
      								</div>
      							</div>
      						</li>
      					</ul>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
    </div>
    <!-- end services -->

    <!-- footer & scripts -->
      <?php include 'footer.php' ;?>

</body>
</html>
