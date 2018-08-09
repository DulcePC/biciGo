<?php 
session_start();
if(isset($_SESSION['usuario'])){
    require ('view/FormBicicleta.php');
}else{
    header('location: login.php');
}
require 'funciones.php';
$conexion = conexion('bicigo', 'root', '');

if (!$conexion) {
	die();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        
        $statement = $conexion->prepare('
			INSERT INTO bicicleta (titulo, marca, precio, estado, telefono , provincia, descripcion,imagen)
			 VALUES (:titulo, :marca, :precio,:estado, :telefono , :provincia, :descripcion, :imagen)
		');


        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':marca' =>  $_POST['marca'],
            ':precio' => $_POST['precio'],
            ':estado' => $_POST['estado'],
            ':telefono' => $_POST['telefono'],
            ':provincia' => $_POST['provincia'],
            ':descripcion' => $_POST['descripcion'],
            ':imagen' => $_FILES['foto']['name']
        ));
            header('location: index.php');
    }else{
        $error = "El archivo no es una imagen o es muy pesado";
    }
}

//require 'view/FormBicicleta.php';
?>