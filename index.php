<!DOCTYPE html>
<html lang="es">

<head>
  <title>Miravalle EcoSurf</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="images/Logo1.png">
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);


    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
<!--   <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
 --><!--   <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
 -->  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>
  <!-- //banner -->
  <div class="banner-left-side">
    <!-- header -->
    <div class="headder-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <a class="navbar-logo " href="index.php">
              <img id="logo" src="images/Logo1.png">
            </a>
          </h1>
        </div>
        <div class="sub-headder position-relative">
          <h6>
            <a href="#">Miravalle
              <br>EcoSurf</a>
          </h6>
        </div>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
        <li class="active">
            <a href="log_Reg.php"> Iniciar Sesion </a>
          </li>
          <li class="active">
            <a href="log_Reg.php"> Registrarse </a>
          </li>
          <li class="active">
            <a href="index.php">Inicio</a>
          </li>
          <li>
            <a href="#about">Acerca de</a>
          </li>
          <li>
            <a href="#service">Servicios</a>
          </li>
          <li>
          <li>
            <a href="#contact">Contactanos</a>
          </li>
        </ul>
      </nav>

      <!-- //nav -->
    </div>

    <!-- //header -->
    <!-- banner -->
    <div class="main-banner text-center" id="home">
      <div class="container">
        <div class="social-icons mb-lg-4 mb-3">
          <ul>
            <li class="facebook">
              <a href="#">
                <span class="fa fa-facebook"></span>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="instagram">
              <a href="https://instagram.com/miravallecosurf?igshid=YmMyMTA2M2Y=">
                <span class="fa fa-instagram"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2">Miravalle</h5>
          <h4>EcoSurf </h4>
        </div>
        <div class="slide-info-txt">
          <p> Somos un hotel de playa ubicado en la bella playa Miravalle, una playa extremadamente limpia y segura. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Acerca de nosotros</h3>

      <div class="row">
        <div class="col-lg-5 video-info-img text-center position-relative">
          <div class="abut-img-w3l">
            <img src="images/bb1.jpg" alt="" class="img-fluid">
          </div>
          <div class="abut-img-two">
            <img src="images/bb2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 left-abut-txt ">
          <div class="about-right-grid">
            <h2 class="mb-3">Relajate al sonido de las olas</h2>
            <p>Miravalle EcoSurf es un hotel ubicado en la hermosa playa Miravalle, una playa extremadamente agradable y buena para surfear.
              Como estadía ofrecemos una amplia variedad de amenidades, como lo son una gran selección de habitaciones para hospedarse, un restaurante
              con un amplio menú, una tienda de diferentes articulos de conveniencia, especialmente relacionados al surf, como puede ser cera para tabla,
              straps, camisetas, y muchas cosas mas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//about -->
  <!-- store-info -->

  <!--//store-info -->
  <!-- service -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Servicios</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p> Aqui podras encontrar las diferentes amenidades que tiene EcoSurf </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab1.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <a href="estadia.html"> Estadía </a>
              <p class="mt-2"> Escoge entre una amplia variedad de habitaciones de gran comodidad</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab2.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <a href="restaurante.html"> Restaurante </a>

              <p class="mt-2"> Escoge el plato de tu preferencia de nuestro amplio menu de comida </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab3.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <a href="tiendas.html"> Surf Shop </a>

              <p class="mt-2"> Compra implementos de surf de nuestra gran tienda </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab4.png" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <a href="tiendas.html"> Souvenir Shop </a>

              <p class="mt-2"> ¿Quieres un recuerdo para ti o para regalar a tu familiar? Compralo en nuestra tienda de Souvenirs </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab5.jpeg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <a href="Clases.html"> Clases de Surf </a>
              <p class="mt-2"> Eres entusiasta del surf y deseas aprender? Agenda tus lecciones ya y aprende con nosotros </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="images/ab6.jpeg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
                <a href=#>Información sobre la playa </a>
              <p class="mt-2">Aqui encontraras toda las estadisticas de las diferentes playas con las que cuenta el pais.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//service -->

  <section>
    <div class="container-fulid">
      <div class="address_mail_footer_grids">
        <iframe src="https://maps.google.com/maps?q=13.532228882220366,%20-89.75886145622364&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
<!--        <iframe src="https://www.surfline.com/surf-report/la-bocana/5842041f4e65fad6a7708bae"></iframe>
 -->
      </div>
    </div>
  </section>
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Contactanos</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p> ¿Tienes dudas? Ponte en contacto con nosotros y haznos saber tu duda y nosotros nos pondremos en contacto contigo lo antes posible
        </p>
      </div>
      <div class="contact-form">
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Nombre " required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder=" Apellido " required="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Numero de telefono" required="">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="email" class="form-control" placeholder="Correo electronico" required="">
            </div>
          </div>
          <div class="form-group contact-forms">
            <textarea class="form-control" placeholder="Mensaje..." required=""></textarea>
          </div>
          <button type="submit" class="btn sent-butnn btn-lg">Enviar</button>
        </form>
      </div>
    </div>
  </section>
  <!-- footer -->
  <section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class="row ">
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Direccion</h4>
          <div class="bottom-para ">
            <div class="footer-office-hour">
              <ul>
                <li class="mb-2">
                  <p>Canton El Portezuelo, Miravalles</p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>Telefono</h6>
                </li>
                <li>
                  <p> (503) 7265-8128 </p>
                </li>
                <li class="my-2">
                  <h6>Correo electronico</h6>
                </li>
                <li>
                  <p>
                    <a href="#">20210024@santacecilia.edu.sv</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
      <!-- move icon -->
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
      <!--//move icon -->
    </div>
  </section>

</body>

</html>