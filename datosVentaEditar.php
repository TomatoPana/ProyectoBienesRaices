<?php
require_once('sesion.php');
header('Content-Type: application/json');

$Npropiedad = $_POST['Npropiedad'];
$Dpropiedad = $_POST['Dpropiedad'];
$Vpropiedad = $_POST['Vpropiedad'];
$NBpropiedad = $_POST['NBpropiedad'];
$NCpropiedad = $_POST['NCpropiedad'];
$NRpropiedad = $_POST['NRpropiedad'];
$idVenta = $_POST['id'];

$stmt =  $conn->prepare("UPDATE venta SET nombre=?, descripcion=?, banios=?, cocheras=?, recamaras=?, precio=? WHERE id = ?");


if($stmt->execute(array($Npropiedad, $Dpropiedad, $NBpropiedad, $NCpropiedad, $NRpropiedad, $Vpropiedad, $idVenta))){
    echo json_encode(array('status' => 'ok', 'message' => 'Propiedad en venta actualizada!', 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} else {
  echo json_encode(array('status' => 'error', 'message' => $stmt->errorInfo(), 'debug' => array('post' => $_POST, 'files' => $_FILES)));
} 