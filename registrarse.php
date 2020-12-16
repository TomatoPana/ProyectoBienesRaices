<?php
require_once('header.php');
?>

<h1 class="centrar-texto">Registrarse</h1>

<div style="display: none;" class="alert alert-danger" role="alert" id="message"></div>

<div style="display: none;" class="alert alert-success" role="alert" id="messageOk"></div>

<form id="registrarse" method="POST" class="datosValidos contenedor contenedor-centrado seccion">
    <legend>Datos del usuario</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" id="Nusuario" name="Nusuario" required>

    <label for="nombre">Apellido:</label>
    <input type="text" id="Ausuario" name="Ausuario" required>

    <label for="nombre">Correo:</label>
    <input type="text" id="Cusuario" name="Cusuario" required> 

    <label for="nombre">Telefono:</label>
    <input type="number" id="Tusuario" name="Tusuario" required>
    
    <label for="nombre">Contraseña:</label>
    <input type="password" id="Contrasena" name="Contrasena" required>

    <input type="submit" class="boton boton-verde" value="Enviar">
</form>

<?php
require_once('footer.php');
?>