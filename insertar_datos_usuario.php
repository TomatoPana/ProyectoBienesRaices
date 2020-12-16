<?php
require_once('sesion.php');
header('Content-Type: application/json');

$stmt =  $conn->prepare("INSERT INTO usuarios (correo, contrasena, username) VALUES (?,?,?)");

$Nombre=$_POST['Nusuario'];
$Apellido=$_POST['Ausuario'];
$Correo=$_POST['Cusuario'];
$Telefono=$_POST['Tusuario'];
$Contrasena=$_POST['Contrasena'];

if(isset($_POST['Cusuario']) && isset($_POST['Contrasena']) && isset($_POST['Nusuario'])){
  if($stmt->execute(array($_POST['Cusuario'], $_POST['Contrasena'], $_POST['Nusuario']))){
      echo json_encode(array('status' => 'ok', 'message' => 'Usuario registrado', 'debug' => $_POST));
  } else {
    echo json_encode(array('status' => 'error', 'message' => 'Error interno', 'debug' => $_POST));
  }  
} else {
  echo json_encode(array('status' => 'error', 'message' => 'Error interno', 'debug' => $_POST));
}


