<?php

session_start();
unset($_SESSION['user']);

unset($_SESSION['accessToken']);

unset($_SESSION['code']);

session_destroy();


echo "Logout successfully<a href='index.php'>Login</a>"; 

?>
