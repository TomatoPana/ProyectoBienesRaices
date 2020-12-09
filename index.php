<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/normaliza.css">
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="CSS/bootstrap/js/bootstrap.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

  <header class="site-header inicio">

    <div class="contenedor contenido-header">
      <div class="barra">
        <a href="index_actualizado.html">
          <img src="img/logo.svg" alt="Logotipo de BienesRaices">
        </a>
        <nav class="navegacion">
          <a targer="_blank" href="nosotros_actualizado.html">Nosotros</a>
          <a href="anuncios_actualizado.html">Anuncios</a>
          <a href="blog_actualizado.html">Blog</a>
          <a href="subir.html">Vender</a>
          <a href="mi_cuenta.html">Mi Cuenta</a>

        </nav>
      </div>

      <h1>Venta de casas y Departamentos Exclusivos de Lujo</h1>
    </div>
    <!--Contenedor-->
  </header>

  <section class="contenedor">
    <h2 class="centrar-texto">Mas sobre nosotros</h2>

    <div class="icono-nosotros">
      <div class="icono">
        <img src="img/icono1.svg" alt="Icono">
        <h3>Seguridad</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste totam unde repellendus nihil. </p>
      </div>

      <div class="icono">
        <img src="img/icono1.svg" alt="Icono">
        <h3>El Mejor Precio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste totam unde repellendus nihil. </p>
      </div>

      <div class="icono">
        <img src="img/icono1.svg" alt="Icono">
        <h3>A Tiempo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste totam unde repellendus nihil. </p>
      </div>
    </div>

  </section>

  <main class="seccion contenedor">

    <h2 class="centrar-texto">Casas y Departamentos en venta</h2>

    <div class="contenedor-anuncio">

      <?php 
        
      ?>

      <div class="anuncio">
        <img src="img/anuncio1.jpg" alt="anuncio">
        <div class="contenido-anuncio centrar-texto">
          <h3>Casas de Lujo en el Lago</h3>
          <p>Casa en el lago con exelente vista, acabads de lujo a un exelente precio</p>
          <p class="precio">$3,000,000</p>

          <ul class="icono-caracteristicas">
            <li>
              <img src="img/icono_wc.svg" alt="WC">
              <p>3</p>
            </li>
            <li>
              <img src="img/icono_estacionamiento.svg" alt="Estacionamiento">
              <p>2</p>
            </li>
            <li>
              <img src="img/icono_dormitorio.svg" alt="Dormitorio">
              <p>3</p>
            </li>
          </ul>

          <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
        </div>
      </div>

      <div class="anuncio">
        <img src="img/anuncio2.jpg" alt="anuncio">
        <div class="contenido-anuncio centrar-texto">
          <h3>Casa con Terminados de Lujo</h3>
          <p>Casa con diseño moderno, asi como tecnologia inteligente y amueblada</p>
          <p class="precio">$2,000,000</p>

          <ul class="icono-caracteristicas">
            <li>
              <img src="img/icono_wc.svg" alt="WC">
              <p>3</p>
            </li>
            <li>
              <img src="img/icono_estacionamiento.svg" alt="Estacionamiento">
              <p>2</p>
            </li>
            <li>
              <img src="img/icono_dormitorio.svg" alt="Dormitorio">
              <p>3</p>
            </li>
          </ul>

          <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
        </div>
      </div>

      <div class="anuncio">
        <img src="img/anuncio3.jpg" alt="anuncio">
        <div class="contenido-anuncio centrar-texto">
          <h3>Casa con Alberca y Enorme Jardin</h3>
          <p>Casacon alberca y acabados modernos con estilo</p>
          <p class="precio">$3,000,000</p>

          <ul class="icono-caracteristicas">
            <li>
              <img src="img/icono_wc.svg" alt="WC">
              <p>3</p>
            </li>
            <li>
              <img src="img/icono_estacionamiento.svg" alt="Estacionamiento">
              <p>2</p>
            </li>
            <li>
              <img src="img/icono_dormitorio.svg" alt="Dormitorio">
              <p>3</p>
            </li>
          </ul>

          <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
        </div>
      </div>
    </div>
    <div class="ver-end">
      <a href="anuncios.html" class="boton boton-verde">Ver Todas</a>
    </div>
  </main>
  <section class="imagen-contacto seccion">
    <div class="contenedor contenido-contacto">
      <h2>Encuentra la Casa de Tus Sueños</h2>
      <p>Busca facil y sencillo nuetras casas en venta</p>
      <a href="anuncios.html" class="boton boton-amarillo">Ver</a>
    </div>
  </section>

  <div id="carouselExampleControls" class="carousel slide contenedor seccion" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/destacada3.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/destacada.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/destacada2.jpg" class="d-block w-100" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

  <div class="seccion-inferior contenedor">

    <section class="blog">

      <h3 class="centrar-texto">Nuestro Blog</h3>

      <article class="entrada-blog">
        <div class="imagen">
          <img src="img/blog1.jpg" alt="Blog">
        </div>
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Terraza en el Techo de tu casa</h4>
          </a>
          <p>Consejos para construir una terraza en el techo de tu casa</p>
        </div>
      </article>

      <article class="entrada-blog">
        <div class="imagen">
          <img src="img/blog2.jpg" alt="Blog">
        </div>
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Guia para la decoracion de tu hogar</h4>
          </a>
          <p>Consejos para la decoracion de tu casa</p>
        </div>
      </article>
    </section>

    <section class="testimoniales">
      <h3 class="centrar-texto">Testimonial</h3>
      <div class="testimonial">
        <blockquote>
          El personal se comporto de exelente forma, muy bien servicio y me ayudaron en todo momento
        </blockquote>
        <p>-Samuel Cruz Martinez</p>
      </div>
    </section>
  </div>
  <footer class="site-footer seccion">
    <div class="contenedor contenedor-footer">
      <nav class="navegacion">
        <a targer="_blank" href="nosotros.html">Nosotros</a>
        <a href="anuncios.html">Anuncios</a>
        <a href="blog.html">Blog</a>
      </nav>
      <p class="copyright">Todos los derechos reservados &copy;</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>