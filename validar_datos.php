<?php
require_once('sesion.php');
header('Content-Type: application/json');

$stmt =  $conn->prepare("SELECT correo, contrasena FROM usuarios WHERE correo = ? AND contrasena = ?");

if(isset($_POST['Cusuario']) && isset($_POST['Contrasena'])){
  if($stmt->execute(array($_POST['Cusuario'], $_POST['Contrasena']))){
    $result = $stmt->fetchAll();
    if(empty($result)){
      echo json_encode(array('status' => 'error', 'message' => 'Correo/Contraseña Incorrectos', 'debug' => $_POST));
    } else {
      echo json_encode(array('status' => 'ok', 'message' => 'continue', 'debug' => $_POST));
    }
  } else {
    echo json_encode(array('status' => 'error', 'message' => 'Error interno', 'debug' => $_POST));
  }  
} else {
  echo json_encode(array('status' => 'error', 'message' => 'Error interno', 'debug' => $_POST));
}


