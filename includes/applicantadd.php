<?php include 'db.php'; ?>
<?php include 'course.php'; ?>
<?php


if(isset($_POST['submit'])) {


    $courseID = $_POST['hiddenid'];
    $coursename = $_POST['coursename'];
    $firstname = $_POST['input-first-name'];
    $userID = $_POST['userID'];

    

    $query = "INSERT INTO `applicants` ( `userID`, `courseID`, `FirstName`, `CourseName`) VALUES
 ('{$userID}', '{$courseID}', '{$firstname}', '{$coursename}')";
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