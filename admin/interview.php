<!-- Header -->
<?php include ('header.php'); ?>
<?php include ('../includes/interview.php'); ?>
<!-- Your Content Start-->
<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

form { margin: 25px 0 0 29px; width: 800px; padding-bottom: 30px; padding-left: 200px;}

fieldset { margin: 0 0 22px 0; border: 1px solid #FFFFFF; padding: 12px 17px; background-color: #FFFFFF; }
legend { font-size: 1.1em; background-color: #f6783a; color: #FFFFFF; font-weight: bold; padding: 4px 8px; width:450px;}

label.float { float: left; display: block; width: 250px; margin: 4px 0 0 0; clear: left;}
label { display: block; width: auto; margin: 0 0 10px 0; margin-bottom: 12px;}
label.spam-protection { display: inline; width: auto; margin: 0; }

label.gender { float: left; display: block; width: 440px; margin: 4px 0 0 0; clear: left;}

input.inp-text, textarea, input.choose, input.answer { border: 1px solid #909090; padding: 6px; padding-top: 12px;}
input.inp-text { width: 450px; margin: 0 0 8px 0;  margin-bottom: 15px;}
textarea { width: 450px; height: 150px; margin: 0 0 12px 0; display: block; }

label.int-date{float: left; display: block; width: auto; margin: 0 0 0 0; clear: left; padding: 6px; padding-top: 12px;}
label.int-time{float: left; display: block; width: auto; margin: 0 0 0 0; clear: left; padding: 6px; padding-top: 12px;}


input.inp-date { width: 150px; margin: 0 0 0 0;  margin-bottom: 15px; padding: 6px; padding-top: 12px;}
input.inp-time { width: 130px; margin: 0 0 0 0;  margin-bottom: 15px; padding: 6px; padding-top: 12px;}

input[type = "submit"]{
    border: none;
    outline: none;
    height:30px;
	width: 80px;
    background:#f6783a;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
}

input.save-button{
    border: none;
    outline: none;
    height:30px;
	width: 80px;
    background: #f6783a;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
}

.gender{padding-top: 12px; padding-bottom: 12px; margin-bottom: 15px;}

.datafile{color: #FFFFFF;}

input.choose { margin: 0 2px 0 0; }
input.answer { width: 40px; margin: 0 0 0 10px; }
input.submit-button { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; display: block; margin: 23px 0 0 0; }

form br { display: none; }

/* ==================== Form style sheet END ==================== */

</style>


</head>


<body>
<section class="container spad">
	<form action="file:///C:/Users/Roshni/Desktop/division-blue/validation.html" method="post">


		<!-- ============================== Fieldset 2 ============================== -->
		
		<fieldset>
		<legend>Interview:</legend>
				<label for="int-date" class="int-date"><strong>Interview Date & Time</strong></label>
				<input class="inp-date" name="int-date" id="int-date" type="date"  value="<?php echo date('Y-m-d', strtotime($db_date)) ?>"  size="30" />

				<!--<label for="int-time" class="int-time"><strong>Time</strong></label>-->
				<input class="inp-time" name="int-time" id="int-time" type="text"  value="<?php echo $db_time ?>" size="30" />
				
				<label for="course" class="float"><strong>Course Selected</strong></label><br />
				<input class="inp-text" name="input-course" id="input-course" type="text"  value="<?php echo $db_courseName ?>"  size="30" /><br />
				
				
		</fieldset>
		
		<fieldset>
			<legend>Candidate Personal info:</legend>
				<label for="First-Name" class="float"><strong>First Name:</strong></label><br />
				<input class="inp-text" name="input-first-name" id="input-first-name" type="text" value="<?php echo $db_firstName ?>" size="30" disabled /><br />

				<label for="middle-name" class="float"><strong>Middle Name:</strong></label><br />
				<input class="inp-text" name="input-Middle-name"  id="input-middle-name" type="text" size="30" value="<?php echo $db_middleName ?>" size="30" disabled />  
				
				<label for="last-name" class="float"><strong>Last Name:</strong></label><br />
				<input class="inp-text" name="last-name"  id="last-name" type="text" value="<?php echo $db_lastName ?>" size="30" disabled  />
				
				<div>
				<label for="Gender" class="gender"><strong>Primarly Identified as: &nbsp;</strong>  
				<input class="gender" type="radio"  <?php echo ($db_gender=='male')?'checked':'' ?> name="gender" value="male" disabled /> Male 
				<input class="gender" type="radio"  <?php echo ($db_gender=='female')?'checked':'' ?> name="gender" value="female" disabled /> Female 
				<input class="gender" type="radio"  <?php echo ($db_gender=='other')?'checked':'' ?> name="gender" value="other" disabled /> Prefer Not To Disclose
				</label> 
				</div>
				
				
				<label for="dob" class="float"><strong>Date of Birth:</strong></label><br />
				<input class="inp-text" name="dob" id="dob" type="date" value="<?php echo date('Y-m-d', strtotime($db_dob)) ?>" size="30" min="1950-01-01" max="2018-12-31" disabled />
				<label for="e-mail" class="float"><strong>E-Mail:</strong></label><br />
				<input class="inp-text" name="e-mail"  id="e-mail" type="text" size="30" value="<?php echo $db_email ?>" disabled />
				
				<label for="mobile-no" class="float"><strong>Mobile No:</strong></label><br />
				<input class="inp-text" name="mobile-no" id="mobile-no" type="number" max="0999999999" value="<?php echo $db_phoneNumber ?>" disabled  />
				
				<label for="adrdess1" class="float"><strong>Address Line </strong></label><br />
				<input class="inp-text" name="input-address1" id="input-address1" type="text" size="30" value="<?php echo $db_address ?>" disabled/><br />

				<!--label for="adrdess2" class="float"><strong>Address Line 2</strong></label><br />
				<input class="inp-text" name="input-adrdess2"  id="input-adrdess2" type="text" size="30"  />-->
				
				<!--<label for="adrdess3" class="float"><strong>Address Line 3</strong></label><br />
				<input class="inp-text" name="input-adrdess3"  id="input-adrdess3" type="text" size="30" disabled /> -->
				
				<label for="city" class="float"><strong>City:</strong></label><br />
				<input class="inp-text" name="input-city"  id="input-city" type="text" size="30" value="<?php echo $db_city ?>" disabled />
				
				<label for="Zip-code" class="float"><strong>Zip Code:</strong></label><br />
				<input class="inp-text" name="input-code"  id="input-code" type="text" size="30" value="<?php echo $db_eirCode ?>" disabled />
				
				<label for="county" class="float"><strong>County:</strong></label><br />
				<input class="inp-text" name="county"  id="county" type="text" size="30" value="<?php echo $db_county ?>" disabled />
				
				<label for="country" class="float"><strong>Country:</strong></label><br />
				<input class="inp-text" name="country"  id="country" type="text" size="30" value="<?php echo $db_country ?>" disabled />
		</fieldset> 
		<!-- ============================== Fieldset 2 end ============================== -->


		<!-- ============================== Fieldset 3 ============================== -->
		<fieldset>
		<legend>Qualifications & Experience:</legend>
				<!--<label for="course" class="float"><strong>Course Selected</strong></label><br />
				<input class="inp-text" name="input-course" id="input-course" type="text" size="30" /><br /> -->

				<label for="qualification" class="float"><strong>Highest Qualification Achieved</strong></label><br />
				<input class="inp-text" name="input-qualification"  id="input-qualification" type="text" size="30" value="<?php echo $db_highestQual ?>" disabled />
				
				<label for="experience" class="float"><strong>Work Experience if any</strong></label><br />
				<input class="inp-text" name="input-experience"  id="input-experience" type="text" size="30" value="<?php echo $db_workExp ?>" disabled  />
				
				
		</fieldset>
		
		<!--fieldset>
			<legend>Interview Feedback</legend>
			<textarea name="comments" id="comments" cols="30" rows="5" title="Note or message"></textarea><br />
		</fieldset-->
			
		
		<!-- ============================== Fieldset 3 end ============================== -->
		<!--<p><input class="upload-button" type="upload-button" alt="UPLOAD" id="upload-button" name="UPLOAD" value="Upload" disabled /></p>-->
		
		<!--input class="save-button" type="button" alt="save-button" id="save-button" name="save-button" value="Save" onclick="kk1()"/-->
		<input class="accept-button" type="submit" alt="SUBMIT" id="submit-accept" name="Submit" value="Accept" onclick="javascript:alert('An email has been sent to the applicant')" />
		<input class="decline-button" type="submit" alt="SUBMIT" id="submit-decline" name="Submit" value="Decline" onclick="javascript:alert('Sorry try again')"   />
		

		

		

</script>

	</form>
</section>
	<script type="text/javascript">
    function kk1()
    {
        /*document.getElementById("input-first-name").disabled  = false;
		document.getElementById("input-middle-name").disabled  = false;
		document.getElementById("last-name").disabled  = false;
		document.getElementById("dob").disabled  = false;
		document.getElementById("input-adrdess1").disabled  = false;
		document.getElementById("input-adrdess2").disabled  = false;
		//document.getElementById("input-adrdess3").disabled  = false;
		document.getElementById("input-city").disabled  = false;
		document.getElementById("county").disabled  = false;
		document.getElementById("country").disabled  = false;
		document.getElementById("e-mail").disabled  = false;
		document.getElementById("mobile-no").disabled  = false;
		document.getElementById("input-code").disabled  = false;
		//document.getElementById("upload-button").disabled=false
		document.getElementById("submit").disabled  = false;
		document.getElementById("datafile").disabled  = false;
		document.getElementById("edit-button").disabled  = true;*/
		
		
    }
    
</script>
<?php include ('footer.php'); ?>