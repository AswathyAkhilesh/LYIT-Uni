<!-- Header -->
<?php include ('includes/header.php'); ?>
<!-- Header End - Do Not Remove -->

<!-- Your Content Start-->

<style>
    .formBG {
        background: #e1e1e1;
    }

    .reg {
        background-image: url("img/encroll-img.jpg");
        background-size: 760px auto;  
        position: relative;
        min-height: 200px;
    }

    .reg p {
        text-align: center;
        color: green;
        text-transform: uppercase;
        font-size: 30px;
        font-weight: bold;
        margin: auto;
        width: 50%;
        border: 3px solid green;
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
                <form action="includes/login.php" method="post">
                <br>
                    <h2>Login</h2>
                    <p>Login to your account.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="login">Login Now</button>
                    </div>
                </form>
                <div class="text-center">Don't have an account? <a href="register.php">Register</a></div>
                <div class="text-center">Forgot your password? <a href="#" onClick = "mine()">Reset?</a></div><br>
                <script>
                    function mine(){
                        alert("Email has been sent. Please create a new password.!!")
                    }
                </script>
            </div>
            <div class="reg col-lg-8">
                <p>Login</p>
            </div>
        </div>

    </div>    
</section>
<br>

<!-- Your Content End-->

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->