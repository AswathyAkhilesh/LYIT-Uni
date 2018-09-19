<?php include ('header.php'); ?>
<?php include ('../includes/applicant.php'); ?>
<?php include ('../includes/course.php'); ?>
<?php include ('../includes/profile.php'); ?>


<section Class="container spad">

    
    <div class="panel panel-info" style = "padding-top: 50px">
        <div class="panel-heading">
            <h3 class="panel-title" style = "text-align: center">Applicant Information</h3>
        </div>

        <div class="panel-body">
            <div class="row">
            <div class="col-md-1 col-md-1 ">  </div>
                
            <form action="../includes/scheduleinterview.php" method="post"> 

            <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
            <input type="hidden" name="coursename" id="coursename" value="<?php echo $db_coursename ?>" />
            <input type="hidden" name="coursecode" id="coursecode" value="<?php echo $db_coursecode ?>" />

            <div class=" col-md-9 col-lg-12 " style = "padding-top: 30px"> 
            <table class="table table-user-information">
                <thead>
                    <h4 style = "padding-left: 10px">Personal Details<h4>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name:</td>
                        <td><input class="inp-text" name="input-first-name" id="input-first-name" type="text" value="<?php echo $db_firstName ?>" size="30" disabled/></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input class="inp-text" name="last-name"  id="last-name" type="text" value="<?php echo $db_lastName ?>" size="30" disabled/></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input class="inp-text" name="dob" id="dob" type="date" value="<?php echo date('Y-m-d', strtotime($db_dob)) ?>" size="30" min="1950-01-01" max="2018-12-31" disabled/></td>
                    </tr>
                    <tr>
                        <td>Identify as:</td>
                        <td><input class="inp-text" name="gender"  id="gender" type="text" value="<?php echo $db_gender ?>" size="30" disabled/></td>
                    </tr>
                    <tr>
                        <td>Address 1:</td>
                        <td><input class="inp-text" name="input-address1" id="input-address1" type="text" size="30" value="<?php echo $db_address ?>" disabled /></td>
                    </tr>
                    <tr>
                        <td>County:</td>
                        <td><input class="inp-text" name="county"  id="county" type="text" size="30" value="<?php echo $db_county ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><input class="inp-text" name="country"  id="country" type="text" size="30" value="<?php echo $db_country ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input class="inp-text" name="e-mail"  id="e-mail" type="text" size="30" value="<?php echo $db_email ?>" disabled/></td>
                    </tr>
                        <td>Phone Number:</td>
                        <td><input class="inp-text" name="mobile-no" id="mobile-no" type="number" max="0999999999" value="<?php echo $db_phoneNumber ?>" disabled/></td>     
                    </tr>
                     
                    </tbody>
                    </table>

                
                

					<input class="submit-button" type="submit" id="submit" name="submit" value="Schedule Interview" />
            </form>
            

        </section>

<script>


</script>

<?php include ('footer.php'); ?>