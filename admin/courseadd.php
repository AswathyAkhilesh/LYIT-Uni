<?php include ('header.php'); ?>

  <!--Third party scripts-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../js/nicEdit-latest.js" type="text/javascript"></script>
  
  <!--Initialising Text area Editor-->
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<!--Begin HTML design-->  
<div class="container spad">
  <br>
  <h2>Add New Course </h2>
  <p>To add a new course, please enter the following details and click on the "Save" button </p>
  <form action="../includes/courseadd.php" method="post">
    <div class="form-group">
      <label for="textbox1"><b>Course Code:</b></label>
      <input type="text" class="form-control" id="textbox1" name="textbox1" >
    </div>
    <div class="form-group">
      <label for="textbox2"><b>Course Name:</b></label>
      <input type="textbox2" class="form-control" id="textbox2" name="textbox2">
    </div>
	<div class="form-group">
      <label for="comment1"><b>Course Details and Modules:</b></label>
      <textarea class="form-control" rows="5" id="comment1" name="comment1"></textarea>
    </div>
	<div class="form-group">
      <label for="comment2"><b>Entry Requirements:</b></label>
      <textarea class="form-control" rows="5" id="comment2" name="comment2"></textarea>
    </div>
	<div class="form-group">
      <label for="comment3"><b>Course Fees:</b></label>
      <textarea class="form-control" rows="5" id="comment3" name="comment3"></textarea>
    </div>
	<div class="form-group">
      <label for="comment4"><b>Jobs:</b></label>
      <textarea class="form-control" rows="5" id="comment4" name="comment4"></textarea>
    </div>
	<div class="form-group">
      <label for="comment5"><b>Banner:</b></label>
      <textarea class="form-control" rows="5" id="comment5" name="comment5"></textarea>
    </div>
	<div>
	<h3>Key Informations</h3>
	<br>
	 <div class="form-group">
      <label for="textbox3"><b>Award:</b></label>
      <input type="textbox3" class="form-control" id="textbox3" name="textbox3">
    </div>
	 <div class="form-group">
      <label for="textbox4"><b>Credit:</b></label>
      <input type="textbox4" class="form-control" id="textbox4" name="textbox4">
    </div>
	<div class="form-group">
      <label for="textbox5"><b>Duration:</b></label>
      <input type="textbox5" class="form-control" id="textbox5" name="textbox5">
    </div>
	<div class="form-group">
      <label for="textbox6"><b>Study Mode:</b></label>
      <input type="textbox6" class="form-control" id="textbox6" name="textbox6">
    </div>
	<div class="form-group">
      <label for="textbox7"><b>Application Deadline:</b></label>
      <input type="textbox7" class="form-control" id="textbox7" name="textbox7">
    </div>
	</div>
    <button type="submit" name="save" class="site-btn text-white">Save</button>
  </form><br>
</div>
<?php include ('footer.php'); ?>


