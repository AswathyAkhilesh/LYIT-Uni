<!-- Header -->
<?php include ('includes/header.php'); ?>
<!-- Header End - Do Not Remove -->

<!-- Your Content Start-->

<section class="spad">
    <div class="comment-form container">
            <h1>Login Here</h1><br>
            <form action="includes/login.php" method="post">
                
                <div class="form-group">
                    <p>Username</p>
                    <input type="text" name="username" required="true" placeholder = "Enter username">
                </div>

                <div class="form-group">
                    <p>Password</p>
                    <input type="text" name="password" required="true" placeholder = "Enter password">
                </div>

                <div class="input-group-btn site-btn text-white">
                    <input type="submit" name="login">
                </div>

            </form>

            <!-- <div class="site-btn text-white">
                <a href="profile.php">Login</a>
            </div> -->
            <br>
            
            <a href="#" onClick = "mine()">Lost your Password?</a>
            <br>
            <a href="register.php">Dont have an account?</a>
            <script>
                function mine(){
                    alert("Email has been sent. Please create a new password.!!")
                }
            </script>
        </div>
</section>
<br>

<!-- Your Content End-->

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->