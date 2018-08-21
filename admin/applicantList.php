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
            <th scope="col">Interview Date</th>
            <th scope="col">Interview Time</th>
            <th scope="col">More Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Aswathy</th>
                <td>Applied Computing</td>
                <td>Not Set</td>
                <td>Not Set</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Roshni</th>
                <td>Applied Computing</td>
                <td>Not Set</td>
                <td>Not Set</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Matthew</th>
                <td>Applied Computing</td>
                <td>7 September 2018</td>
                <td>9:00 AM</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Conor</th>
                <td>Applied Computing</td>
                <td>Not Set</td>
                <td>Not Set</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Liam</th>
                <td>Applied Computing</td>
                <td>7 September 2018</td>
                <td>9:30 AM</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
            <tr>
                <th scope="row">Ruth</th>
                <td>Applied Computing</td>
                <td>7 September 2018</td>
                <td>10:30 AM</td>
                <td><button type="button" onclick="location.href='applicant.php';" class="btn btn-success">View Detail</button></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include ('footer.php'); ?>