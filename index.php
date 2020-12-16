<?php 
  require_once('header.php')
?>

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
      $stmt = $conn->prepare("SELECT id, nombre, descripcion, imagen, banios, cocheras, recamaras, precio FROM venta WHERE en_venta = 1 ORDER BY id ASC LIMIT 3");
      if($stmt->execute()){
        while ($row = $stmt->fetch()){
          ?>
          <div class="anuncio">
            <img src="img/<?php echo $row['imagen']; ?>" alt="anuncio">
            <div class="contenido-anuncio centrar-texto">
              <h3><?php echo $row['nombre']; ?></h3>
              <p><?php echo $row['descripcion']; ?></p>
              <p class="precio">$<?php echo number_format($row['precio']); ?></p>

              <ul class="icono-caracteristicas">
                <li>
                  <img src="img/icono_wc.svg" alt="WC">
                  <p><?php echo $row['banios']; ?></p>
                </li>
                <li>
                  <img src="img/icono_estacionamiento.svg" alt="Estacionamiento">
                  <p><?php echo $row['cocheras']; ?></p>
                </li>
                <li>
                  <img src="img/icono_dormitorio.svg" alt="Dormitorio">
                  <p><?php echo $row['recamaras']; ?></p>
                </li>
              </ul>

              <a href="anuncio.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo d-block">Ver Propiedad</a>
            </div>
          </div>
          <?php
        }
      } else {
        die();
      }
    ?>

    
  </div>
  <div class="ver-end">
    <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
  </div>
</main>
<section class="imagen-contacto seccion">
  <div class="contenedor contenido-contacto">
    <h2>Encuentra la Casa de Tus Sueños</h2>
    <p>Busca facil y sencillo nuetras casas en venta</p>
    <a href="anuncios.php" class="boton boton-amarillo">Ver</a>
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

    <?php 
      $stmt2 = $conn->prepare("SELECT * FROM blog ORDER BY id ASC LIMIT 2");
      if($stmt2->execute()){
        while ($row = $stmt2->fetch()){
          ?>
            <article class="entrada-blog">
              <div class="imagen">
                  <img src="img/<?php echo $row['imagen']; ?>" alt="Blog">
              </div>
              <div class="texto-entrada">
                  <a href="entrada.php?id=<?php echo $row['id']; ?>">
                      <h4><?php echo $row['nombre']; ?></h4>
                  </a>
                  <p><?php echo $row['descripcion']; ?></p>
              </div>
            </article>
          <?php
        }
      }
    ?>
    
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
<?php
  require_once('footer.php');
?>