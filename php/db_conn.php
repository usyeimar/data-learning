<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php

    //Parametros para la coneccion a la base de datos
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name  = "data_learning";

    //Conexion a la base de datos
    $conn =  mysqli_connect($hostname,$username,$password,$db_name);
   
    ?>
</body>
</html>