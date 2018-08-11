<?php 

require 'admin/config.php';
require 'functions.php';


$conectar = conectar($db_config);

$id_articulo = id_articulo($_GET['id']);

$post = obtener_post_por_id($conectar, $id_articulo);
$post = $post[0];

require 'view/single.view.php';
?>