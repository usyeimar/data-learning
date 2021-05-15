<?php
require_once('./class/ValidarUsuario.php');
require_once('./Views/login.php');


if (isset($_POST['btnLogin'])) {
    if (
        strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1
    ) {

        $ValidarUsuario = new ValidarUsuario($_POST['usuario'], $_POST['password']);
        $filas = mysqli_num_rows($ValidarUsuario->VerificarUsuario());
        if ($filas == 1) {
            session_start();
            $_SESSION['admin'] = "$usuario";
            // session_start();
            // $_SESSION['usuario'] = $_POST['usuario'];
            // $_SESSION['privilegio'] = $_POST['privilegio'];
            header('location:./App/admin/AdminPanel.php');
           exit(); 

        } else
        if ($filas == 2) {
            session_start();
            $_SESSION['profesor'] = "$usuario";
            // session_start();
            // $_SESSION['usuario'] = $_POST['usuario'];
            // $_SESSION['privilegio'] = $_POST['privilegio'];
            header('location:./App/profesor/ProfesorPanel.php');
            exit(); 
        } else
        if ($filas == 3) {
            session_start();
            $_SESSION['alumno'] = "$usuario";
            // session_start();
            // $_SESSION['usuario'] = $_POST['usuario'];
            // $_SESSION['privilegio'] = $_POST['privilegio'];
            header('location:./App/alumno/AlumnoPanel.php');
            exit(); 
        } else {
            /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
            $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
            echo $mensajeaccesoincorrecto;
        }
    }
}
