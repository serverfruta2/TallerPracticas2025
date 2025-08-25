<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cooperar</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendor/css/style.css" />
  <link rel="stylesheet" href="assets/vendor/css/responsive.css" />
  <link rel="stylesheet" href="assets/vendor/css/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/vendor/css/font-awesome.css" />
  <link rel="stylesheet" href="assets/vendor/css/fancybox.min.css" />

  <!-- Favicon -->
  <link rel="icon" href="assets/vendor/images/fevicon.png" type="image/gif" />

  <!-- Compatibilidad IE -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Fix espacio -->
  <style>
    #myCarousel, .banner_main {
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }
    footer, footer .copyright {
      margin-top: 0 !important;
    }
  </style>
</head>
<div id="content-wrapper" class="d-flex flex-column min-vh-100">

<body>
  <!-- Header -->
  <header>
    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="../index.php">
                    <img src="assets/vendor/images/logo.png" alt="Logo Cooperar" />
                    <span style="font-size: 26px">Cooperar</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <ul class="btn">
              <li class="nav-item">
                <a href="login.php">Iniciar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Login Form -->
  <div class="wrapper">
    <div class="row justify-content-center">
      <div class="col-md-5 col-lg-4">
        <div class="logo text-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=40734&format=png&color=000000"
               alt="Logo de usuario" class="img-fluid" style="max-width: 100px;" />
        </div>
        <form id="loginForm" class="form-signin" method="POST" action="controllers/loginController.php">
          <div class="mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus />
          </div>
          <div class="mb-3">
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required />
          </div>
          <!-- Checkbox comentado
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="rememberMe" />
            <label class="form-check-label" for="rememberMe"> Mantenerme conectado </label>
          </div>
          -->
          <button id="submitButton" class="btn btn-primary w-100 mb-3" type="submit">Iniciar sesión</button>
          <div id="mensaje" class="text-danger text-center mt-2"></div>
        </form>
        <!-- Link olvidé contraseña comentado
        <a class="d-block text-center text-decoration-none mb-3" href="#">me olvidé la contraseña</a>
        -->
      </div>
    </div>
  </div>

  <!-- Footer -->


  <!-- Scripts -->
  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js/login.js"></script>

  <!-- Script AJAX -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch('controllers/loginController.php', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            window.location.href = data.redirect_url;
          } else {
            document.getElementById('mensaje').innerText = data.message;
          }
        })
        .catch(error => {
          console.error('Error al enviar el formulario:', error);
          document.getElementById('mensaje').innerText = "Error inesperado. Intente más tarde.";
        });
    });
  </script>
</body>
</html>
