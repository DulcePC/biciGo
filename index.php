<?php 
require 'admin/config.php';
require 'functions.php';

$conectar = conectar($db_config);

$posts = obtener_post($blog_config['post_por_pagina'],$conectar);



require 'view/index.php';
?>