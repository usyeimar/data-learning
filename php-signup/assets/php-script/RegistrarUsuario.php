<?php

include_once("dbConexion.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {

        $username = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        ini_set('date.timezone', 'America/Bogota');
        echo $register_date = date(DATE_RFC2822);
        $consulta = "INSERT INTO registro(username, email , password ,register_date ) VALUES ('$username','$email','$password','$register_date')";

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