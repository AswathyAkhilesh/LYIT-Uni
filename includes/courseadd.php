<?php include 'db.php'; ?>
<?php
if(isset($_POST['save'])) {

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

    $query = "INSERT INTO `courses` ( `coursecode`, `coursename`, `bannerdescription`, `coursedetails`, `entryrequirements`, `coursefees`, `jobs`, `duration`, `studymode`, `award`, `credit`, `applicationdeadline`) VALUES
 ('{$coursecode}','{$coursename}','{$banner}','{$coursedetails}','{$entryrequirements}','{$fee}','{$job}','{$duration}','{$studymode}','{$award}',{$credit},'{$applicationdeadline}' )";
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