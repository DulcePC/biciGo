<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conectar = conectar($bd_config);


$id = limpiarDatos($_GET['id']);


$statement = $conectar->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/admin');

?>