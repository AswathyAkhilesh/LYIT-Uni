<?php include 'db.php'; ?>

<?php


if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username); // Clean & Remove SQL Injection - Security
    $password = mysqli_real_escape_string($connection, $password); // Clean & Remove SQL Injection - Security

    $query = "SELECT * FROM users WHERE username = '{username}' "; // Check if the user exists
    $select_user_query = mysqli_query($connection ,$query);
    if(!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

}