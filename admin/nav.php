	<!-- Header section  -->
	<nav class="nav-section sticky-top">
		<div class="container">
			<div class="nav-right">
				<?php
				if (isset($_SESSION['db_userRole'])) {
					echo "<a href='logout.php'> Logout</a>" ;
				} else {
					echo "<a href='login.php'><i class='fa fa-home'></i> Register</a>" ;
				} 
				?>
				<a href="../index.php"><i class="fa fa-home"></i> Frontend</a>
			</div>

			<ul class="main-menu">
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="courselist.php">COURSES</a></li>
				<li><a href="applicantlist.php">Applicants</a></li>
				<li><a href="interviewlist.php">Interviews</a></li>
			</ul>
		</div>
	</nav>