<?php include ('header.php'); ?>

<?php

$query = "SELECT * from applicants WHERE courseID = 1";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_1 = mysqli_num_rows($select_all);
// echo $count_1;

$query = "SELECT * from applicants WHERE courseID = 2";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_2 = mysqli_num_rows($select_all);
// echo $count_2;

$query = "SELECT * from applicants WHERE courseID = 3";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_3 = mysqli_num_rows($select_all);
// echo $count_3;

$query = "SELECT * from applicants WHERE courseID = 4";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_4 = mysqli_num_rows($select_all);
// echo $count_4;

$query = "SELECT * from applicants WHERE courseID = 5";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_5 = mysqli_num_rows($select_all);
// echo $count_5;

$query = "SELECT * from applicants WHERE courseID = 6";// Get course details from course table
$select_all = mysqli_query($connection, $query);
$count_6 = mysqli_num_rows($select_all);
// echo $count_6;
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Course', 'Percentage'],
          ['Applied Computing',     <?php echo $count_1 ?>],
          ['Cloud Technology',      <?php echo $count_2 ?>],
          ['Security & Digital Forensics',  <?php echo $count_3 ?>],
          ['DevOps Masters', <?php echo $count_4 ?>],
          ['Private Cloud Technologies',    <?php echo $count_5 ?>],
		  ['Big Data Analytics',    <?php echo $count_6 ?>]
        ]);

        var options = {
          title: 'Registration By Percentage'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>WELCOME TO LYIT DASHBOARD</h3>
				<p>Let students be creative and make a difference.</p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<h5>About us</h5>
					<p style="text-align: justify;">Letterkenny Institute of Technology (LYIT) fosters one of the most progressive learning environments in Ireland. <br>Our reach is both local and international; attracting a diverse student body of more than 4,000 students from Ireland and 31 countries across the globe. They choose LYIT because of our unique ethos that harnesses academic excellence with career-focused practical experience. It’s an approach that positions our students for future success in line with their aspirations. We also foster close relationships with the wider local community. Our engagement and partnerships with indigenous and international businesses leaders strengthens our student’s prospects in tandem with the prosperity of the region’s economy. Our modern integrated campuses in Letterkenny and Killybegs aren’t just gateways to a bright future, but to one of the most breathtaking corners of the world - with Donegal named National Geographic’s ‘Coolest Place on the Planet 2017’. There’s just so much to discover. So take your time, and stay a while to explore our website and see why LYIT is the place to be.</p>
					<ul class="about-list">
						<li><i class="fa fa-check-square-o"></i> University Faculties organise teaching and research into individual subjects.</li>
						<li><i class="fa fa-check-square-o"></i> The University is rich in history - its famous buildings attract visitors.</li>
						<li><i class="fa fa-check-square-o"></i> 50 years of people, and achievements that continue to transform.</li>
						<li><i class="fa fa-check-square-o"></i> The University's core values are as follows:freedom of thought.</li>
					</ul>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<div id="piechart" style="width: 100%; height: 360px; border: 1px solid black;"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->

	

	<section class="container spad">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
				<div class="card-body">
					<h5 class="card-title">Courses Quicklist</h5>
					<table class="table table-hover table-bordered">
						<thead class="thead-light">
							<tr>
							<th scope="col">Course</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$query = "SELECT * FROM courses";
								$select_all = mysqli_query($connection, $query);
								while($row = mysqli_fetch_array($select_all)) {
									echo "<tr>";
									echo "<td>" . $row['coursename'] . "</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
					<a href="courselist.php" class="site-btn text-white">View Full List</a>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
				<div class="card-body">
					<h5 class="card-title">Applicants Quicklist</h5>
					<table class="table table-hover table-bordered">
						<thead class="thead-light">
							<tr>
							<th scope="col">Name</th>
							<th scope="col">Course</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$query = "SELECT * FROM applicants LIMIT 6";
								$select_all = mysqli_query($connection, $query);
								while($row = mysqli_fetch_array($select_all)) {
									echo "<tr>";
									echo "<td>" . $row['FirstName'] . "</td>";
									echo "<td>" . $row['CourseName'] . "</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
					<a href="applicantlist.php" class="site-btn text-white">View Full List</a>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
				<div class="card-body">
					<h5 class="card-title">Interview Quicklist</h5>
					<table class="table table-hover table-bordered">
						<thead class="thead-light">
							<tr>
							<th scope="col">Name</th>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$query = "SELECT * FROM interviews LIMIT 6";
								$select_all = mysqli_query($connection, $query);
								while($row = mysqli_fetch_array($select_all)) {
									echo "<tr>";
									echo "<td>" . $row['Name'] . "</td>";
									echo "<td>" . $row['date'] . "</td>";
									echo "<td>" . $row['Time'] . "</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
					<a href="interviewlist.php" class="site-btn text-white">View Full List</a>
				</div>
				</div>
			</div>
		</div>
	</section>

	

<?php include ('footer.php'); ?>