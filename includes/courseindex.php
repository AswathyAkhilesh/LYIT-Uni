<?php
    $querydevops = "SELECT * FROM courses WHERE coursecode = 'COOD1' ";// Check if the user exists
    $select_courseid_query = mysqli_query($connection ,$querydevops);
    if(!$select_courseid_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_courseid_query)) {
        $db_devops = $row['id']; // Display Result			
    }
?>