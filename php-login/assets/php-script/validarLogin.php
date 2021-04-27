<?php
session_start();
    include('../php-db/dbConexion.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query ="SELECT email,password FROM registro where email = '$email' and password = '$password'";
    $validar_login = mysqli_query($conn,$query);

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['email'] = $email;
    header("location:  /data-learning/modules/dashboard.php");
    exit;
}else{
    echo'
    <script font-face="Century Gothic">
    alert("Usuariuo y/o Contraseña Incorrectos...[Por favor verifique los datos introducidos]");
    window.location = "/data-learning/php-login/login.php";
    </script>
    ';
    exit;
}
include("../php-db/dbCloseConexion.php");
?>

