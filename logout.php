<?php 
session_start();
unset($_SESSION['db_email']);
unset($_SESSION['db_first_name']);
unset($_SESSION['db_last_name']);

session_destroy();
header('Location: index.php');
?>