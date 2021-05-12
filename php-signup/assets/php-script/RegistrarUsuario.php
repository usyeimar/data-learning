<?php

require_once("dbConexion.php");

if (isset($_POST['btnregistrar'])) {
    if (
        strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1
        && strlen($_POST['privilegio']) >= 1 && strlen($_POST['password']) >= 1
    ) {
        //Variables que almecnan la informacion de el registro
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['email']);
        $privilegio = trim($_POST['privilegio']);
        $password = trim($_POST['password']);
        $password = hash('sha512', $password);
        ini_set('date.timezone', 'America/Bogota');
        $fecha_registro = date(DATE_RFC2822);
        //Consulta a base de datos


        $consulta = "INSERT INTO usuario(nombre, apellido , usuario ,email, password ,fecha_registro,id_privilegio) VALUES ('$name','$apellido','$usuario','$email','$password','$fecha_registro','$privilegio')";
        $query = mysqli_query($conn, $consulta);

        if ($query) {
            echo '
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
           <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
           <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
            jQuery(function(){   
                swal({
                      title: "¡Bien!",
                      text: "Te has registrado con exito",
                      type: "success",
                      //timer: 3000
                 }, 
                 function(){
                      window.location.href = "../../data-learning/php-login/login.php";
                 })
                });
            </script>
            ';
        }
        mysqli_close($conn);
    }
}
