

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Teachers Directory Website" />
  <meta name="title" property="og:title" content="BuscaProfe" />
  <meta property="og:type" content="Website" />
  <meta name="image" property="og:image" content="https://images.unsplash.com/photo-1581726707445-75cbe4efc586?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" />
  <meta name="description" property="og:description" content="Teachers Directory Website" />
  <meta name="author" content="Steven Jack Chung" />
  <link rel="icon" type="image/png" href="assets/icon-zz.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto+Condensed:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop.css">
  
  <title>BuscaProfe</title>
</head>

<body>
<header class="header">
    <nav class="nav-bar">
      <div class="zz-cont">
        <a href="bienvenida.php"><img class="nav-logo" src="assets/buscaprofe_logo.PNG" alt="zz"></a>
      </div>
      <div class="menu">
        <ul class="menu-list">
            <li>
                <a href="bienvenida.php"><i class="fas fa-home"></i><span class="d-none">Inicio</span></a>
              </li>
              <li>
                <a href="../Busca_Profe_Tav/search.html"><i class="fa fa-search"></i><span class="d-none">Buscar</span></a>
              </li>
              <li>
                <a href="bienvenida.php"><i class="fas fa-user"></i><span class="d-none">Mi Cuenta</span></a>
              </li>
              <li>
                <a href="index.html"><i class="fas fa-bars"></i><span class="d-none">Cerrar Sesion</span></a>
              </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="main">
    <section class="lobby pos-rel">
      <div class="img-bg">
      </div>
      <div class="homepage">
        <h1 class="title pos-rel">
          Encuentra un profesor especializado en la materia que necesitas aprender
        </h1>
        <div class="search-f-container pos-rel">
          <h5 class="form-title">Busca por materia</h5>
          <form class="search-form" action="search.html">
            <input class="search" type="search">
            <button class="search-btn" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </section>

    <section class="instructions">
      <div class="inst-header">
        <h3>Como funciona?</h3>
        <p>Nuestra pagina funciona en 3 sencillos pasos</p>
      </div>

      <div class="flex">
        <div class="col">
          <div class="item">
            <i class="fas fa-search"></i>
            <h4>Busca lo que necesitas</h4>
            <p>En la pagina principal, puedes buscar por materias dependiendo de lo que necesites, teniendo acceso a una lista de los 
              mejores profesores para sus materias. 
              In the homepage, search for the subject(s) your kids needs work on and there will be a list with the best
              teachers on the subject. Select one of the teachers to view their profile information and CV.</p>
          </div>

          <div class="item">
            <i class="fas fa-user-check"></i>
            <h4>Selecciona</h4>
            <p>Cuando decidas cual profesor se acomoda a tus necesidades, puedes contactar con el y solicitar una reunion para charlar 
              con el profesor, para asi obtener mas informacion sobre su personalidad y su forma de llevar las clases.</p>
          </div>

        </div>


          <div class="item">
            <i class="fas fa-book-open"></i>
            <h4>Estudia y aprende</h4>
            <p>Ahora es el momento de coordinar las clases directamente con el profesor, y ingresar a ellas para adquirir conocimientos.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="mid-sec">
      <div class="country pos-rel">
        <div class="main-info">
          <div class="info">
            <h4>Cada dia se suman mas profesores alrededor del muendo a nuestra plataforma</h4>
            <p>Encuentra el mejor profesor de nuestro programa.</p>
          </div>
          <form class="mid-form" action="#">
            <button class="mid-btn" type="submit">Encuentra tu profesor ideal</button>
          </form>
        </div>
        <picture>
          <img class="img" src="assets/world.png" alt="world">
        </picture>
      </div>

      <div class="near-u pos-rel">
        <div class="main-info">
          <div class="info">
            <h4>Mas facil de encontrar no puede ser. No mas paginas extrañas y suscripciones de pago innesesarias.</h4>
            <p>Busca el profesor mas cerca de tu hogar, o directamente consigue uno online.</p>
          </div>
          <form class="mid-form" action="#">
            <button class="mid-btn" type="submit">Encuentra algun profesor cerca</button>
          </form>
        </div>
        <picture>
          <img class="img" src="assets/internet.svg" alt="internet">
        </picture>
      </div>

      <div class="promo pos-rel">
        <div class="main-info">
          <div class="info">
            <h4>Donde quieras, Cuando quieras</h4>
            <p>BuscaProfe es un sitio gratuito que te ayuda a encontrar tu profesor ideal, ademas puedes busdcar
              desde cualquier dispositivo.
            </p>
          </div>
        </div>
        <picture>
          <img class="img" src="assets/phone.svg" alt="phone">
        </picture>
      </div>
    </section>
  </main>

  <footer>
    <div class="top-footer">
      <div class="footernav">
        <ul class="footer-menu">
          <li>
            <a href="#">Inicio</a>
          </li>
          <li>
            <a href="#">Buscar</a>
          </li>
          <li>
            <a href="#">Sobre Nosotros</a>
          </li>
          <li>
            <a href="#">Noticias</a>
          </li>
        </ul>
        <div class="footer-zz"><img src="assets/icon-icon.png" alt=""></div>
        <ul class="social-media">
          <li>
            <a href="#">Facebook</a>
          </li>
          <li>
            <a href="#">Twitter</a>
          </li>
          <li>
            <a href="#">Instagram</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
        </ul>
      </div>

      <div class="contact-block">
        <div class="subscribe">
          <h3 class="sub-title">Suscribete</h3>
          <form class="sub-form" action="#">
            <input class="sub-email" type="email" placeholder="you@example.com">
            <button class="sub-btn" type="submit">ENVIAR</button>
          </form>
        </div>

        <div class="contact-us d-none">
          <h3 class="sub-title">Contacto</h3>
          <p>Tienes alguna duda o inquietud? <br><span>info@buscaprofe.com</span></p>
        </div>

        <div class="about d-none">
          <h3 class="sub-title">Acerca de Nosostros</h3>
          <p>BuscaProfe es un sitio web donde puedes encontrar profesores cerca de tu casa y/o los mejores profesores online
            el cual te guiara paso a paso para obtener la clase y aprender de una manera remota o presencial. Mucho mas facil
            que otros sitios donde debes pagar membresias o contar con sistemas negligentes. <a href="#">Leer mas...</a></p>
        </div>
      </div>
    </div>

    <div class="bot-footer">
      <div class="d-none">
        <ul class="social-zzs">
          <li>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="copyright">
        <p>Copyright © 2023 BuscaProfe. All Rights Reserved</p>
      </div>
    </div>
  </footer>
</body>

</html>