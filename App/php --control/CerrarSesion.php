<?php
session_start();

session_destroy();
header("location: /data-learning/index.php");
exit;


?>