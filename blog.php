<?php
  require_once('header.php');
  $stmt = $conn->prepare("SELECT * FROM blog ORDER BY id ASC");
?>
<main class="contenedor seccion contenido-centrado">
  <h1 class="centrar-texto">Nuestro blog</h1>

  <?php 
    if($stmt->execute()){
      while ($row = $stmt->fetch()){
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

</main>
<?php
  require_once('footer.php');
?>