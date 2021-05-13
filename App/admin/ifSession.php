<?php
session_start();
$usuario = $_SESSION['usuario'];
if (isset($usuario)) {
    $usuario = $_SESSION['usuario'];
    header("location:./AdminPanel.php");
    
}else{
    header("location:../../index.php");
}
?>

