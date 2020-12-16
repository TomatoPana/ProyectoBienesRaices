<?php
  require_once('header.php');
  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $stmt = $conn->prepare("SELECT id, nombre, descripcion, imagen, banios, cocheras, recamaras, precio, en_venta FROM venta WHERE id = ? ORDER BY id ASC");
    if($stmt->execute(array($_GET['id']))){
      $result = $stmt->fetchAll();
      if(empty($result)){
        header('location: /');
      } else {
        ?>
          <?php
            $result = $result[0];
            if($result['en_venta'] != '1'){
              ?>
                <div class="alert alert-danger" role="alert">
                  <h1 class="centrar-texto">La propiedad ya no está en venta</h1>
                </div>
              <?php
            }
          ?>
          
          <h1 class="centrar-texto"><?php echo $result['nombre'];?></h1>
          
          <div class="container">
          <div class="text-center"><img src="img/<?php echo $result['imagen'];?>" alt="Anuncio"></div>
          </div>

          <main class="contenedor seccion contenido-centrado">
              <div class="resumen-propiedad">
                  <p class="precio">$<?php echo number_format($result['precio']); ?></p>
                  <ul class="icono-caracteristicas">
                      <li>
                          <img src="img/icono_wc.svg" alt="WC">
                          <p><?php echo $result['banios']; ?></p>
                      </li>
                      <li>
                          <img src="img/icono_estacionamiento.svg" alt="Estacionamiento">
                          <p><?php echo $result['cocheras']; ?></p>
                      </li>
                      <li>
                          <img src="img/icono_dormitorio.svg" alt="Dormitorio">
                          <p><?php echo $result['recamaras']; ?></p>
                      </li>
                  </ul>
              </div>
              <p><?php echo $result['descripcion']; ?></p>
          </main>
        <?php
      }
    }
  } else {
    header('location: /');
  }
?>


<?php
  require_once('footer.php');
?>