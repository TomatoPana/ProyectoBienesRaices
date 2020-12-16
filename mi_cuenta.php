<?php
require_once('header.php');
$ventasStmt = $conn->prepare("SELECT id, nombre, descripcion, imagen, banios, cocheras, recamaras, precio FROM venta WHERE id_usuario = ? AND en_venta = 1 ORDER BY id ASC");
$blogStmt = $conn->prepare("SELECT * FROM blog WHERE id_usuario = ? ORDER BY id ASC");
$comprasStmt = $conn->prepare("SELECT venta.id, venta.nombre, venta.descripcion, venta.imagen, venta.banios, venta.cocheras, venta.recamaras, venta.precio, compra.id_usuario FROM venta INNER JOIN compra ON compra.id_venta = venta.id WHERE compra.id_usuario = ? ORDER BY id ASC");
?>

<h1 class="centrar-texto">Bienvenido <?php echo $_SESSION['user']; ?></h1>

<p>&nbsp;</p>

<h2 class="centrar-texto">Mis ventas</h2>
<div class="seccion contenedor">

  <div class="contenedor-anuncio">
    <?php
      if($ventasStmt->execute(array($_SESSION['id']))){
        $result = $ventasStmt->fetchAll();
        if(!empty($result)){
          foreach ($result as $key => $row) {
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
                  <a href="editarVenta.php?id=<?php echo $row['id']; ?>" class="boton boton-azul d-block">Editar Propiedad</a>
                  <a href="eliminarVenta.php?id=<?php echo $row['id']; ?>" class="boton boton-rojo d-block">Eliminar Propiedad</a>
                </div>
              </div>
            <?php
          }
        } else {
          echo '<h3 class="centrar-texto">Aún no tienes ventas publicadas</h3>';
        }
      }
    ?>
  </div>

</div>

<p>&nbsp;</p>

<h2 class="centrar-texto">Mis entradas de blog</h2>

<div class="contenedor seccion contenido-centrado">
  <?php
    if($blogStmt->execute(array($_SESSION['id']))){
      $result = $blogStmt->fetchAll();
      if(!empty($result)){
        foreach ($result as $key => $row) {
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
        } else {
          echo '<h3 class="centrar-texto">Aún no tienes entradas en blog publicadas</h3>';
        }
      }
    ?>
</div>


<p>&nbsp;</p>

<h2 class="centrar-texto">Mis compras</h2>

<div class="seccion contenedor">

  <div class="contenedor-anuncio">
    <?php
      if($comprasStmt->execute(array($_SESSION['id']))){
        $result = $comprasStmt->fetchAll();
        if(!empty($result)){
          foreach ($result as $key => $row) {
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
          echo '<h3 class="centrar-texto">Aún no tienes compras hechas</h3>';
        }
      }
    ?>
  </div>

</div>

<?php
require_once('footer.php');
?>