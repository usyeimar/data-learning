<?php
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['admin'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../../index.php"); 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['admin']; ?></h1>
<a href="./scripts/CerrarSesion.php">Cerrar</a>

   
</body>
</html>
