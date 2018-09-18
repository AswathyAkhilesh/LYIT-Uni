<!-- Header -->
<?php include ('includes/header.php'); ?>
<?php include ('includes/course.php'); ?>
<!-- Header End - Do Not Remove -->
<link rel="stylesheet" href="css/course.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<div class="container">
   <div class="jumbotron" style="background-image: url('img/course detail/header.jpg')">
      <h1 style="color:white"><?php echo $db_coursename ?></h1>
      <h2 style="color:white">
      Course Essentials
      <h2>
      <p style="color:white"><?php echo $db_bannerdescription ?></p>
   </div>
   <h3 class="card-title" style="color:#22206f">Key Information </h3>
   <div class="row">
      <div class="col-sm-4" style="background-color:lavenderblush;">Award :-<?php echo $db_award ?></div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Duration :- <?php echo $db_duration ?></div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Course code:- <?php echo $db_coursecode ?></div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Credit :- <?php echo $db_credit ?></div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Study Mode :- <?php echo $db_studymode ?></div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Application Deadline :- <?php echo $db_applicationdeadline ?></div>
   </div>
</div>
</div>
<div class="container course-details">
   <br><br>
   <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" data-toggle="tab" href="#a">COURSE DETAILS AND MODULES</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#b">ENTRY REQUIREMENTS</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#c">COURSE FEE</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#d">HOW TO APPLY</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#e">JOBS</a>
      </li>
   </ul>
   <!-- Tab panes -->
   <div class="tab-content">
      <div class="container tab-pane active" id="a"><?php echo $db_coursedetails ?></div>
      <div class="container tab-pane fade" id="b"><?php echo $db_entryrequirements ?></div>
      <div class="container tab-pane fade" id="c" ><?php echo $db_coursefees ?></div>
      <div class="container tab-pane fade text-center" id="d"><br>Depending on what type of applicant you are, the application process will differ.<br>
         <!-- Liam - Edit Start -->
         <div>
         <?php
            if (isset($_SESSION['db_userRole'])) {
                echo "To applying to this course please click on the APPLY button.<br> <br>" ;
                echo "<div class='btn btn-success text-white'> <a href='application.php?id=$id'>Apply</a> </div> ";
            } else {
                echo "As you are <strong>NOT</strong> logged in, please <strong>Login</strong> or <strong>Register</strong> to Apply for this course<br><br>" ;
                echo "<div class='btn btn-success text-white'> <a href='login.php'>Login</a> </div> ";
                echo " ";
                echo "<div class='btn btn-info text-white'> <a href='register.php'>Register</a> </div> ";
            } ?>
		 </div>
         <!-- Liam - Edit End -->
      </div>
      <div class="container tab-pane fade" style="font-size:1.2em" id="e"><?php echo $db_jobs ?></div>
   </div>
</div>
<br>
</div>
<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->