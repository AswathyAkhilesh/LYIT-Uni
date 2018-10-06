<?php session_start();
unset($_SESSION['db_id']);
unset($_SESSION['db_username']);
unset($_SESSION['db_firstName']);
unset($_SESSION['db_lastName']);
unset($_SESSION['db_userRole']);
unset($_SESSION['db_email']);
unset($_SESSION['db_dob']);
unset($_SESSION['db_phoneNumber']);
unset($_SESSION['db_address']);
unset($_SESSION['db_city']);
unset($_SESSION['db_county']);
unset($_SESSION['db_eirCode']);
unset($_SESSION['db_country']);
unset($_SESSION['db_userRole']);
header("Location: ../index.php");
?>
