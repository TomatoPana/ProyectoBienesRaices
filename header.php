<?php
  require_once('sesion.php');
?>
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
</head>

<body>

  <header class="site-header <?php echo ($_SERVER['SCRIPT_NAME'] === '/index.php') ? ' inicio' : ''; ?>">

    <div class="contenedor contenido-header">
      <div class="barra">
        <a href="/">
          <img src="img/logo.svg" alt="Logotipo de BienesRaices">
        </a>
        <nav class="navegacion">
          <a targer="_blank" href="nosotros.php">Nosotros</a>
          <a href="anuncios.php">Anuncios</a>
          <a href="blog.php">Blog</a>
          
          <?php 
            if(isset($_SESSION['user'])){
              ?>
                <a href="subir.php">Vender</a>
                <a href="mi_cuenta.php">Mi Cuenta</a>
                <a href="cerrar_sesion.php">Cerrar sesion</a>
              <?php
            } else {
              ?>
                <?php echo ($_SERVER['SCRIPT_NAME'] === '/login.php') ? '' : '<a href="login.php">Iniciar sesion</a>'; ?>
              <?php
            }
          ?>
          

        </nav>
      </div>
      <?php echo ($_SERVER['SCRIPT_NAME'] === '/index.php') ? '<h1>Venta de casas y Departamentos Exclusivos de Lujo</h1>' : ''; ?>
    </div>
    <!--Contenedor-->
  </header>