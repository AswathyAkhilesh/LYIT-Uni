<?php ob_start(); ?>
<?php session_start(); ?>
<?php
    $querydevops = "SELECT * FROM courses WHERE coursecode = 'COOD1' ";
    $select_courseid_query = mysqli_query($connection ,$querydevops);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_devops = $row['id']; // Display Result			
    }
	
	$queryappliedcomputing = "SELECT * FROM courses WHERE coursecode = 'COOD2' ";
    $select_courseid_query = mysqli_query($connection ,$queryappliedcomputing);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_appliedcomputing = $row['id']; // Display Result			
    }
	
	$querycloudtechnology = "SELECT * FROM courses WHERE coursecode = 'COOD3' ";// Check if the user exists
    $select_courseid_query = mysqli_query($connection ,$querycloudtechnology);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_cloudtechnology = $row['id']; // Display Result			
    }
?>