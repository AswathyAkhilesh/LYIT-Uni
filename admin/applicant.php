<?php include ('header.php'); ?>
<?php include ('../includes/applicant.php'); ?>
<?php include ('../includes/course.php'); ?>


<section Class="container spad">

    
    <div class="panel panel-info" style = "padding-top: 50px">
        <div class="panel-heading">
            <h3 class="panel-title" style = "text-align: center">Applicant Information</h3>
        </div>

        <div class="panel-body">
            <div class="row">
            <div class="col-md-1 col-md-1 ">  </div>
                
                
            <div class=" col-md-9 col-lg-12 " style = "padding-top: 30px"> 
            <table class="table table-user-information">
                <thead>
                    <h4 style = "padding-left: 10px">Personal Details<h4>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo $db_firstName ?></td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td><?php echo $db_lastName ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $db_dob ?></td>
                    </tr>
                    <tr>
                        <td>Identify as:</td>
                        <td><?php echo $db_gender ?></td>
                    </tr>
                    <tr>
                        <td>Address 1:</td>
                        <td><?php echo $db_address ?></td>
                    </tr>
                    <tr>
                        <td>County:</td>
                        <td><?php echo $db_county ?></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><?php echo $db_country ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $db_email ?></td>
                    </tr>
                        <td>Phone Number:</td>
                        <td><?php echo $db_phoneNumber ?></td>     
                    </tr>
                     
                    </tbody>
                    </table>

                
                

					<a href="applicantlist.php" class="site-btn text-white">Schedule Interview</a>

            

        </section>

<script>


</script>

<?php include ('footer.php'); ?>