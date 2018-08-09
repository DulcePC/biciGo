<?php 
session_start();
if(isset($_SESSION['usuario'])){
    require ('view/FormPiezas.php');
}else{
    header('location: login.php');
}
require 'funciones.php';
$conexion = conexion('bicigo', 'root', '');

if (!$conexion) {
	die();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
   print_r($_FILES);
}

// require 'view/FormBicicleta.php';
?>