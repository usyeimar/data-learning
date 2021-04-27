<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Login</title>
</head>

<body>
    <form method="post">
        <div class="col-12 user-img">
              <img src="./assets/cover-signup/icon-signup.png" th:src="@{/img/user.png}" />
            </div>
        <h1>¡REGISTRARSE!</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Finalizar" name="register">

        <div class="flex-col-c p-t-170 p-b-40">
            <span class="OLVIDE">
                Ya tiene una cuenta?
            </span>
            <br>
            <br>

            <a href="../php-login/login.php" class="olvide1">
                Iniciar Sesón!
            </a>
        </div>

    </form>
    <?php
    include_once("./assets/php-script/RegistrarUsuario.php");
    ?>

</body>

</html>