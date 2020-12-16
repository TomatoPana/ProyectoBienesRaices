<?php
require_once('sesion.php');
header('Content-Type: application/json');

$Npropiedad = $_POST['Npropiedad'];
$Dpropiedad = $_POST['Dpropiedad'];
$Vpropiedad = $_POST['Vpropiedad'];
$NBpropiedad = $_POST['NBpropiedad'];
$NCpropiedad = $_POST['NCpropiedad'];
$NRpropiedad = $_POST['NRpropiedad'];
$Ipropiedad = $_FILES['Ipropiedad'];

 try {
   
  // Undefined | Multiple Files | $_FILES Corruption Attack
  // If this request falls under any of them, treat it invalid.
  if (
      !isset($_FILES['Ipropiedad']['error']) ||
      is_array($_FILES['Ipropiedad']['error'])
  ) {
      throw new RuntimeException('Invalid parameters.');
  }

  // Check $_FILES['Ipropiedad']['error'] value.
  switch ($_FILES['Ipropiedad']['error']) {
      case UPLOAD_ERR_OK:
          break;
      case UPLOAD_ERR_NO_FILE:
          throw new RuntimeException('No file sent.');
      case UPLOAD_ERR_INI_SIZE:
      case UPLOAD_ERR_FORM_SIZE:
          throw new RuntimeException('Exceeded filesize limit.');
      default:
          throw new RuntimeException('Unknown errors.');
  }

  // You should also check filesize here.
  if ($_FILES['Ipropiedad']['size'] > 1000000) {
      throw new RuntimeException('Exceeded filesize limit.');
  }

  // DO NOT TRUST $_FILES['Ipropiedad']['mime'] VALUE !!
  // Check MIME Type by yourself.
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  if (false === $ext = array_search(
      $finfo->file($_FILES['Ipropiedad']['tmp_name']),
      array(
          'jpg' => 'image/jpeg',
          'png' => 'image/png',
          'gif' => 'image/gif',
      ),
      true
  )) {
      throw new RuntimeException('Invalid file format.');
  }

  // You should name it uniquely.
  // DO NOT USE $_FILES['Ipropiedad']['name'] WITHOUT ANY VALIDATION !!
  // On this example, obtain safe unique name from its binary data.
  $filename = sprintf('%s.%s', sha1_file($_FILES['Ipropiedad']['tmp_name']), $ext);
  $path = "./img/".$filename;
  if (!move_uploaded_file(
      $_FILES['Ipropiedad']['tmp_name'],
      $path
  )) {
      throw new RuntimeException('Failed to move uploaded file.');
  }

} catch (RuntimeException $e) {

  echo json_encode(array('status' => 'error', 'message' => $e->getMessage(), 'debug' => array('post' => $_POST, 'files' => $_FILES)));

}

$stmt =  $conn->prepare("INSERT INTO venta (nombre, descripcion, imagen, banios, cocheras, recamaras, precio, fecha_publicacion, en_venta, id_usuario) VALUES (?,?,?,?,?,?,?,?,?,?)");


if($stmt->execute(array($Npropiedad, $Dpropiedad, $filename, $NBpropiedad, $NCpropiedad, $NRpropiedad, $Vpropiedad, date("Y-m-d"), '1', $_SESSION['id']))){
    echo json_encode(array('status' => 'ok', 'message' => 'Propiedad en venta publicada!', 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} else {
  echo json_encode(array('status' => 'error', 'message' => $stmt->errorInfo(), 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} 