<?php
require_once('header.php');
?>

<h1 class="centrar-texto">Iniciar Sesion</h1>

<div style="display: none;" class="alert alert-danger" role="alert" id="message"></div>

<div id="hide"></div>

<form action="inicio_sesion.php" id="loginForm" method="POST" class="datosValidos contenedor contenedor-centrado seccion">

    <label for="nombre">Correo:</label>
    <input type="email" id="Cusuario" name="Cusuario" required>

    <label for="nombre">Contraseña:</label>
    <input type="password" id="Contrasena" name="Contrasena" required>

    <input type="submit" class="boton boton-verde" value="Enviar" name="submit">
</form>

<div class="contenedor contenedor-centrado seccion centrar-texto">
  <p>¿Aun no estas registrado?</p>
  <br>
  <a href="registrarse.php">
      <p>Has click aqui</p>
  </a>
</div>

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

<?php
require_once('footer.php');
?>