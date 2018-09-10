<!-- Header -->
<?php include ('includes/header.php'); ?>
<!-- Header End - Do Not Remove -->
<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

form { margin: 25px 0 0 29px; width: 750px; padding-bottom: 30px; padding-left: 200px;}

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

	<form action="file:///C:/Users/Roshni/Desktop/division-blue/validation.html" method="post">


		<!-- ============================== Fieldset 2 ============================== -->
		<fieldset>
			<legend>Personal:</legend>
				<label for="First-Name" class="float"><strong>First Name:</strong></label><br />
				<input class="inp-text" name="input-first-name" id="input-first-name" type="text" size="30" disabled /><br />

				<label for="middle-name" class="float"><strong>Middle Name:</strong></label><br />
				<input class="inp-text" name="input-Middle-name"  id="input-middle-name" type="text" size="30"disabled  />
				
				<label for="last-name" class="float"><strong>Last Name:</strong></label><br />
				<input class="inp-text" name="last-name"  id="last-name" type="text" size="30"disabled  />
				<br>
				<div>
				<label for="Gender" class="gender"><strong>Primarly Identified as: &nbsp;</strong>  
				<input class="gender" type="radio" name="gender" value="male" / > Male 
				<input class="gender" type="radio" name="gender" value="female" /> Female 
				<input class="gender" type="radio" name="gender" value="other" /> Prefer Not To Disclose
				</label> 
				</div>
				
				
				<label for="dob" class="float"><strong>Date of Birth:</strong></label><br />
				<input class="inp-text" name="dob" id="dob" type="date" size="30" value="" min="1950-01-01" max="2018-12-31" disabled />
				<label for="e-mail" class="float"><strong>E-Mail:</strong></label><br />
				<input class="inp-text" name="e-mail"  id="e-mail" type="text" size="30" disabled />
				
				<label for="mobile-no" class="float"><strong>Mobile No:</strong></label><br />
				<input class="inp-text" name="mobile-no"  id="mobile-no" type="text" size="30" disabled  />
		</fieldset> 
		<!-- ============================== Fieldset 2 end ============================== -->


		<!-- ============================== Fieldset 3 ============================== -->
		<fieldset>
		<legend>Address:</legend>
			<label for="adrdess1" class="float"><strong>Address Line 1</strong></label><br />
				<input class="inp-text" name="input-adrdess1" id="input-adrdess1" type="text" size="30" disabled/><br />

				<label for="adrdess2" class="float"><strong>Address Line 2</strong></label><br />
				<input class="inp-text" name="input-adrdess2"  id="input-adrdess2" type="text" size="30"disabled  />
				
				<!--<label for="adrdess3" class="float"><strong>Address Line 3</strong></label><br />
				<input class="inp-text" name="input-adrdess3"  id="input-adrdess3" type="text" size="30" disabled /> -->
				
				<label for="city" class="float"><strong>City:</strong></label><br />
				<input class="inp-text" name="input-city"  id="input-city" type="text" size="30" disabled />
				
				<label for="Zip-code" class="float"><strong>Zip Code:</strong></label><br />
				<input class="inp-text" name="input-code"  id="input-code" type="text" size="30"disabled />
				
				<label for="county" class="float"><strong>County:</strong></label><br />
				<input class="inp-text" name="county"  id="county" type="text" size="30"disabled />
				
				<label for="country" class="float"><strong>Country:</strong></label><br />
				<input class="inp-text" name="country"  id="country" type="text" size="30" disabled />
				
				
		</fieldset>
			
		<fieldset>
		<legend>Resume Upload:</legend>
				<label for="file-upload" class="float"><strong>Upload Resume:</strong></label><br />
				<input class= "datafile" type="file" name="datafile" id="datafile" size="55" accept= ".pdf, .doc, .docx" /> *can accept only pdf or .docs file
				
		</fieldset>
		
		<!-- ============================== Fieldset 3 end ============================== -->
		<!--<p><input class="upload-button" type="upload-button" alt="UPLOAD" id="upload-button" name="UPLOAD" value="Upload" disabled /></p>-->
		
		<input class="edit-button" type="button" alt="edit-button" id="edit-button" name="edit-button" value="Edit" onclick="kk1()"/>
		<input class="submit-button" type="submit" alt="SUBMIT" id="submit" name="Submit" value="Update"  />
		

		

		

</script>

	</form>

	<script type="text/javascript">
    function kk1()
    {
        document.getElementById("input-first-name").disabled  = false;
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
		document.getElementById("edit-button").disabled  = true;
		
		
    }

</script>




<!-- Your Content End-->

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
<!-- Header End - Do Not Remove -->
