<?php
//Parametros para la coneccion a la base de datos
$hostname = "localhost";
 $username = "root";
$password = "";
 $db_name  = "data_learning";


//Conexion a la base de datos
$conn =  mysqli_connect($hostname,$username,$password,$db_name);

if($conn){
    ?>
    <!--<h3 class="ok">
        Conexion exitosa!!🥳🥳🥳
    </h3> -->
    <?php
}
else
{
    echo"Fallo";
}

?>


