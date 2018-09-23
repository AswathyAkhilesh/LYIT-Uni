<!-- Header -->
<?php include ('includes/header.php'); ?>
<?php include ('includes/nav.php'); ?>

<!-- Header End - Do Not Remove -->

<!-- Your Content Start-->

<style>
    .formBG {
        background: #e1e1e1;
    }

    .reg {
        background-image: url("img/enroll-bg.jpg");
        background-size: 1100px auto;  
        position: relative;
        min-height: 200px;
    }

    .reg p {
        text-align: center;
        color: #fff;
        text-transform: uppercase;
        font-size: 30px;
        font-weight: bold;
        margin: auto;
        width: 50%;
        border: 3px solid white;
        padding: 20px;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<section class = 'container spad'>
    <div class="container">        
        <div class="row">
            <div class="formBG signup-form col-lg-4 order-2">
                <form action="includes/register.php" method="post">
                <br>
                    <h2>Register</h2>
                    <p>Create your account. It's free and only takes a minute.</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6"><input type="text" class="form-control" name="firstname" placeholder="First Name" required="required"></div>
                            <div class="col-lg-6"><input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required"></div>
                        </div>        	
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <!-- <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>         -->
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#" onClick = "terms()">Terms of Use?</a> &amp; <a href="#" onClick = "privacy()">Privacy Policy</a></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="register">Register Now</button>
                    </div>
                </form>
                <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div><br>
            </div>
            <div class="reg col-lg-8">
                <p>Register</p>
            </div>
        </div>

    </div>    
</section>
<br>

<!-- Your Content End-->

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->


<script>
    function terms(){
        alert("Terms of Use Displayed here.!!")
    }
    function privacy(){
        alert("Privacy Policy Displayed here.!!")
    }
</script>