<?php
require_once('./class/ValidarUsuario.php');
require_once('./Views/login.php');


if (isset($_POST['btnLogin'])) {
    if (
        strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['privilegio']) >= 1
    ) {

        $ValidarUsuario = new ValidarUsuario($_POST['usuario'], $_POST['password'],$_POST['privilegio']);
        $filas = mysqli_num_rows($ValidarUsuario->VerificarUsuario()) ;
        if ($filas) {
            session_start();
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['privilegio'] = $_POST['privilegio'];
            header('location:./App/admin/AdminPanel.php');
            echo $filas;
            
        } else {
        }
        
        
    }
    
}
?>
<?php

?>