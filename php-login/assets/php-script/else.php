else {
            echo '
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
           <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
           <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
            jQuery(function(){   
                swal({
                    title: "¡Error!",
                    text: "Por favor, verifica los datos e intenta de nuevo",
                    type: "warning",
                    //timer: 3000
                 }, 
                 function(){
                      window.location.href = "login.php";
                 })
                });
            </script>
            ';
        }

        <?php
session_start();
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    //header("location:../../php-login/login.php");
    echo '
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    jQuery(function(){   
        swal({
            icon:"error ",
            title: "Oops...",
            text: "Parece que no te has logueado",
            type: "error",
            //timer: 3000
         }, 
         function(){
              window.location.href = "../../php-login/login.php";
         })
        });
    </script>
    ';
} else {