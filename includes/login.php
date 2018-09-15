<?php include 'db.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php


if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username); // Clean & Remove SQL Injection - Security
    $password = mysqli_real_escape_string($connection, $password); // Clean & Remove SQL Injection - Security

    $query = "SELECT * FROM users WHERE username = '{$username}' "; // Check if the user exists
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)) {
        $db_id = $row['userID']; // Display Result
        $db_username = $row['username']; // Display Result
        $db_password = $row['password']; // Display Result
        $db_firstName = $row['firstName']; // Display Result
        $db_lastName = $row['lastName']; // Display Result
        $db_userRole = $row['userRole']; // Display Result
        $db_email = $row['email']; // Display Result
        $db_dob = $row['dob']; // Display Result
        $db_phoneNumber = $row['phoneNumber']; // Display Result
        $db_address = $row['address']; // Display Result
        $db_city = $row['city']; // Display Result
        $db_county = $row['county']; // Display Result
        $db_eirCode = $row['eirCode']; // Display Result
        $db_country = $row['country']; // Display Result
        $db_userRole= $row['userRole']; // Display Result
    }

    if(password_verify($password,$db_password)) {
        header("Location: ../index.php");
    } else if ($username == $db_username && $password == $db_password) {
        $_SESSION['db_id'] = $db_id;
        $_SESSION['db_username'] = $db_username;
        $_SESSION['db_firstName'] = $db_firstName;
        $_SESSION['db_lastName'] = $db_lastName;
        $_SESSION['db_userRole'] = $db_userRole;
        $_SESSION['db_email'] = $db_email;
        $_SESSION['db_dob'] = $db_dob;
        $_SESSION['db_phoneNumber'] = $db_phoneNumber;
        $_SESSION['db_address'] = $db_address;
        $_SESSION['db_city'] = $db_city;
        $_SESSION['db_county'] = $db_county;
        $_SESSION['db_eirCode'] = $db_eirCode;
        $_SESSION['db_country'] = $db_country;
        header("Location: ../profile.php");
    } else {
        header("Location: ../register.php");   
    }
}