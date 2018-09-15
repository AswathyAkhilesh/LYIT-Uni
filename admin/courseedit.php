<?php include ('header.php'); ?>
<?php include ('../includes/courseedit.php'); ?>
  <!--Third party scripts-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../js/nicEdit-latest.js" type="text/javascript"></script>
  
  <!--Initialising Text area Editor-->
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<!--Begin HTML design-->  
<div class="container spad">
  <br>
  <h2>Edit Course Details</h2>
  <p>The form below contains course details, modify as required and click on the "Update" button to save the details.</p>
  <form action="../includes/courseedit.php" method="post">
    <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
    <div class="form-group">
      <label for="textbox1"><b>Course Code:</b></label>
      <input type="text" class="form-control" id="textbox1" name="textbox1" value="<?php echo $db_coursecode ?>">
    </div>
    <div class="form-group">
      <label for="textbox2"><b>Course Name:</b></label>
      <input type="textbox2" class="form-control" id="textbox2" name="textbox2" value="<?php echo $db_coursename ?>">
    </div>
	<div class="form-group">
      <label for="comment1"><b>Course Details and Modules:</b></label>
      <textarea class="form-control" rows="5" id="comment1" name="comment1"><?php echo $db_coursedetails ?></textarea>
	</div>
	<div class="form-group">
      <label for="comment2"><b>Entry Requirements:</b></label>
      <textarea class="form-control" rows="5" id="comment2" name="comment2"><?php echo $db_entryrequirements ?></textarea>
    </div>
	<div class="form-group">
      <label for="comment3"><b>Course Fees:</b></label>
      <textarea class="form-control" rows="5" id="comment3" name="comment3" tyle="padding-bottom:15px"><?php echo $db_coursefees ?></textarea>
	  </div>
	<div class="form-group">
      <label for="comment4"><b>Jobs:</b></label>
      <textarea class="form-control" rows="5" id="comment4" name="comment4"><?php echo $db_jobs ?></textarea>
    </div>
	<div class="form-group">
      <label for="comment5"><b>Banner:</b></label>
      <textarea class="form-control" rows="5" id="comment5" name="comment5"><?php echo $db_bannerdescription ?></textarea>
    </div>
	<div>
	<h3>Key Informations</h3>
	<br>
	 <div class="form-group">
      <label for="textbox3"><b>Award:</b></label>
      <input type="textbox3" class="form-control" id="textbox3" name="textbox3" value="<?php echo $db_award ?>">
    </div>
	 <div class="form-group">
      <label for="textbox4"><b>Credit:</b></label>
      <input type="textbox4" class="form-control" id="textbox4" name="textbox4" value="<?php echo $db_credit ?>">
    </div>
	<div class="form-group">
      <label for="textbox5"><b>Duration:</b></label>
      <input type="textbox5" class="form-control" id="textbox5" name="textbox5" value="<?php echo $db_duration ?>">
    </div>
	<div class="form-group">
      <label for="textbox6"><b>Study Mode:</b></label>
      <input type="textbox6" class="form-control" id="textbox6" name="textbox6" value="<?php echo $db_studymode ?>">
    </div>
	<div class="form-group">
      <label for="textbox7"><b>Application Deadline:</b></label>
      <input type="textbox7" class="form-control" id="textbox7" name="textbox7" value="<?php echo $db_applicationdeadline ?>">
    </div>
	</div>
    <button type="submit" name="update" class="site-btn text-white">Update</button>
	</form><br>
</div>
<?php include ('footer.php'); ?>
