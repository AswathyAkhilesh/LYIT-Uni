<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<?php include('includes/profile.php'); ?>
<?php include('includes/course.php'); ?>

<section class="container spad">

    <?php
    if (!isset($_SESSION['db_userRole'])) {
        header("Location: login.php?login=false");
    } ?>

        <?php
    if (isset($_GET['submitted']) && ($_GET['submitted'] == 'true')) { echo '<div class="alert alert-info alert-dismissible fade show" role="alert"> 
        <h4><strong>Application Submitted...</strong> Please check your email for confirmation.</h4>
        </button>
      </div>';   
    }?>

    <form action="includes/applicationupdate.php" method="post">

    <?php $count = 0; ?>
    
    <div class="form-group">
        <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
        <input type="hidden" name="coursename" id="coursename" value="<?php echo $db_coursename ?>" />
        <input type="hidden" name="userID" id="userID" value="<?php echo $db_id ?>" />
        <input type="hidden" name="input-first-name" id="input-first-name" value="<?php echo $db_firstName ?>"/>

        
        <h2 style = "padding-bottom: 35px; padding-left: 15px"><?php echo ($db_coursename) ?></h2>
        
        <h3 style = "padding-bottom: 35px; padding-left: 15px">Ensure details below are correct before applying</h3>
    <div>

    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/person.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Personal Information</h4>
                <p class="card-text"><strong>First Name:</strong> 
                <?php if (empty($db_firstName)) {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_firstName;
                } ?></p>
                <p class="card-text"><strong>Surname:</strong> 
                <?php if (empty($db_lastName)) {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_lastName;
                } ?></p>
                <p class="card-text"><strong>Date of Birth:</strong> 
                <?php if ($db_dob == "0000-00-00 00:00:00") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo date('d-M-Y', strtotime($db_dob));
                } ?></p>
                <p class="card-text"><strong>Phone:</strong> 
                <?php if ($db_phoneNumber === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo "0" . $db_phoneNumber;
                } ?></p>
                <p class="card-text"><strong>Email:</strong> 
                <?php if ($db_email === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_email;
                } ?></p>
            </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="img/lyit.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Address Information</h4>
                <p class="card-text"><strong>Address:</strong> 
                <?php if ($db_address === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_address;
                } ?></p>
                <p class="card-text"><strong>City:</strong> 
                <?php if ($db_city === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_city;
                } ?></p>
                <p class="card-text"><strong>County:</strong> 
                <?php if ($db_county === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_county;
                } ?></p>
                <p class="card-text"><strong>Eir Code:</strong> 
                <?php if ($db_eirCode === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_eirCode;
                } ?></p>
                <p class="card-text"><strong>Country:</strong> 
                <?php if ($db_country === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_country;
                } ?></p>
            </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="img/level.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Education Level</h4>
                <p class="card-text"><strong>Highest Obtained:</strong> 
                <?php if ($db_highestQual === "") {
                    $count++;
                    echo "<strong style='color: Red;'>Must Be Updated</strong>";
                } else {
                    echo $db_highestQual;
                } ?></p>

                <?php 
                if ($db_dob !== "") {
                    //Our YYYY-MM-DD date string.
                    $date = "$db_dob";
                    //Convert the date string into a unix timestamp.
                    $unixTimestamp = strtotime($date);
                    //Get the day of the week using PHP's date function.
                    $dayOfWeek = date("l", $unixTimestamp);
                    //Print out the day that our date fell on.
                    echo '<br><br><br><br><p></p><p><strong style="color: Blue;">Did you know you were born on a ' . $dayOfWeek . '</strong></p>';
                }
                ?>

            </div>
        </div>
    </div><br>
    <?php
    if ($count > 0) {
            # code...
        echo '<div class="site-btn text-white"><a href="profile.php">Update profile</a></div><br>';
    } else {
            # code...
        echo '<div class="form-group text-white">
            <button type="submit" class="site-btn text-white btn-lg btn-block" formaction="includes/applicantadd.php" name="submit">Submit Application</button>
            </div>';
    }

    ?>
</div>
</form>
</section>



<script>
    $(".readonly").keydown(function(e){
        e.preventDefault();
    });
</script>

<?php include('includes/footer.php'); ?>
