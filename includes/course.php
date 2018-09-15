<?php
if (isset($_GET['id'])) {
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
} else {
    // Fallback behaviour goes here
}
?>