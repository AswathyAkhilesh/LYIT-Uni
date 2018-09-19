<?php include ('includes/header.php'); ?>
<?php include ('includes/profile.php'); ?>
<?php include ('includes/course.php'); ?>
<section class="container spad">
        
        
<form action="includes/applicationupdate.php" method="post">  
        <div class="form-group">
                <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
                <input type="hidden" name="coursename" id="coursename" value="<?php echo $db_coursename ?>" />
                <input type="hidden" name="userID" id="userID" value="<?php echo $db_userID ?>" />
                
                <h2 style = "padding-bottom: 35px; padding-left: 15px"><?php echo ($db_coursename)?></h2>
                
                <h3 style = "padding-bottom: 35px; padding-left: 15px">Ensure details below are correct before applying</h3>
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="input-first-name" id="input-first-name" type="text" value="<?php echo $db_firstName ?>" size="30"/><br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label" >Last Name*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="last-name"  id="last-name" type="text" value="<?php echo $db_lastName ?>" size="30"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Identified as*</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                <input class="gender" type="radio"  <?php echo ($db_gender=='male')?'checked':'' ?> name="gender" value="male"  /> Male 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                <input class="gender" type="radio"  <?php echo ($db_gender=='female')?'checked':'' ?> name="gender" value="female"  /> Female 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                <input class="gender" type="radio"  <?php echo ($db_gender=='other')?'checked':'' ?> name="gender" value="other"  /> Prefer Not To Disclose
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="e-mail"  id="e-mail" type="text" size="30" value="<?php echo $db_email ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3  control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="dob" id="dob" type="date" value="<?php echo date('Y-m-d', strtotime($db_dob)) ?>" size="30" min="1950-01-01" max="2018-12-31" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="mobile-no" id="mobile-no" type="number" max="0999999999" value="<?php echo $db_phoneNumber ?>"/>
                        <span class="help-block text-danger small">*Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Address*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="input-address1" id="input-address1" type="text" size="30" value="<?php echo $db_address ?>" /><br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="input-city"  id="input-city" type="text" size="30" value="<?php echo $db_city ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">County*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="county"  id="county" type="text" size="30" value="<?php echo $db_county ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="country"  id="country" type="text" size="30" value="<?php echo $db_country ?>"/>
                    </div>
                </div>       
                <br>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Highest Qualifications*</label>
                    <div class="col-sm-9">
                    <input class="inp-text" name="highestQual"  id="highestQual" type="text" size="30" value="<?php echo $db_highestQual ?>" />
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
                     <div class="site-btn text-white">
                     <input class="submit-button" type="submit" id="submit" name="update" value="update" />
                     <input class="submit-button" formaction="includes/applicantadd.php" type="submit" id="submit" name="submit" value="submit" />
                    
                     </div>
            </form> <!-- /form -->
            </div>
</section>             

<script>

function myFunction() {

        alert("The form was submitted");
}

</script>



<?php include ('includes/footer.php'); ?>
