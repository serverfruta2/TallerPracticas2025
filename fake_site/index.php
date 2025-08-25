<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

    <!-- site metas -->
    <title>Cooperar</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="views/assets/vendor/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="views/assets/vendor/css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="views/assets/vendor/css/responsive.css" />
    <!-- fevicon -->
    <link
      rel="icon"
      href="views/assets/vendor/images/fevicon.png"
      type="image/gif"
    />
    <!-- Scrollbar Custom CSS -->
    <link
      rel="stylesheet"
      href="views/assets/vendor/css/jquery.mCustomScrollbar.min.css"
    />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="views/assets/vendor/css/font-awesome.css" />
    <link
      rel="stylesheet"
      href="views/assets/vendor/css/fancybox.min.css"
      media="screen"
    />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- --- FIX: quitar espacio blanco entre banner y footer --- -->
    <style>
      /* elimina margen / padding del carrusel */
      #myCarousel,
      .banner_main {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
      }
      /* por si el footer tuviera margen superior */
      footer,
      footer .copyright {
        margin-top: 0 !important;
      }
    </style>
  </head>

  <body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader">
        <img src="views/assets/vendor/images/loading.gif" alt="#" />
      </div>
    </div>
    <!-- end loader -->

    <div class="wrapper">
      <!-- Sidebar -->

      <div id="content">
        <!-- header -->
        <header>
          <div class="header">
            <div class="container-fluid">
              <div class="row">
                <div
                  class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section"
                >
                  <div class="full">
                    <div class="center-desk">
                      <div class="logo">
                        <a href="index.php">
                          <img
                            src="views/assets/vendor/images/logo.png"
                            alt="#"
                          />
                          <span style="font-size: 26px">Cooperar</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <ul class="btn">
                    <li class="nav-item">
                    <li class="nav-item">
                      <a href="./views/login.php">Iniciar sesión</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- end header -->

        <!-- banner -->
        <div
          id="myCarousel"
          class="carousel slide banner_main"
          data-ride="carousel"
        >
          <!-- indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- slides -->
          <div class="carousel-inner">
            <!-- slide 1 -->
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Cooperar</h1>
                        <p>
                          En Cooperar te ayudamos a que los pagos de tu
                          cooperadora sean simples y transparentes. Cada aporte
                          se registra al instante y se administra con total
                          responsabilidad, para que todos los miembros sepan
                          siempre dónde está su dinero y qué se logra con él.
                        </p>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure>
                          <img src="views/assets/vendor/images/img2.png" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- slide 2 -->
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Sobre Nosotros</h1>
                        <p>
                          En Cooperar trabajamos todos los días para acercarte
                          soluciones simples, útiles y pensadas para vos. Somos
                          un equipo de personas comprometidas con hacer las
                          cosas bien, con responsabilidad, claridad y siempre
                          buscando que te sientas acompañado en cada paso. Nos
                          mueve la idea de mejorar juntos.
                        </p>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure>
                          <img src="views/assets/vendor/images/about_img.jpg" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- slide 3 -->
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Contactanos</h1>
                        <p>
                          ¿Tenés dudas o querés saber más? Estamos para
                          ayudarte. Escribinos y te respondemos lo antes
                          posible. Cada consulta suma, y nos encanta
                          escucharte.<br />
                          <strong>Email:</strong>
                          <a href="mailto:cooperar@gmail.com" class="text-white"
                            >info@tuempresa.com</a
                          ><br />
                          <strong>Teléfono:</strong>
                          <a href="tel:+34123456789" class="text-white"
                            >+34 123 456 789</a
                          >
                        </p>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure>
                          <img src="views/assets/vendor/images/img2.png" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- controles -->
          <a
            class="carousel-control-prev"
            href="#myCarousel"
            role="button"
            data-slide="prev"
          >
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
          </a>
          <a
            class="carousel-control-next"
            href="#myCarousel"
            role="button"
            data-slide="next"
          >
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
        <!-- end banner -->

        <!-- footer -->
        <footer>
          <div class="copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <p>Copyright &copy; COOPERAR</p>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- end footer -->
      </div>
      <!-- /content -->
    </div>
    <!-- /wrapper -->

    <div class="overlay"></div>

    <!-- JS -->
    <script src="views/assets/vendor/js/jquery.min.js"></script>
    <script src="views/assets/vendor/js/popper.min.js"></script>
    <script src="views/assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="views/assets/vendor/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="views/assets/vendor/js/custom.js"></script>

    <!-- sidebar toggle -->
    <script>
      $(function () {
        $("#sidebar").mCustomScrollbar({ theme: "minimal" });

        $("#dismiss, .overlay").on("click", function () {
          $("#sidebar, .overlay").removeClass("active");
        });

        $("#sidebarCollapse").on("click", function () {
          $("#sidebar, .overlay").addClass("active");
          $(".collapse.in").toggleClass("in");
          $("a[aria-expanded=true]").attr("aria-expanded", "false");
        });
      });
    </script>

    <!-- google map js -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script> -->
  </body>
</html>
