<?php
echo '
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    jQuery(function(){   
        swal({
            icon:"error ",
            title: "Oops...",
            text: "Usuario y o contraseña incorrectos",
            type: "warning",
            //timer: 3000
         }, 
         function(){
              window.location.href = "./";
         })
        });
    </script>
    ';
?>