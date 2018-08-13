<?php session_start();
require 'config.php';
require '../functions.php';

$conectar = conectar($db_config);
comprobarSession();


$posts = obtener_post($blog_config['post_por_pagina'], $conectar);


require '../view/admin.view.php';
?>