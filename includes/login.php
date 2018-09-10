<?php include 'db.php'; ?>

will process form input >> Login & or redirect to profile/register. >> Redirect to Profile.

<?php


if(isset($_POST['login'])) {
    echo "<br>Login page is connected";
}