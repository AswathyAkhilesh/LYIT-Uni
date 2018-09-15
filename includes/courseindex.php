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
	
	$querysecurity = "SELECT * FROM courses WHERE coursecode = 'COOD4' ";// Check if the user exists
    $select_courseid_query = mysqli_query($connection ,$querysecurity);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_security = $row['id']; // Display Result			
    }
	
	$queryprivate = "SELECT * FROM courses WHERE coursecode = 'COOD5' ";// Check if the user exists
    $select_courseid_query = mysqli_query($connection ,$queryprivate);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_private = $row['id']; // Display Result			
    }
	
	$querybigdata = "SELECT * FROM courses WHERE coursecode = 'COOD6' ";// Check if the user exists
    $select_courseid_query = mysqli_query($connection ,$querybigdata);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_bigdata = $row['id']; // Display Result			
    }
?>