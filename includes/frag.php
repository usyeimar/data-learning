<?php



if($conn){
    ?>

     <h3 class="ok">
        Conexion exitosa!!🥳🥳🥳
    </h3> 
    <?php
    
    include_once('./php/includes/panel.php');
}
else
{
    ?>
    <h3 class="bad"> Conexion Fallida!!</h3>
    <?php
}


?>