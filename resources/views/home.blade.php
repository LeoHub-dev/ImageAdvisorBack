<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LeoHub - Realizamos tus ideas</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('leohub/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('leohub/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet"
    type="text/css">
  <link href="{{ asset('leohub/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('leohub/css/stylish-portfolio.min.css') }}" rel="stylesheet">
  <link href="{{ asset('leohub/css/animate.css') }}" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="favicon.ico" />

</head>

<body id="page-top">

  <div class="se-pre-con"></div>

  @include('flash::message')

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">LeoHub</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Services</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1 wow fadeIn">LeoHub</h1>
      <h3 class="mb-5">
        <em>Portfolio Online</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger animated infinite pulse" href="#about">Descubrir mas</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 class="wow fadeIn">LeoHub es </h2>
          <p class="lead mb-5 wow fadeIn">un lugar donde puedes realizar tus grandes ideas, y lograr tus metas!</p>
          <div class="wow fadeIn delay-1s"><a class="btn btn-dark btn-xl js-scroll-trigger wow infinite pulse" href="#services">Que ofrecemos?</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Servicios</h3>
        <h2 class="mb-5 wow wobble">Que ofrecemos?</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 wow fadeIn">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Responsive</strong>
          </h4>
          <p class="text-faded mb-0">Paginas Web visible desde cualquier dispositivo!</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 wow fadeIn delay-1s">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Personalización</strong>
          </h4>
          <p class="text-faded mb-0">Proyectos a la medida.</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0 wow fadeIn delay-2s">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>UX</strong>
          </h4>
          <p class="text-faded mb-0">La mejor experiencia para tus usuarios!</p>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeIn delay-3s">
          <span class="service-icon rounded-circle mx-auto mb-3 ">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Moderno</strong>
          </h4>
          <p class="text-faded mb-0">Un diseño moderno a tu gusto!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5 wow slideInUp">Construimos
        <em>tu</em>
        proximo proyecto!</h2>
      <a class="btn btn-primary btn-xl wow infinite pulse" href="#contact">Contactanos</a>
    </div>
  </section>

  <!-- Conocimientos -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5">Conocimientos</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-html5"></i>
          </span>
          <h4>
            <strong>Html5</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-php"></i>
          </span>
          <h4>
            <strong>PHP(Senior)</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-laravel"></i>
          </span>
          <h4>
            <strong>Laravel & CodeIgniter</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            B
          </span>
          <h4>
            <strong>Bootstrap</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            MySql
          </span>
          <h4>
            <strong>PhpMyAdmin</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            NoSql
          </span>
          <h4>
            <strong>MongoDb</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fas fa-camera-retro"></i>
          </span>
          <h4>
            <strong>Photoshop(Basico)</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-wordpress"></i>
          </span>
          <h4>
            <strong>Wordpress</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-bitcoin"></i>
          </span>
          <h4>
            <strong>Altcoin Dev</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-css3-alt"></i>
          </span>
          <h4>
            <strong>CSS3</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-git"></i>
          </span>
          <h4>
            <strong>Git</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-js"></i>
          </span>
          <h4>
            <strong>JavaScript/Jquery</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-angular"></i>
          </span>
          <h4>
            <strong>Angular(Junior)</strong>
          </h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <span class="service-icon mx-auto mb-2">
            <i class="fab fa-node-js"></i>
          </span>
          <h4>
            <strong>NodeJs(Junior)</strong>
          </h4>
        </div>

      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Proyectos Recientes</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>SocialRobot</h2>
                <p class="mb-0">Robot de Trading de Criptomonedas Social - Trabaja con la API de Bittrex hecho en PHP-Laravel</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/portfolio-1.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{ asset('leohub/img/tradingcoin.png') }}" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>TradingCoin</h2>
                <p class="mb-0">Criptomoneda basada con la idea de usarla para el mundo del Trading. Con Wallet Web, Wallet de Escritorio
                  y Wallet para Android</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/tradingcoin-portfolio.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{ asset('leohub/img/academiadetrading.png') }}" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>Academia De Trading</h2>
                <p class="mb-0">Pagina Web dedicada a dar clases sobre Trading de Criptomonedas. Y el trading en general.</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/academia-portfolio.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{ asset('leohub/img/only1week.png') }}" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>Multinivel Avanzado</h2>
                <p class="mb-0">Pagina con un multinivel bastante interesante.</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/only1week-portfolio.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{ asset('leohub/img/followuseller.png') }}" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>FollowYourSeller</h2>
                <p class="mb-0">Una pagina que se uso junto una APP para el rastreo de proveedores, usando APIs de google Maps</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/followuseller-portfolio.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>Key Store</h2>
                <p class="mb-0">Tienda de Productos mas que todo Digitales.</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/portfolio-4.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>Leo Reservaciones</h2>
                <p class="mb-0">Reservaciones de mesa para Restaurantes.</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/portfolio-4.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{ asset('leohub/img/3brothersny.png') }}" target="_blank">
            <span class="caption">
              <span class="caption-content">
                <h2>Pizzeria</h2>
                <p class="mb-0">Pagina de una pizzeria.</p>
              </span>
            </span>
            <img class="img-fluid" src="{{ asset('leohub/img/portfolio-4.jpg') }}" alt="">
          </a>
        </div>






      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="contact" style="padding-top: 5rem;" class="content-section bg-primary text-white">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5">Contactanos</h2>
      </div>
      <form action="{{ url('contact') }}" method="POST">

        @csrf
      
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" placeholder="Ingresa tu nombre" name="name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Ingresa tu email" name="email">
        </div>
        <div class="form-group">
          <label>Mensaje</label>
          <textarea class="form-control" rows="3" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-xl btn-light mr-4">Enviar</button>
      {{ Form::close() }}

    </div>

  </section>

  <!-- Map -->
  <section  class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br/>
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; LeoHub 2018</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('leohub/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('leohub/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('leohub/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('leohub/js/stylish-portfolio.min.js') }}"></script>

  <script src="{{ asset('leohub/js/wow.min.js') }}"></script>



  <script>
    $( document ).ready(function() {

      new WOW().init();
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;

      $('#flash-overlay-modal').modal();

    });
  </script>

</body>

</html>