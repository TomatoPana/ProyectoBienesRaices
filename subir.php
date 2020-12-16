<?php
require_once('header.php');
?>

<h1 class="centrar-texto">Subir datos de casa a vender</h1>

<div style="display: none;" class="alert alert-danger" role="alert" id="message"></div>

<div style="display: none;" class="alert alert-success" role="alert" id="messageOk"></div>

<form id="datosVenta" action="datosVenta.php" method="POST" class="datosValidos contenedor contenedor-centrado seccion">
  
    <legend>Datos de la Propiedad</legend>
    
    <label for="nombre">Nombre de la Propiedad:</label>
    <input type="text" id="Npropiedad" name="Npropiedad" required>

    <label for="nombre">Descripcion de la Propiedad</label>
    <input type="text" id="Dpropiedad" name="Dpropiedad" required>

    <label for="nombre">Valor de la Propiedad:</label>
    <input type="text" id="Vpropiedad" name="Vpropiedad" required>

    <label for="nombre">Numero de Baños:</label>
    <input type="text" id="NBpropiedad" name="NBpropiedad" required>

    <label for="nombre">Numero de cocheras:</label>
    <input type="text" id="NCpropiedad" name="NCpropiedad" required>

    <label for="nombre">Numero de recamaras:</label>
    <input type="text" id="NRpropiedad" name="NRpropiedad" required>

    <label for="nombre">Agregar imagen:</label>
    <input type="file" id="Ipropiedad" name="Ipropiedad" required>
    
    <input type="submit" class="boton boton-verde" value="Enviar">
</form>

<?php
require_once('footer.php');
?>