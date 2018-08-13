<?php
require 'admin/config.php';
require 'functions.php';

$conectar = conectar($db_config);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement = $conectar->prepare(
		'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
	);
	$statement->execute(array(':busqueda' => "%$busqueda%"));
	$creta = $statement->fetchAll();

	if (empty($creta)) {
		$titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
	} else {
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
    }
}
// } else {
// 	header('Location: ' . RUTA . '/index.php');
// }

require 'view/buscar.view.php';
?>