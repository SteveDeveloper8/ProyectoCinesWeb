<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="img/icono-pestana.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="cine,peliculas,movies,entretenimiento,actores,cartelera,estreno"
    />
    <meta
      name="author"
      content="Daniel Asanza,Bryan Martínez,Alfredo López,Giampaolo Delgado"
    />
    <meta
      name="description"
      content="Aplicacion de cine,proyecto primer parcial, sexto semestre"
    />
    <link rel="stylesheet" href="css/estilos.css" />
    <script
      src="https://kit.fontawesome.com/6faef096ec.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Multicines</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Roboto Condensed", sans-serif;
        letter-spacing: 0.8px;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="header-top">
        <div class="redes">
          <a href="#">
            <i id="facebook" class="fab fa-facebook-square"></i>
          </a>
          <a href="#">
            <i id="instagram" class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i id="twitter" class="fab fa-twitter"></i>
          </a>
        </div>
        <div class="header-Botones">
          <a id="registro" href="html/registrate.html">Registrate</a>
          <a id="inicioSesion" href="#">Iniciar Sesión</a>
        </div>
      </div>
      <div class="header-principal">
        <div class="logo">
          <a href="index.html"><img src="img/logo.png" alt="logo" /></a>
        </div>
        <nav class="navegacion">
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <!-- TODO: Asanza -->
            <li><a href="html/Cartelera.html">Cartelera</a></li>
            <!-- TODO: Lopez -->
            <li><a href="html/SnackBar.html">Snackbar</a></li>
            <!-- TODO: Asanza -->
            <li><a href="html/promociones.html">Promociones</a></li>
            <!-- TODO: Martinez -->
            <li><a href="html/QuienesSomos.html">Quienes somos</a></li>
            <!-- TODO: Lopez -->
            <li><a href="html/contactenos.html">Contáctanos</a></li>
            <!-- TODO: Martinez -->
            <!-- TODO: Delgado Registro ** Trabaja con nosotros-->
          </ul>
        </nav>
      </div>
    </header>

    <!-- TODO: slider start -->
    <div class="container-slider">
      <div class="slider" id="slider">
        <div class="slider--section">
          <img src="img/banner1.jpg" alt="" class="slider__img" />
        </div>
        <div class="slider--section">
          <img src="img/banner2.jpg" alt="" class="slider__img" />
        </div>
        <div class="slider--section">
          <img src="img/banner3.jpg" alt="" class="slider__img" />
        </div>
        <div class="slider--section">
          <img src="img/banner4.jpg" alt="" class="slider__img" />
        </div>
        <div class="slider--section">
          <img src="img/banner5.jpg" alt="" class="slider__img" />
        </div>
        <div class="slider--section">
          <img src="img/banner6.jpg" alt="" class="slider__img" />
        </div>
      </div>
      <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
      <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>

    <div class="promoDinner">
      <img src="img/dinerClub.gif" alt="promoDinner" />
    </div>

    <div class="container">
      <div class="carteleraEstreno">
        <h1>Estrenos / Carterlera</h1>
        <div class="peliculas">
          <div class="peliculaDiv" id="pelicula1">
            <div class="peli">
              <img src="img/pelicula1.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula2">
            <div class="peli">
              <img src="img/pelicula2.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula3">
            <div class="peli">
              <img src="img/pelicula3.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula4">
            <div class="peli">
              <img src="img/pelicula4.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula5">
            <div class="peli">
              <img src="img/pelicula5.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula6">
            <div class="peli">
              <img src="img/pelicula6.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula7">
            <div class="peli">
              <img src="img/pelicula7.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula8">
            <div class="peli">
              <img src="img/pelicula8.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
          <div class="peliculaDiv" id="pelicula9">
            <div class="peli">
              <img src="img/pelicula9.jpg" alt="Pelicula" />
            </div>
            <a class="btn-comprar">Comprar</a>
          </div>
        </div>
      </div>
      <div class="publicidad">
        <a href="img/Precios.jpeg" target="_blank">Precio Entradas</a>
        <div class="publicidadDiner">
          <img src="img/publicidadDinner.jpg" alt="DinerClub" />
        </div>
      </div>
    </div>

    <script src="js/codigo.js"></script>

    <footer>
      <div id="footer">
        <div class="tabla">
          <p>
            <strong><span class="borde">Contáctanos</span></strong>
          </p>

          <a href="html/contactenos.html">Escríbenos</a>
          <br />
          <a href="html/QuienesSomos.html">Quienes somos</a>
          <br />
          <a href="html/TrabajaConNosotros.html">Trabaja con nosotros</a>
          <br />
          <a href="#">Donde estámos</a>
        </div>
        <div class="tabla">
          <p>
            <strong><span class="borde">Servicio Coorporativo</span></strong>
          </p>

          <a href="#">Publicidad</a>
          <br />
          <a href="#">Cupones</a>
          <br />
          <a href="#">Cumpleaños</a>
        </div>
        <div class="tabla">
          <p>
            <strong><span class="borde">Redes sociales</span></strong>
          </p>
          <div class="red fb">
            <img
              src="ico/facebook.ico"
              style="width: 18px; height: 18px"
              alt="icono"
            />
            <a href="#">Facebook</a>
          </div>
          <div class="red">
            <img
              src="ico/twitter.ico"
              style="width: 22px; height: 22px"
              alt="icono"
            />
            <a href="#">Twitter</a>
          </div>
          <div class="red">
            <img
              src="ico/youtube.ico"
              style="width: 22px; height: 22px"
              alt="icono"
            />
            <a href="#">Youtube</a>
          </div>
          <div class="red">
            <img
              src="ico/instagram.ico"
              style="width: 24px; height: 24px"
              alt="icono"
            />
            <a href="#">Instagram</a>
          </div>
        </div>
        <div class="tabla">
          <div class="call-center">
            <p><span class="borde">Call Center</span></p>
            <p>1-800-691060</p>
            <p>Horario</p>
            <p>10h00 - 21h00</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
