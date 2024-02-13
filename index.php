<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/logos_figra/1x/SVG/Recurso 5.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./vendors/fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="./vendors/OWL-Carousel/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="./vendors/OWL-Carousel/owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="./css/style.css">

  <script src="./vendors/jquery-3.7.0.js"></script>
  <script src="./vendors/OWL-Carousel/owl-carousel/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-lg">
    <a id="nav-bar" class="navbar-brand" href="#"><img src="./images/logos_figra/logo.webp" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#nav-bar">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#id_servicios">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./nosotros/">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#id_contacto">CONTACTO</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="pad-ini col-md-11 m-auto">
    <div class="row">
      <div class="col-md-6 ">
        <div class="row">
          <div class="pincipal-text col-md-12">
            <h1>Figra Gas</h1>
            <b style="color: #03a9f3;">¡Realiza tu primer pedido ahora!</b><br>
            <span class="text-muted">La calidad de hoy, la calidéz de siempre</span>
            <div class="row justify-content-center">
              <div class="dropdown mt-3">
                <button class="btn btn-pill btn-danger btn-lg m-2 dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ¡Llámanos ahora!
                </button>
                <div class="dropdown-menu dropdown-menu-wide" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-center" href="tel:7711125428">771-112-5428</a>
                  <a class="dropdown-item text-center" href="tel:7721119046">772-111-9046</a>
                  <a class="dropdown-item text-center" href="tel:7727494553">772-749-4553</a>
                </div>
              </div>


              <button id="whatsapp_act" class="btn btn-pill btn-success m-2 btn-md"> Hacer un pedido por <br>whatsapp <i
                  class="fab fa-whatsapp"></i></button>
            </div>

          </div>
        </div>
        <div class="row col-md-12">
          <div class="image-k col-md-10 text-center mt-4">
            <div class="owl-carousel owl-theme">
              <div class="precio_litro">
                <label class="titulo-precios">Precio por litro</label>
                <br>
                <label id="precio_l">$</label>
              </div>
              <div class="precio_tanque">
                <label class="titulo-precios">Precio por kilo</label>
                <br>
                <label id="precio_k">$</label>
              </div>
            </div>

            <small class="fecha_precio"></small>
          </div>

        </div>
      </div>
      <div class="carousel-conter col-md-6">
        <div class="row">
          <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block" src="./images/carousel/img1.webp" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="./images/carousel/img2.webp" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="./images/carousel/img3.webp" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="./images/general/img1 (5).jpeg" alt="Imagen 4">
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
            <div class="camion">
              <img src="./images/figra/camion.webp" alt="Imagen 1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div id="id_servicios" class="col-12">
    <div class="content-fluid text-center">
      <div class="content-fluid">
        <b style="font-size: 2rem;">Servicios</b>
      </div>
      <div class="row justify-content-center text-white">
        <div class="col-sm-3 bg-blue shadow">
          <img class="image-serv" src="./images/general/SVG/Recurso 34.svg">
          <hr>
          <h4>Cilindro</h4>
          <p>Contamos con cilindros de 20 y 30 kilogramos el cual le asegura su calidad y cantidad.</p>
        </div>
        <div class="col-sm-3 bg-blue shadow">
          <img class="image-serv" src="./images/general/SVG/Recurso 3.svg">
          <hr>
          <h4>Tanque estacionario</h4>
          <p>Recarga tu tanque con tranquilidad y garantiza la cantidad precisa.</p>
        </div>

        <div class="col-sm-3 bg-blue shadow">
          <img class="image-serv py-3" src="./images/general/SVG/Recurso 4.svg">
          <hr>
          <h4>Estación de llenado</h4>
          <p>Abastece tu vehículo y/o tanque de gas en nuestras estaciones de servicio de confianza.</p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div id="id_servicios" class="">
    <div class="text-center justify-content-center">
      <b class="" style="font-size: 2rem;">¿Comó realizo mi pedido?</b>
      <div class="row justify-content-center m-1">
        <div class="col-md-3 m-3 shadow-lg bg-white  slide-up" data-shown="false" style="border-radius: 15px;  color: #0a6ec0;">
          <div class="row m-0">
            <div class="col-6" style="top:2.53rem; left: 1rem;">
              <span class="">
                <i class="iconos-pedido fab fa-whatsapp"
                  style="font-size: 290%; bottom: 1px; border:solid; border-radius: 50%; border-color: #0a6ec0; padding: 1rem;"></i>

              </span>

            </div>
            <div class="col-6">
              <span style=" position: relative; font-size: 9rem; bottom: 1rem; left: 2rem;">1</span>
            </div>
          </div>
          <div class="col-12 pb-4" style=" color: black">
            Mándanos un mensaje de WhatsApp a este número 7711125428 y nuestro bot se encargara de darle seguimiento a
            tu orden
          </div>
        </div>
        <div class="col-md-3 m-3 shadow-lg bg-white  slide-up" data-shown="false" style="border-radius: 15px;  color: #0a6ec0;">
          <div class="row m-0">
            <div class="col-6" style="top: 3rem; left: 1rem;">
              <span class="">
                <i class="iconos-pedido fas fa-phone-alt"
                  style="font-size: 250%; bottom: 1px; border:solid; border-radius: 50%; border-color: #0a6ec0; padding: 1rem;"></i>

              </span>

            </div>
            <div class="col-6">
              <span style=" position: relative; font-size: 9rem; bottom: 1rem; left: 2rem;">2</span>
            </div>
          </div>
          <div class="col-12 pb-4" style=" color: black">
            Puede realizar una llamada y un ejecutivo se encargará de dar seguimiento a su pedido
          </div>
        </div>

      </div>
      <div class="justify-content-center row m-1">
        <div class="col-md-3 m-3 shadow-lg bg-white  slide-up" data-shown="false" style="border-radius: 15px;  color: #0a6ec0;">
          <div class="row m-0">
            <div class="col-6" style="top: 3rem; left: 1rem;">
              <span class="">
                <i class="iconos-pedido fas fa-money-bill-wave-alt"
                  style="font-size: 250%; bottom: 1px; border:solid; border-radius: 50%; border-color: #0a6ec0; padding: 1rem;"></i>

              </span>

            </div>
            <div class="col-6">
              <span style=" position: relative; font-size: 9rem; bottom: 1rem; left: 2rem;">3</span>
            </div>
          </div>
          <div class="col-12 pb-4" style=" color: black">
            Tu pago se efectuará una vez que hayas recibido el servicio solicitado
          </div>
        </div>
        <div class="col-md-3 m-3 shadow-lg bg-white  slide-up" data-shown="false" style="border-radius: 15px;  color: #0a6ec0;">
          <div class="row m-0">
            <div class="col-6" style="top: 3rem; left: 1rem;">
              <span class="">
                <i class="iconos-pedido fas fa-hands-helping"
                  style="font-size: 250%; bottom: 1px; border:solid; border-radius: 50%; border-color: #0a6ec0; padding: 1rem;"></i>

              </span>

            </div>
            <div class="col-6">
              <span style=" position: relative; font-size: 9rem; bottom: 1rem; left: 2rem;">4</span>
            </div>
          </div>
          <div class="col-12 pb-4" style=" color: black">
            Ten la seguridad de que has recibido producto de calidad
          </div>
        </div>

      </div>
    </div>
  </div>
  <hr>
  <footer class="container-fluid footer p-1">
    <div class="container-fluid text-white footer-top" style="justify-content: between; ">
      <div class="col-md-9 mx-auto">
        <div class="row">
          <div class="col-md-6">
            <div class="logomini col-md-12">
              <img src="./images/logos_figra/1x/SVG/Recurso 11.svg" alt="logo" class="brand-logo">
            </div>
            <div class="col-md-12">
              <div class="d-flex flex-row footer-social-icons mb-3 text-center">
                <a href="https://www.facebook.com/FigraGasOfficial" target="_blank" class="bg-facebook"><i
                    class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/figragas_official/" target="_blank" class="bg-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/527711125428?text=Me%20gustaría%20más%20pedir%20más%20información."
                  target="_blank" class="bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://tiktok.com/Mi_pagina" class="bg-tiktok" target="_blank"><i
                    class="fab fa-tiktok"></i></a>
              </div>
            </div>

          </div>

          <div class="col-md-6 ">
            <div class="row contact-details">
              <div id="id_contacto" class="col-12">Datos de contacto:</div>
              <div class="col-12 d-flex mb-2 mt-4 ">
                <i class="fas fa-phone-alt"></i>
                <h6 class="font-weight-normal">7711125428</h6>
              </div>
              <div class="col-12 d-flex mb-1">
                <i class="far fa-envelope"></i>
                <h6 class="font-weight-normal">figragasofficial@gmail.com</h6>
              </div>
            </div>
            <ul class="nav mt-3 pl-2">
              <li class="nav-item">
                <a class="nav-link" href="#nav-bar">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#id_servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#id_contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </div>
    <div class="row footer-bottom my-4">
      <div class="col-md-8 mx-auto">
        <div class="container-fluid clearfix ">
          <span class="d-block text-center text-sm-left d-sm-inline-block text-muted">Copyright © 2023 <b>Figra-gas</b>.
            All rights
            reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">MACE_TECH ©</span>
        </div>
      </div>
    </div>
    <a href="https://wa.me/527711125428?text=Me%20gustaría%20más%20pedir%20más%20información." class="whatsapp"
      target="_blank" role="button"> <i class="fab fa-whatsapp whatsapp-icon"></i> </a>
    <a href="tel:+527711125428" class="tel-icon" target="_blank" role="button"><i class="fa fa-phone whatsapp-icon"
        aria-hidden="true"></i></a>
  </footer>

  <script src="./js/main.js"></script>

</body>

</html>