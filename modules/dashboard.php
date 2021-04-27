<?php

session_start();
$email = $_SESSION['email'];
include("../encabezado/header.php");

if(!isset($email)){
    header("location :/php-login/login.php");
}else{

echo "<h1>BIENVENIDO $email</h1>";
echo "<a href='./php --control/CerrarSesion.php'> SALIR</a>";
};

?>

<?php

include("../encabezado/footer.php");

?>