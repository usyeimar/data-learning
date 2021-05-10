<?php

include_once("dbConexion.php");


if (isset($_POST['btnregistrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['rol']) >= 1 && strlen($_POST['password']) >= 1) {
        //Variables que almecnan la informacion de el registro
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['email']);
        $rol = trim($_POST['rol']);
        $password = trim($_POST['password']);
        $password =
        ini_set('date.timezone', 'America/Bogota');
        $fecha_registro = date(DATE_RFC2822);

        /*$consulta = "INSERT INTO registro(nombre,apellido,usuario,email,rol, password ,fecha_registro )  VALUES ('$name','$apellido','$usuario','$email','$rol','$password',$fecha_registro)";*/
        $consulta = "INSERT INTO registro(nombre, apellido , usuario ,email,rol, password ,fecha_registro ) VALUES ('$name','$apellido','$usuario','$email','$rol','$password','$fecha_registro')";
        $query = mysqli_query($conn, $consulta);
        if ($query) {
?>
            <script>
                alert('¡Ta has Inscrito Correctamente!🎃')
                window.location = "/data-learning/php-login/login.php";
            </script>

        <?php

        } else {
        ?>
            
            <h3 class="bad">¡Ups! Ha ocurrido un error😭😭😱😱</h3>
            
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor complete los campos!</h3>
<?php
    }
}


?>