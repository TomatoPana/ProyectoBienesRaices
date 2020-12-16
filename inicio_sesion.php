<?php
require_once('sesion.php');

$stmt =  $conn->prepare("SELECT correo, contrasena, username FROM usuarios WHERE correo = ? AND contrasena = ?");

if(isset($_POST['Cusuario']) && isset($_POST['Contrasena'])){
  if($stmt->execute(array($_POST['Cusuario'], $_POST['Contrasena']))){
    $result = $stmt->fetchAll();
    $_SESSION['user'] = $result[0]['username'];
  }
}

header('location: /');