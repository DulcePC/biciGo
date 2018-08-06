<?php   
session_start();

if(isset($_SESSION['usuario'])){
    header ('location: index.php');
}  

require 'view/index.php';
?>