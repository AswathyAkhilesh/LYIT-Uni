<?php include ('header.php'); ?>

<Section class="container spad">
    <div class="section-title text-center">
        <h3>Applicants List</h3>
        <p>Let students be creative and make a difference.</p>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">More Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Aswathy</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php?=<?php echo $db_userID ?>';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Roshni</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Matthew</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Conor</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Liam</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Ruth</th>
                <td>Applied Computing</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include ('footer.php'); ?>