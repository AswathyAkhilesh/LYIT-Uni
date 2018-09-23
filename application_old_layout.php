<?php include('includes/header.php'); ?>
<?php include('includes/profile.php'); ?>
<?php include('includes/course.php'); ?>

<section class="container spad">

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
                <?php if (empty($db_firstName)) { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_firstName; } ?></p>
                <p class="card-text"><strong>Surname:</strong> 
                <?php if (empty($db_lastName)) { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_lastName; } ?></p>
                <p class="card-text"><strong>Date of Birth:</strong> 
                <?php if ($db_dob == "0000-00-00 00:00:00") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo date('d-M-Y', strtotime($db_dob)); } ?></p>
                <p class="card-text"><strong>Phone:</strong> 
                <?php if ($db_phoneNumber === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo "0" . $db_phoneNumber; } ?></p>
                <p class="card-text"><strong>Email:</strong> 
                <?php if ($db_email === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_email; } ?></p>
            </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="img/lyit.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Address Information</h4>
                <p class="card-text"><strong>Address:</strong> 
                <?php if ($db_address === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_address; } ?></p>
                <p class="card-text"><strong>City:</strong> 
                <?php if ($db_city === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_city; } ?></p>
                <p class="card-text"><strong>County:</strong> 
                <?php if ($db_county === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_county; } ?></p>
                <p class="card-text"><strong>Eir Code:</strong> 
                <?php if ($db_eirCode === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_eirCode; } ?></p>
                <p class="card-text"><strong>Country:</strong> 
                <?php if ($db_country === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_country; } ?></p>
            </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="img/level.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Education Level</h4>
                <p class="card-text"><strong>Highest Obtained:</strong> 
                <?php if ($db_highestQual === "") { $count ++; echo "<strong style='color: Red;'>Must Be Updated</strong>"; } else { echo $db_highestQual; } ?></p>

                <?php 
                if($db_dob !== "") {
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

<section class="container spad"><!-- End Form Section -->
    <form action="includes/applicationupdate.php" method="post">  
        <div class="form-group">
            <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
            <input type="hidden" name="coursename" id="coursename" value="<?php echo $db_coursename ?>" />
            <input type="hidden" name="userID" id="userID" value="<?php echo $db_id ?>" />
            
            <h2 style = "padding-bottom: 35px; padding-left: 15px"><?php echo ($db_coursename) ?></h2>
            
            <h3 style = "padding-bottom: 35px; padding-left: 15px">Ensure details below are correct before applying</h3>
                <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                <div class="col-sm-9">
                <input class="inp-text" class="readonly" required="required" name="input-first-name" id="input-first-name" type="text" value="<?php echo $db_firstName ?>" size="30"/><br />
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label" >Last Name*</label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="last-name"  id="last-name" type="text" value="<?php echo $db_lastName ?>" size="30"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Identified as*</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                            <input class="gender" type="radio"  <?php echo ($db_gender == 'male') ? 'checked' : '' ?> name="gender" value="male"  /> Male 
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                            <input class="gender" type="radio"  <?php echo ($db_gender == 'female') ? 'checked' : '' ?> name="gender" value="female"  /> Female 
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                            <input class="gender" type="radio"  <?php echo ($db_gender == 'other') ? 'checked' : '' ?> name="gender" value="other"  /> Prefer Not To Disclose
                            </label>
                        </div>
                    </div>
                </div>
                <br>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="e-mail"  id="e-mail" type="text" size="30" value="<?php echo $db_email ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3  control-label">Date of Birth*</label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="dob" id="dob" type="date" value="<?php echo date('Y-m-d', strtotime($db_dob)) ?>" size="30" min="1950-01-01" max="2018-12-31" />
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="mobile-no" id="mobile-no" type="number" max="0999999999" value="<?php echo $db_phoneNumber ?>"/>
                    <span class="help-block text-danger small">*Your phone number won't be disclosed anywhere </span>
                </div>
            </div>
            <div class="form-group">
                <label for="Address" class="col-sm-3 control-label">Address*</label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="input-address1" id="input-address1" type="text" size="30" value="<?php echo $db_address ?>" /><br />
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">City*</label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="input-city"  id="input-city" type="text" size="30" value="<?php echo $db_city ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">County*</label>
                <div class="col-sm-9">
                <input class="inp-text" required="required" name="county"  id="county" type="text" size="30" value="<?php echo $db_county ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Country*</label>
                <div class="col-sm-9">
                <input class="inp-text" class="readonly" required="required" name="country"  id="country" type="text" size="30" value="<?php echo $db_country ?>"/>
                </div>
            </div>       
            <br>
            <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Highest Qualifications*</label>
                <div class="col-sm-9">
                <input class="text readonly" required="required" name="highestQual"  id="highestQual" type="text" size="30" value="<?php echo $db_highestQual ?>" />
                </div>
            </div>      
                <br>
                                    
            </div> <!-- /.form-group -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                <br>
                    <span class="help-block">*Required fields</span>
                </div>
            </div>
                <!-- <div class="site-btn text-white">
                <input class="submit-button" type="submit" id="submit" name="update" value="update" />
                <input class="submit-button" formaction="includes/applicantadd.php" type="submit" id="submit" name="submit" value="submit" />
            
                </div> -->

            <div class="site-btn text-white"><a href="profile.php">Update profile</a></div><br>

            <div class="form-group text-white">
                <!-- <button class="btn btn-success btn-lg btn-block" >Update Profile</button> -->
                <button type="submit" class="site-btn text-white btn-lg btn-block" formaction="includes/applicantadd.php" name="submit">Submit Application</button>
            </div>
        </div>
    </form> <!-- /form -->
</section><!-- End Form Section -->

<script>
    $(".readonly").keydown(function(e){
        e.preventDefault();
    });
</script>

<?php include('includes/footer.php'); ?>
