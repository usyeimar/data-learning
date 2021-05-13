<?php

require_once("../class/RegistrarUsuario.php");
if (isset($_POST['btnregistrar'])) {
     $name = trim($_POST['name']);
     $apellido = trim($_POST['apellido']);
     $usuario = trim($_POST['usuario']);
     $email = trim($_POST['email']);
     $privilegio = trim($_POST['privilegio']);
     $password = trim($_POST['password']);
     

    $RegistrarUsario = new RegistrarUsuario ($name,$apellido,$usuario,$email,$privilegio,$password);
    $RegistrarUsario->InsertarUsuario();
    
}
