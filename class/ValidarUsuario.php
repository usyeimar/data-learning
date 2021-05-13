<?php
require_once('ConexionDB.php');

class ValidarUsuario 
{
    private $user;
    private $pass;
    protected $idprivilegio;
    public function __construct($user,$pass,$idprivilegio) {
        $this->user = $user;
        $this->pass = $pass;
        $this->idprivilegio = $idprivilegio;
    }
    public function VerificarUsuario()
    {
        $user = $this->user;
        $pass = $this->pass;
        $idprivilegio = $this->idprivilegio;
        $query ="SELECT * FROM usuario WHERE usuario = '$user' AND password = '$pass' AND id_privilegio ='$idprivilegio'";

        $conexion = new ConexionDB();
        $process = mysqli_query($conexion->EstalecerConexion(),$query);
        return $process;
    }
    
}

?>