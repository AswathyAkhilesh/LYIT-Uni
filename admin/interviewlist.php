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
<!--Begin HTML design--> 
<Section class="container spad">
<br>
<h2>Interview List</h2>
<p>The below grid contains the applicant list, to view an applicant select an applicant and click on the "view" button.</p>
<p>Time allocated for each interview is 20 min and a break time of  10 min is allocated between each interview.</p>
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
      <tr>
         <th></th>
         <th>Name</th>
         <th>Course Name</th>
         <th>Date</th>
         <th>Time</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td></td>
         <td>Aswathy</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>9.00 AM</td>
      </tr>
      <tr>
         <td></td>
         <td>Roshni</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>9.30 AM</td>
      </tr>
      <tr>
         <td></td>
         <td>Matthew</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>10.00 AM</td>
      </tr>
      <tr>
         <td></td>
         <td>Conor</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>10.30 AM</td>
      </tr>
      <tr>
         <td></td>
         <td>Liam</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>11.00 AM</td>
      </tr>
      <tr>
         <td></td>
         <td>Ruth</td>
         <td>Devops</td>
         <td>21 Aug</td>
         <td>11.30 AM</td>
      </tr>
   </tbody>
</table>
<p align="center">
   <button type="button" onclick="location.href='\interview.php';" class="btn btn-info">View</button>
</p>
</section>
<?php include ('footer.php'); ?>