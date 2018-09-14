<!-- Header -->
<?php include ('includes/header.php'); ?>
<!-- Header End - Do Not Remove -->
<link rel="stylesheet" href="css/course.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<div class="container">
   <div class="jumbotron" style="background-image: url('img/course detail/header.jpg')">
      <h1 style="color:white">Master of Science in DevOps </h1>
      <h2 style="color:white">
      Course Essentials
      <h2>
      <p style="color:white">DevOps, a new organizational and cultural way of organizing development and IT operations work, is spreading rapidly – driven by mounting evidence of its benefits to the business. But reaping these gains requires rethinking application security to deliver more secure code at DevOps speed.</p>
   </div>
   <h3 class="card-title" style="color:#22206f">Key Information </h3>
   <div class="row">
      <div class="col-sm-4" style="background-color:lavenderblush;">Award :-Masters</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Duration :- 1 and 2 year</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Course code:- COOD1</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Credit :- 30</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Study Mode :- Full-time and Part-time</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">Application Deadline :- 24 august</div>
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
      <div class="container tab-pane active" id="a"><br><br><b>Our Master of Science in Computing in DevOps is a one year, full-time or two year, part-time programme. DevOps is the practice of operations and development engineers participating together in the entire service lifestyle, from design through the development process to production support.
         DevOps is characterised by operations staff harnessing the same techniques as developers for their systems work. Topics the course covers include: DevOps Software Engineering, Project Management and Deployment Pipelines.</b><br><br> Proposed Module for this year are as Follows:-  <br><br> DevOps Software Engineering -	Mandatory<br><br>OO Programming for Server Administration-Mandatory<br><br>Scripting the Deployment Pipeline-Mandatory<br><br>DevOps Project Management-Mandatory<br><br>Dissertation-Mandatory
      </div>
      <div class="container tab-pane fade" id="b">
         <b><br>Minimum Entry Requirements</b><br><br>
         - Level 8 Honours Degree in Computing, or equivalent, second class honours (2.2), or Higher Diploma in Computing (Conversion Course into Computing).<br> 
         -If you do not have an honours degree but have relevant experience you may also be eligible to apply via Recognition of Prior Learning (RPL).  
         <br><br>
         <table class="cao-table">
            <tbody>
               <tr>
                  <th>Number of Places</th>
                  <th>15</th>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="container tab-pane fade" id="c" >
         <br><div style="padding-bottom:15px"><b>The EU and NON EU citizens have got different fee structure</b></div>
         <div style="color:#22206f;font-size:15px;padding-bottom:10px">EU Fees: €5,000.00</div>
         <div style="color:#22206f;font-size:15px">Non-EU Fees: €9,000.00</div><br>
      </div>
      <div class="container tab-pane fade text-center" id="d"><br>Depending on what type of applicant you are, the application process will differ.<br>
         <!-- Liam - Edit Start -->
         <div>
         <?php
            if (isset($_SESSION['db_userRole'])) {
                echo "To applying to this course please click on the APPLY button.<br> <br>" ;
                echo "<div class='btn btn-success text-white'> <a href='application.php'>Apply</a> </div> ";
            } else {
                echo "As you are <strong>NOT</strong> logged in, please <strong>Login</strong> or <strong>Register</strong> to Apply for this course<br><br>" ;
                echo "<div class='btn btn-success text-white'> <a href='login.php'>Login</a> </div> ";
                echo " ";
                echo "<div class='btn btn-info text-white'> <a href='register.php'>Register</a> </div> ";
            } ?>
		 </div>
         <!-- Liam - Edit End -->
      </div>
      <div class="container tab-pane fade" style="font-size:1.2em" id="e">
	  <br>
         <div>Career Pathways</div>
         <p>The main employers are:</p>
         <ul style="margin-left:30px;font-size:14px">
            <li>Software Companies</li>
            <li>Multinational Companies</li>
         </ul>
		 <br>
         <div>Graduate Careers</div>
         <p>Former graduates are employed in the following capacities:</p>
         <ul style="margin-left:30px;font-size:14px">
            <li>DevOps Engineer</li>
            <li>Cloud DevOps Engineer</li>
            <li>Systems Software Engineer</li>
         </ul>
      </div>
   </div>
</div>
<br>
</div>
<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->