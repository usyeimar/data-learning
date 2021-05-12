<?php


if (isset($_POST['btnLogin'])) {
    if (
        strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['privilegio']) >= 1
    ) {

        //variables de el formulario
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $password = hash('sha512', $password);
        $privilegio = trim($_POST['privilegio']);

        //query a la base de datos
        $query = "SELECT usuario,password,privilegio FROM usuario  where usuario = '$usuario' AND password = '$password' AND privilegio = '$privilegio'";
        $validar_login = mysqli_query($conn, $query);

        switch ($privilegio) {
            case '1':
                $_SESSION["usuario"]= $usuario;
                header("location:../App/admin/admin_panel.php");		
                break;

            case '2':
                $_SESSION["usuario"]=$usuario;
                echo $usuario;
               // header("location:../App/profesor/profesor_panel.php");
                break;

            case '3':
                $_SESSION["usuario"]=$usuario;
                header("location:../App/alumno/alumno_panel.php");
                break;
        }
    }
}
