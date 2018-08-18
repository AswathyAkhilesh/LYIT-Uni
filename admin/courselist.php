<?php include ('header.php'); ?>	  
	  
	  <!--Style sheet--->
	  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
	  <link rel="stylesheet" href="../css/admincourselist.css">
	  
	  <!--Third-party Libraries--->
	  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	  <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
	  
	  <!--Script-->
	  <script src="../js/admincourselist.js"></script>
 <br>
 <h2>Course List</h2>
  <p>The below grid contains the course list, to edit a course select a course and click on the "Edit" button, to Add a new course click on the "Add" button. To view the course detail page, select a course and click on the "View" button.</p>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th></th>
				<th>Course Code</th>
                <th>Course Name</th>
				<th>Study Mode</th>
				<th>Award</th>
				<th>Credit</th>
                <th>Application Deadline</th>
            </tr>
        </thead>
        <tbody>
	            <tr>
                <td></td>
				<td>COOD1</td>
                <td>Master of Science in DevOps</td>
                <td>Full-time and Part-time</td>
                <td>Masters</td>
                <td>30</td>
                <td>24 August</td>
            </tr>

            <tr>
                <td></td>
                <td>COOD2</td>
                <td>Applied Computing</td>
                <td>Full-time and Part-time</td>
                <td>Masters</td>
                <td>30</td>
				<td>24 August</td>
            </tr>
            <tr>
                <td></td>
                <td>COOD3</td>
                <td>Cloud Technology</td>
                <td>Full-time and Part-time</td>
                <td>Masters</td>
                <td>30</td>
				<td>24 August</td>
            </tr>
            <tr>
                <td></td>
                <td>COOD3</td>
                <td>Security</td>
                <td>Full-time and Part-time</td>
                <td>Masters</td>
                <td>30</td>
				<td>24 August</td>
            </tr>
			
        </tbody>
       
    </table>
	<br>
	<p align="center">
	<button type="button" class="btn btn-info">View</button>
	<button type="button" class="btn btn-info">Edit</button>
	<button type="button" class="btn btn-info">Add</button></p>
<?php include ('footer.php'); ?>