<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$_SESSION['email'] = $email;
include_once('../db_conn.php');

$query ="SELECT email,password FROM registro where email = '$email' and password = '$password'";

$resultado = mysqli_query($conn,$query);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    include("index.php");
    <?php

    ?>
    <h1>ERROR EN LA AUTENTICACION</h1>
    <?php
    
    
}

print"QUE SABOR";

mysqli_free_result($resultado);
mysqli_close($conn);

?>