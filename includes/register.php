<?php include 'db.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    if(isset($_POST['register'])) { 
        $firstname = $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $username= $_POST['username'];
        $email= $_POST['email'];
        $password= $_POST['password'];

        $query = "INSERT INTO users (username, password, firstName, lastName, email) VALUES ('$username', '$password', '$firstname', '$lastname', '$email')";

        $select_user_query = mysqli_query($connection ,$query);
        if(!$select_user_query) {
            die("QUERY FAILED". mysqli_error($connection));
        }
        else
        {
            header("Location: ../login.php");
        } 
    }
?>