<?php


if(isset($_GET['id']) and isset($_GET['courseId'])) {

    $userID = $_GET['id'];
	$courseID = $_GET['courseId'];

    //$query = "SELECT b.CourseName, b.Date, b.Time,a.* FROM users a inner join interviews b on a.userID = b.userID WHERE a.userID = {$userID}"; // Get user details
	$query = "SELECT * from users WHERE userID = {$userID}";
	$querycoursename = "SELECT CourseName,courseID from applicants WHERE userID = {$userID} and courseID = {$courseID}";
    $select_user_query = mysqli_query($connection ,$query);
	$select_user_query_coursename = mysqli_query($connection ,$querycoursename);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)) {
        $db_firstName = $row['firstName']; // Display Result
		$db_middleName = $row['middleName']; // Display Result
        $db_lastName = $row['lastName']; // Display Result
        $db_email = $row['email']; // Display Result
        $db_dob = $row['dob']; // Display Result
		$db_gender = $row['gender']; // Display Result
        $db_phoneNumber = $row['phoneNumber']; // Display Result
        $db_address = $row['address']; // Display Result
        $db_city = $row['city']; // Display Result
        $db_county = $row['county']; // Display Result
        $db_eirCode = $row['eirCode']; // Display Result
        $db_country = $row['country']; // Display Result
        $db_userRole= $row['userRole']; // Display Result
		$db_highestQual= $row['highestQual']; // Display Result
		$db_workExp= $row['workExp']; // Display Result
		
    }  
	while($row = mysqli_fetch_array($select_user_query_coursename)){
		$db_CourseName = $row['CourseName']; // Display Result
		$db_CourseID = $row['courseID']; // Display Result
	}
}
if(isset($_POST['save'])) {
	include 'db.php';
	$userid =$_POST['userid'];
    $courseid = $_POST['courseid'];
    $coursename= $_POST['coursename'];
    $firstName= $_POST['firstname'];
	$date= $_POST['date'];
	$time= $_POST['time'];
   $insert_query = "INSERT INTO `interviews`(`userID`, `courseID`, `date`, `Name`, `CourseName`, `Time`) VALUES
 ({$userid},{$courseid},'{$date}','{$firstName}','{$coursename}','{$time}' ) ON DUPLICATE KEY UPDATE date='{$date}', Time='{$time}'";
    $select_insert_query = mysqli_query($connection ,$insert_query);
    if(!$select_insert_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
	else
	{
		header("Location: ../admin/interviewlist.php");
	}
}