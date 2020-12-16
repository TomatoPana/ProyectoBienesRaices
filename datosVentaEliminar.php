<?php
require_once('sesion.php');
header('Content-Type: application/json');

$idVenta = $_POST['id'];

$stmt =  $conn->prepare("DELETE from venta WHERE id = ?");


if($stmt->execute(array($idVenta))){
    echo json_encode(array('status' => 'ok', 'message' => 'Propiedad en venta eliminada!', 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} else {
  echo json_encode(array('status' => 'error', 'message' => $stmt->errorInfo(), 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} 