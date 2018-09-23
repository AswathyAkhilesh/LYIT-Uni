	<!-- Nav section  -->
	<nav class="nav-section sticky-top">
		<div class="container">
			<div class="nav-right">

				<?php
				if (isset($_SESSION['db_userRole'])) {
					echo "<a href='profile.php'> Profile</a>" ;
				} else {
					echo "<a href='register.php'> Register</a>" ;
                } ?>

				<?php
				if (!isset($_SESSION['db_userRole'])) {
					echo "<a href='login.php'> Login</a>" ;
				} else {
					echo "<a href='includes/logout.php'> Logout</a>" ;
                } ?>
			</div>
			<ul class="main-menu">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="index.php#course">COURSES</a></li>
				<li><a href="index.php#news">News</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</div>
	</nav>
	<!-- Nav section end -->