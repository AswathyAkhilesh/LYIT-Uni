<?php
if (!isset($_POST['update']) && isset($_GET['id'])) {
	    $id = $_GET['id'];
        $query = "SELECT * FROM courses WHERE id = '{$id}' ";// Get course details from course table
		$select_course_query = mysqli_query($connection ,$query);
    if(!$select_course_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_course_query)) {
        $db_coursecode = $row['coursecode']; // Display Result
		$db_coursename = $row['coursename']; // Display Result
		$db_bannerdescription = $row['bannerdescription']; // Display Result
		$db_coursedetails = $row['coursedetails']; // Display Result
		$db_entryrequirements = $row['entryrequirements']; // Display Result
		$db_coursefees = $row['coursefees']; // Display Result		
		$db_jobs = $row['jobs']; // Display Result	
		$db_duration = $row['duration']; // Display Result		
		$db_studymode = $row['studymode']; // Display Result	
		$db_award = $row['award']; // Display Result	
		$db_credit = $row['credit']; // Display Result	
		$db_applicationdeadline = $row['applicationdeadline']; // Display Result			
    }
} 
if(isset($_POST['update'])) {
	include 'db.php';
	$id =$_POST['hiddenid'];
    $coursecode = $_POST['textbox1'];
    $coursename= $_POST['textbox2'];
	$coursedetails= $_POST['comment1'];
	$entryrequirements= $_POST['comment2'];
	$fee= $_POST['comment3'];
	$job= $_POST['comment4'];
	$banner= $_POST['comment5'];
	$award= $_POST['textbox3'];
	$credit= $_POST['textbox4'];
	$duration= $_POST['textbox5'];
	$studymode= $_POST['textbox6'];
	$applicationdeadline= $_POST['textbox7'];

    $query = "UPDATE `courses` SET `coursecode` = '{$coursecode}', `coursename` = '{$coursename}', `bannerdescription` = '{$banner}', `coursedetails` = '{$coursedetails}', `entryrequirements` = '{$entryrequirements}', `coursefees` = '{$fee}', `jobs` = '{$job}', `duration` = '{$duration}', `studymode` = '{$studymode}', `award` = '{$award}', `credit` = {$credit}, `applicationdeadline` = '{$applicationdeadline}' WHERE `courses`.`id` = {$id}";
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
	else
	{
		header("Location: ../admin/courselist.php");
	}
}
?>