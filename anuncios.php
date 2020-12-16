<?php
  require_once('header.php');
  $stmt = $conn->prepare("SELECT id, nombre, descripcion, imagen, banios, cocheras, recamaras, precio FROM venta WHERE en_venta = 1 ORDER BY id ASC");
?>
<main class="seccion contenedor">
  <h2 class="centrar-texto">Casas y Departamentos en venta</h2>

  <div class="contenedor-anuncio">
    <?php 
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
      }
    ?>
  </div>

</main>
<?php
  require_once('footer.php');
?>