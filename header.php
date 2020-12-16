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
  <link rel="stylesheet" href="CSS/bootstrap/js/bootstrap.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
          <a href="blog_actualizado.html">Blog</a>
          
          <?php 
            if(isset($_SESSION['user'])){
              ?>
                <a href="subir.html">Vender</a>
                <a href="mi_cuenta.html">Mi Cuenta</a>
              <?php
            } else {
              ?>
                <a href="inicio_sesion.html">Iniciar sesion</a>
              <?php
            }
          ?>
          

        </nav>
      </div>
      <?php echo ($_SERVER['SCRIPT_NAME'] === '/index.php') ? '<h1>Venta de casas y Departamentos Exclusivos de Lujo</h1>' : ''; ?>
    </div>
    <!--Contenedor-->
  </header>