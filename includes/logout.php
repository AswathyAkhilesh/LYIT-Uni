<?php session_start(); ?>

<?php 

$_SESSION['db_id'] = null;
$_SESSION['db_username'] = null;
$_SESSION['db_firstName'] = null;
$_SESSION['db_lastName'] = null;
$_SESSION['db_userRole'] = null;

header("Location: ../index.php");

?>