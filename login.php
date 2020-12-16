<?php
require_once('header.php');
?>

<h1 class="centrar-texto">Iniciar Sesion</h1>

<form action="php/inicio_sesion.php" method="POST" class="datosValidos contenedor contenedor-centrado seccion">

    <label for="nombre">Correo:</label>
    <input type="text" id="Cusuario" name="Cusuario" required>

    <label for="nombre">Contraseña:</label>
    <input type="password" id="Contrasena" name="Contrasena" required>

    <input type="submit" class="boton boton-verde" value="Enviar" name="submit">
</form>

<div class="contenedor contenedor-centrado seccion centrar-texto">
  <p>¿Aun no estas registrado?</p>
  <br>
  <a href="registrarse.html">
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