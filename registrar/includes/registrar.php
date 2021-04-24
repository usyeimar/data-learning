<?php

include_once("./includes/conn_db.php");


if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){

        $username = trim($_POST['name']);
        $email = trim( $_POST['email']);
        $password = trim($_POST['password']);
       // $register_date = date("d/m/y");
        ini_set('date.timezone','America/Bogota');
        echo $register_date = date(DATE_RFC2822);

        //$password = hash('sha512',$password);

        $consulta = "INSERT INTO registro(username, email , password ,register_date ) VALUES ('$username','$email','$password','$register_date')";
        
        $query = mysqli_query($conn,$consulta);
        if ($query) {
            ?>
            <script>
             alert('¡Ta has Inscrito Correctamente!🎃')
              window.location = "/Task-list/index.php";
            </script>
               
            <?php
           
             
            

            

        }
        else
        {
            ?>
                <h3  class="bad" >¡Ups! Ha ocurrido un error😭😭😱😱</h3>
            <?php
        }
        
        
    }
    else
    {
        ?>
            <h3  class="bad" >¡Por favor complete los campos!</h3>
        <?php
    }


}










?>