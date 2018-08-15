<!-- Header -->
<?php include ('header.php'); ?>
<!-- Header End - Do Not Remove -->

<!-- Your Content Start-->

<section class = 'container'>
<div class="container">
            <form class="form-horizontal" role="form">
            <br>
                <h2>Registration</h2>
                <br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender*</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="otherRadio" value="prefer"> Not To Disclose
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username* </label>
                    <div class="col-sm-9">
                        <input type="username" id="username" placeholder="username" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">&#160;&#160;;&#160;&#160;
                        <input class="form-check-input" type="checkbox" id="passCheck">
                         <label class="form-check-label" for="passwordChaeck"> Show Password
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block text-danger small">*Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Address*</label>
                    <div class="col-sm-9">
                        <input type="text" id="Address1" placeholder="Address1" class="form-control" autofocus>
                        <br>
                        <input type="text" id="Address2" placeholder="Address2" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City*</label>
                    <div class="col-sm-9">
                        <input type="city" id="city" placeholder="City" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country*</label>
                    <div class="col-sm-9">
                        <input type="country" id="country" placeholder="country" class="form-control">
                    </div>
                </div>
                
                
                    
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                    <br>
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                     <div class="site-btn text-white">
                     <a href="login.php">Submit</div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</section>
<!-- <form>
    <br>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputUser">Username</label>
        <input type="textarea" class="form-control" id="inputUser" placeholder="Username">
        <br>
        </div>
        <div class="form-group col-md-6">
    
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        &#160;&nbsp;
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Show Password
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Ulster</option>
            <option>Leinster</option>
            <option>Connacht</option>
            <option>Munster</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        
        </label>
        </div>
        
   <button type="submit" class="btn btn-primary" href = "login.php" >Submit</button>
   <div class="site-btn text-white">
   <a href="login.php">Submit</div>
    </form>
  <!-- <form>
         <input onClick="window.location.href='http://localhost/01_LyitUni/login.php'" type="submit" Value="Submit">
      </form> -->
      <!-- <a href="login.php">Dont have an account?</a>
     
 </section>-->
<br>

<!-- Your Content End-->

<!-- Footer -->
<?php include ('footer.php'); ?>
<!-- Header End - Do Not Remove -->