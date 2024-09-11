<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
        
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between ">
    <a class="py-2 text-light" href="admin_home.html" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="nav-item nav-link text-light " href="admin_home.html">Home</a>
    <a class="nav-item dropdown nav-link dropdown-toggle text-light "href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
    <ul class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item text-dark" href="company_reg.html" >Company Registration</a></li>
      <li><a class="dropdown-item text-dark" href="student_reg.html">Student Registration</a></li>
    </ul>
    <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item text-dark" href="statistics.html">Statistics</a></li>
      <li><a class="dropdown-item text-dark" href="reg_companies_reports.html">Registered Companies</a></li>
      <li><a class="dropdown-item text-dark" href="branch_wise_reports.html">Branchwise Reports</a></li>
      <li><a class="dropdown-item text-dark" href="individual_report.html">Individual Reports</a></li>
    </ul>
    <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>

    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item  text-dark" href="index2.php">Round1</a></li>
      <li><a class="dropdown-item text-dark" href="index3.php">Round2</a></li>
      <li><a class="dropdown-item text-dark" href="index4.php">Round3</a></li>
      <li><a class="dropdown-item text-dark" href="index5.php">Round4</a></li>
      <li><a class="dropdown-item text-dark" href="index6.php">Round5</a></li>
      <li><a class="dropdown-item text-dark" href="index7.php">Round6</a></li>
      <li><a class="dropdown-item text-dark" href="index8.php">Final Selected</a></li>

    </ul>
    <a class="nav-item nav-link text-light" href="about_us.html">About Us</a>
    <a class="nav-item nav-link text-light" href="index.html">Sign Out</a>
  </nav>
</header>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> Search box - Company TCS </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="TCS">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>rollnumber</th>
                                    <th>name</th>
                                    <th>branch</th>
                                    <th>company regestered</th>
                                    <th>date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","basic");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM brands WHERE CONCAT(companyreg,rollnumber,branch,stdname) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['rollnumber']; ?></td>
                                                    <td><?= $items['stdname']; ?></td>
                                                    <td><?= $items['branch']; ?></td>
                                                    <td><?= $items['companyreg']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="6">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>



<?php

$con = mysqli_connect("localhost","root","","basic");
$records = mysqli_query($con,"select * from brands where companyreg='tcs'"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['rollnumber']; ?></td>
    <td><?php echo $data['stdname']; ?></td>
    <td><?php echo $data['branch']; ?></td>
    <td><?php echo $data['companyreg']; ?></td>
    <td><?php echo $data['date']; ?></td>
   
  </tr>	
<?php
}
?>
</table>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>