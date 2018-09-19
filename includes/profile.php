<?php


if(isset($_SESSION['db_id'])) {

    $userID = $_SESSION['db_id'];

    $query = "SELECT * FROM users WHERE userID = {$userID}"; // Get user details
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)) {
        $db_id = $row['userID']; // Display Result
        $db_firstName = $row['firstName']; // Display Result
		$db_middleName = $row['middleName']; // Display Result
        $db_lastName = $row['lastName']; // Display Result
        $db_userRole = $row['userRole']; // Display Result
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
}