<?php
session_start();
if(isset($_SESSION['usuario'])){
    require ('view/usuario.php');
}else{
    header('location: login.php');
}

?>