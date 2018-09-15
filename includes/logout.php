<?php session_start(); ?>

<?php 

$_SESSION['db_id'] = null;
$_SESSION['db_username'] = null;
$_SESSION['db_firstName'] = null;
$_SESSION['db_lastName'] = null;
$_SESSION['db_userRole'] = null;
$_SESSION['db_email'] = null;
$_SESSION['db_dob'] = null;
$_SESSION['db_phoneNumber'] = null;
$_SESSION['db_address'] = null;
$_SESSION['db_city'] = null;
$_SESSION['db_county'] = null;
$_SESSION['db_eirCode'] = null;
$_SESSION['db_country'] = null;
$_SESSION['db_userRole'] = null;

header("Location: ../index.php");

?>