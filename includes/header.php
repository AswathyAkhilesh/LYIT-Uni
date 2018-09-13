<?php include ('includes/db.php'); ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LYIT - University</title>
	<meta charset="UTF-8">
	<meta name="description" content="LYIT - University">
	<meta name="keywords" content="event, lyit, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
    <link href="img/favicon.png" rel="shortcut icon"/>
    
    <!-- Social Image -->
    <meta property="og:image" content="https://link192.net/lyituni/img/cover.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.php" class="site-logo"><img src="img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Library Hours:</span>Monday - Friday: 09:30 AM - 09:30 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>Port Road, Letterkenny, Donegal</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
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
	<!-- Header section end -->
