
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
  
  <form action="./assets/php-script/validarLogin.php" method="POST">
    <h1 class="text-light">¡INICIAR SESION!</h1>

    <input type="email" name="email" placeholder="Ingrese su Email">
    <input type="password" name="password" placeholder=" Ingrese su Contraseña">
    <input type="submit" value="INGRESAR" name="login">


    <div class="form-group mx-sm-4 text-right">
      <span class=""><a href="#" class="olvide">No tienes una cuenta?</a></span>
    </div>
    <br>
    <div class="form-group text-center">
      <span><a href="../php-signup/signup.php" class="olvide1">REGISTRARSE</a></span>
    </div>

  </form>


</body>

</html>