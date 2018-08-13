<?php
require 'funciones.php';
require 'admin/config.php';
require 'functions.php';

$conexion = conexion('bicigo', 'root', '');
// if (!$conexion) {
// 	die();
// }

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
	header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM pieza WHERE id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

// if (!$foto) {
// 	header('Location: index.php');
// }


require ('view/foto_piezas.php')
?>