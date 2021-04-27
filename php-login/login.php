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

  <body>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">

          <form action="./assets/php-script/validarLogin.php" method="POST">
            <div class="col-12 user-img">
              <img src="./assets/cover-login/icon-login.png" th:src="@{/img/user.png}" />
            </div>
            <h1 class="text-light">¡INICIAR SESION!</h1>
            <div class="form-group">
              <input type="email"  class="form-control form-control-lg" name="email" placeholder="name@example.com" >
            </div>

            <input type="password" name="password" class="form-control form-control-lg" placeholder=" Password">
            <input type="submit" value="INGRESAR" name="btnLogin">
            <div class="form-group mx-sm-4 text-right">
              <span class=""><a href="#" class="olvide">No tienes una cuenta?</a></span>
            </div>
            <br>
            <div class="form-group text-center">
              <span><a href="../php-signup/signup.php" class="olvide1">REGISTRARSE</a></span>
            </div>

          </form>

        </div>
      </div>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>





</html>