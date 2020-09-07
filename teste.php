<?php

session_start();
include 'database_users.php';
echo '<pre>';
print_r($_SESSION);
print_r($usuarios_app);
echo '</pre>';


?>