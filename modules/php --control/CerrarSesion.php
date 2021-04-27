<?php
session_start();

session_destroy();
header("location: /data-learning/php-login/login.php");
exit;


?>