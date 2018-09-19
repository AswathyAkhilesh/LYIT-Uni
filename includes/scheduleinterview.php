<?php include 'db.php'; ?>
<?php include 'course.php'; ?>
<?php include 'profile.php'; ?>
<?php


if(isset($_POST['submit'])) {


    $userID = $_POST['hiddenid'];
    $coursename = $_POST['coursename'];
    $firstName = $_POST['input-first-name'];
    $coursecode = $_POST['coursecode'];

    

    $query = "INSERT INTO `interviews` ( `userID`, `courseID`, `Name`, `CourseName`) VALUES
 ('{$userID}', '{$coursecode}', '{$firstName}', '{$coursename}')";
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
	else
	{
		header("Location: ../admin/applicant.php?id=$userID");
	}
}
?>