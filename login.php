<!-- Header -->
<?php include ('header.php'); ?>
<!-- Header End - Do Not Remove -->

<!-- Your Content Start-->
<!--<style>
body{
    margin:0;
    padding: 0; 
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 430px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 19px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -10%;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}


.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type = "text"], input[type = "password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type = "submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type = "submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover{
    color: #ffc107;
}
</style>-->

</style>
<section>
    <div class="comment-form container">
            <h1>Login Here</h1>
            <form name = "f"  action="login">
                <p>Username</p>
                <input type="text" name="username" required="true" placeholder = "Enter username">
                <p>Password</p>
                <input type="text" name="password" required="true" placeholder = "Enter password" style = "-webkit-text-security: disc">
                <br>
            
               <!-- <input type="submit" name="" value="Login">-->
                <div class="site-btn text-white">
                 <a href="profile.php">Login</a></div>
                <br>
                <a href="#" onClick = "mine()">Lost your Password?</a>
                <br>
                <a href="register.php">Dont have an account?</a>
                <script>
                    function mine(){
                        alert("Email has been sent. Please create a new password.!!")
                    }
                </script>
            </form>
        </div>
</section>
<br>

<!-- Your Content End-->

<!-- Footer -->
<?php include ('footer.php'); ?>
<!-- Header End - Do Not Remove -->