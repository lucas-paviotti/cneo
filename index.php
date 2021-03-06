<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CNEO</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" type="image/png" href="favicon.ico"/>
</head>
  <body>

    <!-- NAVBAR START -->

    <header>
      <div class="navbar">
        <div class="container">
          <a href="" class="wow animate__animated animate__fadeInLeft logo-cneo"><img src="images/logo.png" alt="Logo CNEO"></a>
          <div class="menu wow animate__animated animate__fadeInRight">
            <span class="menu-text wow" data-wow-delay="0.2s">Menu</span>
            <div class="links">
              <ul>
                <li class="wow"><a href="#inicio">Inicio</a></li>
                <li class="wow" data-wow-delay="0.2s"><a href="#vision">Visión / Misión</a></li>
                <li class="wow" data-wow-delay="0.4s"><a href="#historia">Historia</a></li>
                <li class="wow" data-wow-delay="0.6s"><a href="#servicios">Servicios</a></li>
                <li class="wow" data-wow-delay="0.8s"><a href="#contactenos">Contactenos</a></li>
              </ul>
            </div>
            <button class="navbar-toggler collapsed" type="button">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          
        </div>
      </div>
    </header>

    <nav>
      <div class="container">
        <a href="" class="wow animate__animated animate__fadeInLeft logo-cneo"><img src="images/logo.png" alt="Logo CNEO"></a>
        <div class="menu wow animate__animated animate__fadeInRight">
          <span class="menu-text wow" data-wow-delay="0.2s">Menu</span>
          <div class="links">
            <ul>
              <li class="wow"><a href="#inicio">Inicio</a></li>
              <li class="wow" data-wow-delay="0.2s"><a href="#vision">Visión / Misión</a></li>
              <li class="wow" data-wow-delay="0.4s"><a href="#historia">Historia</a></li>
              <li class="wow" data-wow-delay="0.6s"><a href="#servicios">Servicios</a></li>
              <li class="wow" data-wow-delay="0.8s"><a href="#contactenos">Contactenos</a></li>
            </ul>
          </div>
          <button class="navbar-toggler collapsed" type="button">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        
      </div>
    </nav>

    <!-- NAVBAR END -->


    <!-- BACKGROUNDS START -->

    <div class="background" id="background-1"></div>
    <div class="background" id="background-2"></div>

    <!-- BACKGROUNDS END -->

    <!-- MODAL HISTORIA START -->

    <div class="modal fade" id="historiaModal" tabindex="-1" role="dialog" aria-labelledby="hsitoriaModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-4">
            Cuenta una leyenda del siglo XVII que Cneo Martius, un pastorcillo, llevaba un importante mensaje al Senado de Roma, con tal diligencia que no paró a quitarse una espina del pie hasta que no cumplió con su objetivo, por este motivo el Senado romano le homenajeó encargando esta escultura quedando inmortalizado el compromiso con su labor.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL HISTORIA END -->

    <!-- MODAL ENVIAR FORM START -->

    <div id="modalSendOk" class="modal fade text-center" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
            <!--<div class="modal-header" style="border-bottom: 0px;">
            </div>-->
            <div class="modal-body justify-content-center">            
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p><i class="fa fa-check-circle-o" aria-hidden="true"></i></p>
                <P>Mensaje enviado con éxito.</P>
                <p>En breve responderemos su consulta.</p>
                <p>Gracias por contactarse con nosotros.</p>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
        </div>
        <div id="modalSendError" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
            <!--<div class="modal-header" style="border-bottom: 0px;">
            </div>-->
            <div class="modal-body justify-content-center">            
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p><i class="fa fa-check-circle-o" aria-hidden="true"></i></p>
                <p class="d-flex justify-content-center">Hubo un error al enviar su mensaje, intente nuevamente.</p>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL ENVIAR FORM END -->

    <!-- FIXED MOUSE -->

    <div class="fixed-mouse">
      <div class="icon-scroll"></div>
      <div class="flecha-top"></div>
      <div class="flecha"></div>
    </div>

    <!-- FIXED MOUSE -->

    <!-- CONTENT START -->

    <div class="container wrapper home p-0 animate__animated animate__fadeIn">

      <div class="section-1">
        <div class="row">
          <div class="col-12 col-lg-7">
            <h1 class="wow animate__animated animate__fadeInDown">Bienvenidos<br>a <span style="color: #339cea;">CNEO</span></h1>
            <p class="wow animate__animated animate__fadeIn mb-0">Somos una empresa de logística internacional enfocada en brindar un servicio de calidad y excelencia, ajustado a las necesidades de nuestros clientes.</p>
          </div>
        </div>
        <div class="cajas-1">
          <img src="images/boxes-1.png" alt="Cajas CNEO" id="boxes-1" class="rellax wow animate__animated animate__fadeInRight" data-rellax-speed="-1">
          <img src="images/boxes-1-shadow.png" alt="Sombra Cajas" id="boxes-1-shadow" class="rellax" data-rellax-speed="-1">
        </div>
        <hr class="wow animate__animated animate__fadeIn">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h2 class="wow animate__animated animate__fadeInDown" style="color: #66ffcc;" id="vision">Visión</h2>
            <p class="wow animate__animated animate__fadeIn">Ser aliado estratégico de empresas que necesiten soluciones de logística internacional, logrando que nuestros clientes puedan dedicarse al “core business” de su actividad.</p>
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="wow animate__animated animate__fadeInDown" style="color: #66ccff;">Misión</h2>
            <p class="wow animate__animated animate__fadeIn">Brindar soluciones de logística para satisfacer los desafíos que implica el comercio internacional.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mouse">
          </div>
        </div>
        <div id="end-plus" class="wow animate__animated animate__fadeIn">
          <hr>
          <hr>
          <hr>
        </div>
        <img src="images/plane.png" alt="Avión" class="avion rellax wow animate__animated animate__fadeInLeft" data-rellax-speed="3" data-rellax-xs-speed="1" data-rellax-mobile-speed="5" data-rellax-desktop-speed="3">
      </div>
  
      <div class="section-2">
        <div class="row">
          <div class="col-12">
            <h2 class="wow animate__animated animate__fadeInDown" id="historia">Historia</h2>
          </div>
          <div class="col-12 col-lg-6">
            <p class="wow animate__animated animate__fadeIn">La empresa nace a principios del 2016 con el aporte de años de experiencia de sus socios.</p>
            <p class="wow animate__animated animate__fadeIn">Con el objetivo constante de incorporar nuevos servicios, en abril de 2018 el Ente Nacional de Comunicaciones otorgó mediante el número 978 la inscripción en el Registro Nacional de Prestadores de Servicios Postales, comenzando <span class="hide-desktop">a ofrecer el servicio de envíos Courier y puerta a puerta.</span></p>
          </div>
          <div class="col-12 col-lg-6">
            <p class="hide-mobile wow animate__animated animate__fadeIn">a ofrecer el servicio de envíos Courier y puerta a puerta.</p>
            <p class="wow animate__animated animate__fadeIn">Durante 2020 decidimos tomar un camino innovador adoptando en nombre Cneo Logística S.A. a fin de consolidar una identidad propia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mouse">
            <button type="button" class="btn btn-primary wow animate__animated animate__fadeInDown" data-toggle="modal" data-target="#historiaModal">Historia de la marca</button>
          </div>
        </div>
        <div class="row ">
          <div class="col-12">
            <h2 class="wow animate__animated animate__fadeInDown" id="servicios">Servicios <br>ofrecidos</h2>
          </div>
          <div class="col-12 col-lg-6">
            <p class="wow animate__animated animate__fadeIn">Cneo logística ofrece una variedad de servicios tendientes a satisfacer las necesidades específicas de cada cliente. Para el desarrollo de nuestro servicio contamos con deposito en Miami (Florida - USA) y agentes asociados en todo el mundo para alcanzar una cobertura global.</p>
          </div>
          <div class="col-12 col-lg-6 last-column">
            <p class="wow animate__animated animate__fadeIn">Ofrecemos traslado <b style="color: #3399ff; font-weight: 900;">terrestre, aéreo, marítimo o multimodal</b> desde el proveedor hasta el aeropuerto o puerto de destino.</p>
          </div>
        </div>
        <img src="images/container.png" alt="Container" id="container" class="rellax" data-rellax-speed="1">
        <img src="images/plane.png" alt="Avión" class="avion rellax" data-rellax-speed="3" data-rellax-xs-speed="1" data-rellax-desktop-speed="3">
      </div>
      
      <div class="section-3">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h2 class="wow animate__animated animate__fadeInDown" style="color: #66ccff;">Agente de <br>carga</h2>
          </div>
          <div class="col-12 col-lg-6 agente-de-carga mt-5 mt-lg-0">
            <div class="blue wow animate__animated animate__bounceIn" data-text="Embarques marítimos de contenedores (FCL) y carga consolidada (LCL)">
              <img src="images/icon-ship.svg" alt="Barco" style="width: 45px;">
            </div>
            <div class="blue wow animate__animated animate__bounceIn" data-text=" Tareas de depósito: recepción, almacenaje, seguimiento, embalaje especializado, tratamiento especial para materiales peligrosos." data-wow-delay="0.1s">
              <img src="images/icon-truck.svg" alt="Camión" style="width: 45px;">
            </div>
            <div class="blue wow animate__animated animate__bounceIn" data-text="Embarques aéreos consolidados de Miami para optimizar costos." data-wow-delay="0.2s">
              <img src="images/icon-plane.svg" alt="Avión" style="width: 43px;">
            </div>
            <div class="blue wow animate__animated animate__bounceIn" data-text="Cobertura de seguro (opcional)." data-wow-delay="0.3s">
              <img src="images/icon-clipboard.svg" alt="Clipboard" style="width: 27px;">
            </div>
            <div class="blue wow animate__animated animate__bounceIn" data-text="Búsqueda de tarifas y tiempos que se ajusten a las necesidades de cada cliente." data-wow-delay="0.4s">
              <img src="images/icon-planet.svg" alt="Planeta" style="width: 29px;">
            </div>
            <div id="text-shipping" style="background-image: url('images/black-gradient.jpg');" class="wow animate__animated animate__bounceIn" data-wow-delay="0.5s">
              <p>Ofrecemos traslado terrestre, aéreo, marítimo o multimodal desde el proveedor hasta el aeropuerto o puerto de destino.</p>
            </div>
          </div>
          <div class="col-12 line-break-center">
            <hr class="wow animate__animated animate__fadeInDown">
          </div>
          <div class="col-12">
            <h2 class="wow animate__animated animate__fadeInDown" style="color: #66ccff;">Courier <br>internacional</h2>
          </div>
          <div class="col-12 col-lg-6">
            <p class="wow animate__animated animate__fadeIn">Es una modalidad de pequeños envíos aéreos mediante la cual se puede realizar una importación simple y ágil de mercadería.</p>
            <p class="wow animate__animated animate__fadeIn">El servicio de Courier permite realizar envíos de un peso menor a los 50 kg, que no supere el valor FOB de u$d 3000 (tres mil dólares), la mercadería debe ser nueva y no estar alcanzado por la intervención de terceros organismos (Anmat, Senasa, Inal, CHAS, Seguridad eléctrica, Estampilla, etc.)</p>
          </div>
          <div class="col-12 col-lg-6">
            <p class="wow animate__animated animate__fadeIn">Contamos con salidas regulares desde los depósitos de Miami (Florida – USA) y Guanzhou (Canton – China). También tenemos acuerdos con transportistas para brindar servicio desde o hacia más de 220 países y territorios en todo el mundo.</p>
          </div>
          <div class="col-12 mouse">
            <hr>
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="wow animate__animated animate__fadeInDown">Asesoramiento Importación y exportación</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-10 col-lg-6">
            <p class="pr-4 p-0 wow animate__animated animate__fadeIn">Contamos con el aporte de profesionales especializados para brindar asesoramiento en la diversa gama de escenarios del proceso de importación o exportación de mercadería.</p>
          </div>
        </div>
        <img src="images/plane.png" alt="Avión" class="avion rellax" data-rellax-speed="5" data-rellax-xs-speed="1">
        <img src="images/earth.png" alt="Planeta Tierra" class="planeta rellax" data-rellax-speed="2" data-rellax-xs-speed="1">
        <img src="images/boxes-2.png" alt="Cajas CNEO" class="boxes-2 rellax" data-rellax-speed="1">
      </div>
  
      <div class="section-4">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="col-12 p-0 text-center text-lg-left">
              <h2 class="wow animate__animated animate__fadeInDown" id="contactenos">Contactenos</h2>
              <form  method="POST" id="f_contacto">
                <div class="row">
                  <div class="col-12 col-sm-6 col-lg-5 wow animate__animated animate__fadeIn">
                      <div class="iconos-formulario">
                        <img src="images/icon-person.svg" alt="icono persona">
                      </div>
                      <input type="text" name="nombre" placeholder="NOMBRE">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-5 wow animate__animated animate__fadeIn">
                      <div class="iconos-formulario">
                        <img src="images/icon-person.svg" alt="icono persona">
                      </div>
                      <input type="text" name="apellido" placeholder="APELLIDO">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-5 wow animate__animated animate__fadeIn">
                    <div class="iconos-formulario telefono">
                      <img src="images/icon-phone.svg" alt="icono telefono">
                    </div>
                    <input type="tel" name="telefono" placeholder="TELÉFONO">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-5 wow animate__animated animate__fadeIn">
                    <div class="iconos-formulario">
                      <img src="images/icon-mail.svg" alt="icono mail">
                    </div>
                    <input type="email" name="email" placeholder="MAIL">
                  </div>
                </div>
                <input type="submit" id="btn_enviar" value="Contactenos" class="btn btn-secondary wow animate__animated animate__fadeInDown">
              </form>
            </div>
          </div>
          <div class="col-12 col-lg-5 pt-5">
            <div class="col-12 p-0 wow animate__animated animate__fadeIn">
              <div class="icon">
                <img src="images/icon-marker.svg" alt="Icono ubicación">
              </div>
              <h3>Dirección</h3>
              <p>Ciudad Autónoma de Buenos Aires - <br>Argentina</p>
            </div>
            <div class="col-12 p-0 wow animate__animated animate__fadeIn">
              <div class="icon">
                <img src="images/icon-phone.svg" alt="Icono teléfono">
              </div>
              <h3>Teléfono</h3>
              <p>Phone: <a href="tel:0800-777-0071"><b style="color: #3399cc;">0800-777-0071</b></a></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img src="images/logo-gray.png" alt="Logo CNEO" class="wow animate__animated animate__fadeInLeft">
            <p class="wow animate__animated animate__fadeInRight">© COPYRIGHT 2020 by CNEO LOGISTICA. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/rellax.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/send.js"></script>
    <script src="js/main.js"></script>

    <script> 
      new WOW().init(); 
      var rellax = new Rellax('.rellax', {
        breakpoints:[576, 992, 1201]
      });
    </script>

  </body>
</html>