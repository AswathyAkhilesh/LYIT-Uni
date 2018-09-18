<?php include 'db.php'; ?>
<?php
if(isset($_POST['submit'])) {

    $userID = $_POST['userID'];
    $courseID = $_POST['courseID'];
    $FirstName = $_POST['FirstName'];
    $CourseName = $_POST['CourseName'];
    

    $query = "INSERT INTO `applicants` ( `userID`, `courseID`, `FirstName`, `CourseName`) VALUES
 ('{$userID}', '{$courseID}', '{$FirstName}', '{$CourseName}')";
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
	else
	{
		header("Location: ../application.php");
	}
}
?>