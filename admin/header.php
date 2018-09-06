<!DOCTYPE html>
<html lang="en">
<head>
	<title>LYIT - University</title>
	<meta charset="UTF-8">
	<meta name="description" content="LYIT - University">
	<meta name="keywords" content="event, lyit, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
    <link href="../img/favicon.png" rel="shortcut icon"/>
    
    <!-- Social Image -->
    <meta property="og:image" content="https://link192.net/lyituni/img/cover.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.countdown.js"></script>
	<script src="../js/masonry.pkgd.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/tools.js"></script>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/themify-icons.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


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
			<a href="index.php" class="site-logo"><img src="../img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-user"></i>
					<p><span>Admin Area</span><?php echo "The time is " . date("h:i a") . " " . date("l d/m/Y") . "<br>";?></p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section sticky-top">
		<div class="container">
			<div class="nav-right">
				<a href="login.php"><i class="fa fa-user"></i> Login</a>
				<a href="../index.php"><i class="fa fa-home"></i> Frontend</a>
			</div>
			<ul class="main-menu">
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="courselist.php">COURSES</a></li>
				<li><a href="applicantlist.php">Applicants</a></li>
				<li><a href="interviewlist.php">Interviews</a></li>
				<li><a href="students.php">Students</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->
