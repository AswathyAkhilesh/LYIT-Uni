<?php include ('header.php'); ?>

<Section class="container spad">
    <div class="section-title text-center">
        <h3>Students List</h3>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">L Num</th>
            <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">Term</th>
            <th scope="col">Avereage Grade</th>
            <th scope="col">More Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Aswathy Surname</th>
                <td>Applied Computing</td>
                <td>One</td>
                <td>72</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Roshni Surname</th>
                <td>Applied Computing</td>
                <td>One</td>
                <td>64</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Matthew Surname</th>
                <td>Applied Computing</td>
                <td>One</td>
                <td>63</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Conor Surname</th>
                <td>Applied Computing</td>
                <td>Three</td>
                <td>76</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Liam Surname</th>
                <td>Applied Computing</td>
                <td>Seven</td>
                <td>58</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
            <tr>
                <th scope="row">L00112233</th>
                <th scope="row">Ruth Surname</th>
                <td>Applied Computing</td>
                <td>Five</td>
                <td>81</td>
                <td><button type="button" onclick="location.href='studentInfo.php';" class="btn btn-success">Student Info</button></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include ('footer.php'); ?>