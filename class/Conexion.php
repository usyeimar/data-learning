 <?php
    class Conexion
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "data_learning";
        private $connect;

        public function __construct()
        {
            $conectionString = "mysql:host =".$this->host."dbname=".$this->db.";charset=utf8";
            try {
                $this->connect = new PDO($conectionString,$this->user,$this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo"Conexion Exitosa";
            } catch (Exception $e) {
                $this->connect = "Error de Conexion";
                echo "ERROR". $e->getMessage();

            }
        }
    }
   
$connect = new Conexion();
    ?>