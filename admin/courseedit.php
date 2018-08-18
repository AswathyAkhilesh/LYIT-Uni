<?php include ('header.php'); ?>

  <!--Third party scripts-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  
  <!--Initialising Text area Editor-->
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<!--Begin HTML design-->  
<div class="container">
  <br>
  <h2>Edit Course Details</h2>
  <p>The form below contains course details, modify as required and click on the "Update" button to save the details.</p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="textbox1"><b>Course Code:</b></label>
      <input type="text" class="form-control" id="textbox1" name="textbox1" value="COOD1">
    </div>
    <div class="form-group">
      <label for="textbox2"><b>Course Name:</b></label>
      <input type="textbox2" class="form-control" id="textbox2" name="textbox2" value="Master of Science in DevOps">
    </div>
	<div class="form-group">
      <label for="comment1"><b>Course Details and Modules:</b></label>
      <textarea class="form-control" rows="5" id="comment" name="text"><br><br><b>Our Master of Science in Computing in DevOps is a one year, full-time or two year, part-time programme. DevOps is the practice of operations and development engineers participating together in the entire service lifestyle, from design through the development process to production support.
               DevOps is characterised by operations staff harnessing the same techniques as developers for their systems work. Topics the course covers include: DevOps Software Engineering, Project Management and Deployment Pipelines.</b><br><br> Proposed Module for this year are as Follows:-  <br><br> DevOps Software Engineering -	Mandatory<br><br>OO Programming for Server </textarea>
    </div>
	<div class="form-group">
      <label for="comment2"><b>Entry Requirements:</b></label>
      <textarea class="form-control" rows="5" id="comment2" name="text"><br>
               - Level 8 Honours Degree in Computing, or equivalent, second class honours (2.2), or Higher Diploma in Computing (Conversion Course into Computing).<br> 
               -If you do not have an honours degree but have relevant experience you may also be eligible to apply via Recognition of Prior Learning (RPL).  
               <br><br><table class="cao-table">
                  <tbody>
                     <tr>
                        <th>Number of Places</th>
                        <th>15</th>
                     </tr>
                  </tbody></textarea>
    </div>
	<div class="form-group">
      <label for="comment3"><b>Course Fees:</b></label>
      <textarea class="form-control" rows="5" id="comment3" name="text" tyle="padding-bottom:15px"><br>The EU and NON EU citizens have got different fee structure
	  <div style="color:#22206f;font-size:15px;padding-bottom:10px">EU Fees: €5,000.00</div>
         <div style="color:#22206f;font-size:15px">Non-EU Fees: €9,000.00</div><br>	  
	  </textarea>
	  </div>
	<div class="form-group">
      <label for="comment4"><b>Jobs:</b></label>
      <textarea class="form-control" rows="5" id="comment4" name="text"><div><br>Career Pathways</div> <p>The main employers are:</p>
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
	  </textarea>
    </div>
	<div>
	<h3>Key Informations</h3>
	  <br>
	 <div class="form-group">
      <label for="textbox3"><b>Award:</b></label>
      <input type="textbox3" class="form-control" id="textbox3" name="textbox3" value="Master">
    </div>
	 <div class="form-group">
      <label for="textbox4"><b>Credit:</b></label>
      <input type="textbox4" class="form-control" id="textbox4" name="textbox4" value="30">
    </div>
	<div class="form-group">
      <label for="textbox5"><b>Duration:</b></label>
      <input type="textbox5" class="form-control" id="textbox5" name="textbox5" value="1 and 2 year">
    </div>
	<div class="form-group">
      <label for="textbox6"><b>Study Mode:</b></label>
      <input type="textbox6" class="form-control" id="textbox6" name="textbox6" value="Full-time and Part-time">
    </div>
	<div class="form-group">
      <label for="textbox7"><b>Application Deadline:</b></label>
      <input type="textbox7" class="form-control" id="textbox7" name="textbox7" value="August 24">
    </div>
	</div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form><br>
</div>
<?php include ('footer.php'); ?>
