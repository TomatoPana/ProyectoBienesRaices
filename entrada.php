<?php
  require_once('header.php');
  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $stmt = $conn->prepare("SELECT * FROM blog WHERE id = ?");
    if($stmt->execute(array($_GET['id']))){
      $result = $stmt->fetchAll();
      if(empty($result)){
        header('location: /');
      } else {
        $result = $result[0];
        ?>
          
          <h1 class="centrar-texto"><?php echo $result['nombre'];?></h1>
          <p class="centrar-texto"><?php echo $result['descripcion'];?></p>
          
          <div class="container">
          <div class="text-center"><img src="img/<?php echo $result['imagen'];?>" alt="Anuncio"></div>
          </div>

          <main class="contenedor seccion contenido-centrado texto-entrada">
              
              <p><?php echo $result['contenido']; ?></p>
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