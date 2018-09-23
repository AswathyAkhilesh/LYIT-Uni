<?php include ('includes/header.php'); ?>
<?php include ('includes/profile.php'); ?>
<!-- Header End - Do Not Remove -->
<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

form { margin: 25px 0 0 29px; width: 550px; padding-bottom: 30px; padding-left: 0px;}

fieldset { margin: 0 0 22px 0; border: 1px solid #FFFFFF; padding: 12px 17px; background-color: #FFFFFF; }
legend { font-size: 1.1em; background-color: #f6783a;; color: #FFFFFF; font-weight: bold; padding: 4px 8px; width:450px }

label.float { float: left; display: block; width: 250px; margin: 4px 0 0 0; clear: left;}
label.gender { float: left; display: block; width: 440px; margin: 4px 0 0 0; clear: left;}
label { display: block; width: auto; margin: 0 0 10px 0; margin-bottom: 12px;}
label.spam-protection { display: inline; width: auto; margin: 0; }

input.inp-text, textarea, input.choose, input.answer { border: 1px solid #909090; padding: 6px; padding-top: 12px;}
input.inp-text { width: 450px; margin: 0 0 8px 0;  margin-bottom: 15px;}
textarea { width: 400px; height: 150px; margin: 0 0 12px 0; display: block; }

.gender{padding-top: 12px; padding-bottom: 12px; margin-bottom: 15px;}

.datafile{color: #FFFFFF;}

input[type = "submit"]{
    border: none;
    outline: none;
    height:30px;
	width: 80px;
    background:#f6783a;;
    color: #fff;
    font-size: 18px;
    border-radius: 5px; margin: 0 0 0 23px;
}

input[type = "button"]{
    border: none;
    outline: none;
    height:30px;
	width: 80px;
    background: #f6783a;;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
}

input.choose { margin: 0 2px 0 0; }
input.answer { width: 40px; margin: 0 0 0 10px; }


form br { display: none; }

/* ==================== Form style sheet END ==================== */

</style>


</head>


<body>
<section class="container">
	<!--  ==================== Added By Liam ==================== -->
	<div class="container spad"><h2>
		Welcome: <?php echo $db_firstName ?> 
		<?php echo $db_lastName ?> 
		<small><?php echo $_SESSION['db_userRole'] ?></small>
	</h2></div>
	<!--  ==================== End Added By Liam ==================== -->

	<div class="row">
		<div class="col"><img class="card-img-top" src="img/person.jpg" alt="Card image cap"></div>
		<div class="col">
	

	<!--form action="file:///C:/Users/Roshni/Desktop/division-blue/validation.html" method="post"-->
	<form action="includes/profileupdate.php" method="post">

		<!-- ============================== Fieldset 2 ============================== -->
		<fieldset>
			<legend>Personal:</legend>
				<label for="First-Name" class="float"><strong>First Name:</strong></label><br />
				<input class="inp-text" name="input-first-name" id="input-first-name" type="text" value="<?php echo $db_firstName ?>" size="30" disabled /><br />
				<label for="middle-name" class="float"><strong>Middle Name:</strong></label><br />
				<input class="inp-text" name="input-Middle-name"  id="input-middle-name" type="text" value="<?php echo $db_middleName ?>" size="30" disabled />
				<label for="last-name" class="float"><strong>Last Name:</strong></label><br />
				<input class="inp-text" name="last-name"  id="last-name" type="text" value="<?php echo $db_lastName ?>" size="30" disabled  />
				<br>
				<div>
				<label for="Gender" class="gender"><strong>Primarly Identified as: &nbsp;</strong>  
				<input class="gender" type="radio"  <?php echo ($db_gender=='male')?'checked':'' ?> name="gender" value="male" disabled /> Male 
				<input class="gender" type="radio"  <?php echo ($db_gender=='female')?'checked':'' ?> name="gender" value="female" disabled /> Female 
				<input class="gender" type="radio"  <?php echo ($db_gender=='other')?'checked':'' ?> name="gender" value="other" disabled /> Prefer Not To Disclose
				</label> 
				</div>
				
				<label for="dob" class="float"><strong>Date of Birth:</strong></label><br />
				<input class="inp-text" name="dob" id="dob" type="date" value="<?php echo ($db_dob=='0000-00-00 00:00:00')? NULL : date('Y-m-d', strtotime($db_dob)) ?>" size="30" min="1950-01-01" max="2018-12-31" disabled />
				
				<label for="e-mail" class="float"><strong>E-Mail:</strong></label><br />
				<input class="inp-text" name="e-mail"  id="e-mail" type="text" size="30" value="<?php echo $db_email ?>" disabled />
				
				<label for="mobile-no" class="float"><strong>Mobile No:</strong></label><br />
				<input class="inp-text" name="mobile-no" id="mobile-no" type="number" max="0999999999" value="<?php echo $db_phoneNumber ?>" disabled  />
		</fieldset> 
		<!-- ============================== Fieldset 2 end ============================== -->


		<!-- ============================== Fieldset 3 ============================== -->
		<fieldset>
		<legend>Address:</legend>
			<label for="address1" class="float"><strong>Address Line 1</strong></label><br />
				<input class="inp-text" name="input-address1" id="input-address1" type="text" size="30" value="<?php echo $db_address ?>" disabled/><br />

				<!-- <label for="adrdess2" class="float"><strong>Address Line 2</strong></label><br />
				<input class="inp-text" name="input-adrdess2"  id="input-adrdess2" type="text" size="30"disabled  /> -->
				
				<!--<label for="adrdess3" class="float"><strong>Address Line 3</strong></label><br />
				<input class="inp-text" name="input-adrdess3"  id="input-adrdess3" type="text" size="30" disabled /> -->
				
				<label for="city" class="float"><strong>City:</strong></label><br />
				<input class="inp-text" name="input-city"  id="input-city" type="text" size="30" value="<?php echo $db_city ?>" disabled />
				
				<label for="Eir-code" class="float"><strong>Eir Code:</strong></label><br />
				<input class="inp-text" name="input-code"  id="input-code" type="text" size="30" value="<?php echo $db_eirCode ?>" disabled />
				
				<label for="county" class="float"><strong>County:</strong></label><br />
				<input class="inp-text" name="county"  id="county" type="text" size="30" value="<?php echo $db_county ?>" disabled />
				
				<label for="country" class="float"><strong>Country:</strong></label><br />
				<input class="inp-text" name="country"  id="country" type="text" size="30" value="<?php echo $db_country ?>" disabled />
				<label for="qualification" class="float"><strong>Highest Qualification Achieved</strong></label><br />
				<input class="inp-text" name="input-qualification"  id="input-qualification" type="text" size="30" value="<?php echo $db_highestQual ?>" disabled />
				<label for="experience" class="float"><strong>Work Experience if any</strong></label><br />
				<input class="inp-text" name="input-experience"  id="input-experience" type="text" size="30" value="<?php echo $db_workExp ?>" disabled  />
				
		</fieldset>
			
		<!--fieldset>
		<legend>Resume Upload:</legend>
				<label for="file-upload" class="float"><strong>Upload Resume:</strong></label><br />
				<input class= "datafile" type="file" name="datafile" id="datafile" size="55" accept= ".pdf, .doc, .docx" /> *can accept only pdf or .docs file
				
		</fieldset-->
		
		<!-- ============================== Fieldset 3 end ============================== -->
		<!--<p><input class="upload-button" type="upload-button" alt="UPLOAD" id="upload-button" name="UPLOAD" value="Upload" disabled /></p>-->
		
		<input class="edit-button" type="button" alt="edit-button" id="edit-button" name="edit-button" value="Edit" onclick="enableForEdit();"/>
		<input class="submit-button" type="submit" alt="SUBMIT" id="submit" name="update" value="Update" disabled />
		<!-- <input type="button" alt="test-button" id="test-button" name="test-button" value="TestEdit" onclick="kk1();"/> -->

		

		



	</form>

	<script type="text/javascript">
    function enableForEdit()
    {
		$('form input').removeAttr('disabled');		
		$('#edit-button').addAttr('disabled');
    }

</script>

		</div>
    </div>

</section>


<!-- Your Content End-->

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->
