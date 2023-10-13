<?php 
session_start();
session_destroy();
setcookie('login', null, -1, '/');
setcookie('password', null, -1, '/');

header('Location: ../index.php');
exit;


?>