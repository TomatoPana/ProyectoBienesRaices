<?php
require_once('sesion.php');
session_unset();

session_destroy();

header('location: /');