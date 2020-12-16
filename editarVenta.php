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

        <h1 class="centrar-texto">Editar venta</h1>


        <div style="display: none;" class="alert alert-danger" role="alert" id="message"></div>

        <div style="display: none;" class="alert alert-success" role="alert" id="messageOk"></div>

        <form id="datosVentaEditar" action="datosVentaEditar.php" method="POST" class="datosValidos contenedor contenedor-centrado seccion">
          
            <legend>Datos de la Propiedad</legend>
            
            <label for="nombre">Nombre de la Propiedad:</label>
            <input type="text" id="Npropiedad" name="Npropiedad" required value="<?php echo $result[0]['nombre'];?>">

            <label for="nombre">Descripcion de la Propiedad</label>
            <input type="text" id="Dpropiedad" name="Dpropiedad" required value="<?php echo $result[0]['descripcion'];?>">

            <label for="nombre">Valor de la Propiedad:</label>
            <input type="text" id="Vpropiedad" name="Vpropiedad" required value="<?php echo $result[0]['precio'];?>">

            <label for="nombre">Numero de Baños:</label>
            <input type="text" id="NBpropiedad" name="NBpropiedad" required value="<?php echo $result[0]['banios'];?>">

            <label for="nombre">Numero de cocheras:</label>
            <input type="text" id="NCpropiedad" name="NCpropiedad" required value="<?php echo $result[0]['cocheras'];?>">

            <label for="nombre">Numero de recamaras:</label>
            <input type="text" id="NRpropiedad" name="NRpropiedad" required value="<?php echo $result[0]['recamaras'];?>">
           
            <input type="hidden" id="id" name="id"  value="<?php echo $result[0]['id'];?>">

            <input type="submit" class="boton boton-verde" value="Enviar">
        </form>
      <?php
    }
  }
}
require_once('footer.php');
?>