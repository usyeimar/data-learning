<?php
session_start();

if( !isset($_SESSION['email'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesion")
    window.location = "index.php";
    </script>
    ';

    // header("location: ");
    session_destroy();
    
}
?>

<?php

include_once("./encabezado/header.php");

include_once("./encabezado/footer.php");


?>

