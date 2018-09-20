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
<script src="../js/adminapplicantlist.js"></script>
<!--Begin HTML design--> 
<Section class="container spad">
<br>
<h2>Applicant List</h2>
<p>The below grid contains the applicant list, to schedule interview for an applicant select an applicant and click on the "Schedule" button.</p>
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
      <tr>
         <th></th>
         <th>Name</th>
         <th>Course Name</th>
      </tr>
   </thead>   
</table>
<p align="center">
   <button type="button" id="view" class="btn btn-info">Schedule</button>
</p>
</section>
<?php include ('footer.php'); ?>
