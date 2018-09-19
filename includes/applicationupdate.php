<?php include 'db.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'course.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
$courseID = $_POST['hiddenid'];
if(isset($_POST['update'])) { 
    $firstname = $_POST['input-first-name'];
	$middlename = $_POST['input-Middle-name'];
    $lastname= $_POST['last-name'];
	$gender= $_POST['gender'];
	$dob= $_POST['dob'];
	$email= $_POST['e-mail'];
	$mobileno= $_POST['mobile-no'];
	$address= $_POST['input-address1'];
	$city= $_POST['input-city'];
	$county= $_POST['county'];
    $eircode= $_POST['input-code'];
    $country= $_POST['country'];
    $highestQual= $_POST['highestQual'];
    $query = "UPDATE users SET firstName='{$firstname}',middleName='{$middlename}',lastName='{$lastname}',gender='{$gender}',email='{$email}',dob='{$dob}',phoneNumber={$mobileno},address='{$address}',city='{$city}',county='{$county}',eirCode='{$eircode}',country='{$country}', highestQual='{$highestQual}' where userID={$_SESSION['db_id']}";
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
	else
	{
		header("Location: ../application.php?id=$courseID");
	} 
}
?>