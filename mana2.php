
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Company Registration Page</title>
  </head>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="admin_home.css" rel="stylesheet">
  </head>
  <body>

<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between ">
    <a class="py-2 text-light" href="admin_home.html" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="nav-item nav-link text-light " href="admin_home.php">Home</a>
    <a class="nav-item dropdown nav-link dropdown-toggle text-light "href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
    <ul class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item text-dark" href="aca.php" >Academic_year Registration</a></li>
          <li><a class="dropdown-item text-dark" href="branch.php" >Branch Registration</a></li>
          
          <li><a class="dropdown-item text-dark" href="company_reg.html" >Company Registration</a></li>
          <li><a class="dropdown-item text-dark" href="ment.php" >Mentor Registration</a></li>
          <li><a class="dropdown-item text-dark" href="stu_register.html">Student Registration</a></li>
          <li><a class="dropdown-item text-dark" href="mana2.php">Mapping</a></li>
        


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

 <!-- <div class="container-fluid mx-3 justify-content-center">
    <h1 class="afsha mx-3 my-3">MAPPING</h1>
    <form method="GET" action="mana2.php">
 
   
    <div class="row  ">
        <div class="col col-12">
        <input type="text" class="form-control my-3" name="rollnumber" id="rollnumber" placeholder="rollno here">
    </div>
<div class="col col-12">
        <input type="text" name="stdname" class="form-control my-3" id="stdame" placeholder="your name">
    </div>
    <div class="col col-12 my-3">
       Branch <select id="" class="form-control " name="branch">
            <option value="CSE-AI">CSE-AI</option>
            <option value="CSE-IOT">CSE-IOT</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="Mech">Mech</option>
        </select>
    </div>
    
        
            <div class="col c-6 ">
        <input type="text" name="companyreg" class="form-control" id="company" placeholder="company name">
    </div>


</div> -->
  

<h2>Mapping</h2>
<br>
<br>


<?php
$conn = new mysqli('localhost', 'root','', 'basic');

echo "<form action='' method='post'>";
 echo "<div class='row'>";
 echo "<input type='date' name='date' class=' form-control col' id='Date' placeholder='Date of Registration'><button type='submit' class='btn btn-primary' value='Submit'>go</button>";

  error_reporting(0);
  echo nl2br('\n');
echo "</div>";

echo"</form>";


// Establish a connection to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//$conn = new mysqli('localhost', 'root','', 'basic');
$n=$_REQUEST['date'];
echo "<input type='date' name='yt' value='".$n."' style='display:none'>";
echo $n;
// Retrieve data from the table
$sql = "SELECT DISTINCT campanyreg FROM company where date='$n'";
$result = $conn->query($sql);
$sq = "SELECT DISTINCT branch FROM branch";
$resul = $conn->query($sq);
$ac= "SELECT DISTINCT year FROM year";
$res = $conn->query($ac);

// Populate the dropdown
echo "<form action='mana.php' method='post'>";
echo "<select name='nc' class='form-control'>";
echo "<option> choose the company </option>";
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['campanyreg'] . "'>" . $row['campanyreg'] . "</option>";
}
echo "</select>";
 echo nl2br("\n");
 echo nl2br("\n");



echo "<select name='ac' class ='form-control'>";
echo "<option> choose the academic_year </option>";
while ($row2 = $res->fetch_assoc()) {
    echo "<option value='" . $row2['year'] . "'>" . $row2['year'] . "</option>";
}
echo "</select>";

echo nl2br("\n");
echo nl2br("\n");

echo "<select name='branch' class ='form-control'>";
echo "<option> choose the branch </option>";
while ($row1 = $resul->fetch_assoc()) {
    echo "<option value='" . $row1['branch'] . "'>" . $row1['branch'] . "</option>";
}
echo "</select>";

echo nl2br("\n");
echo nl2br("\n");









echo "<button type='submit' value='submit'>Submit</button>";
echo "</form>";
?>
</form>


    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
          <small class="d-block mb-3 text-muted">&copy;2022</small>
        </div>
        <div class="col-6 col-md">
          <h5>Navigation</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="admin_home.html">Home</a></li>
            <li><a class="link-secondary" href="company_reg.html">Company registration</a></li>
            <li><a class="link-secondary" href="stu_register.html">Student registration</a></li>
            <li><a class="link-secondary" href="mana2.php">MAPPING</a></li>
            <li><a class="link-secondary" href="aca.php">Academic_Year</a></li>
            <li><a class="link-secondary" href="#">Reports</a></li>
            <li><a class="link-secondary" href="#">About us</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Resource name</a></li>
            <li><a class="link-secondary" href="#">Resource</a></li>
            <li><a class="link-secondary" href="#">Another resource</a></li>
            <li><a class="link-secondary" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Business</a></li>
            <li><a class="link-secondary" href="#">Education</a></li>
            <li><a class="link-secondary" href="#">Government</a></li>
            <li><a class="link-secondary" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Team</a></li>
            <li><a class="link-secondary" href="#">Locations</a></li>
            <li><a class="link-secondary" href="#">Privacy</a></li>
            <li><a class="link-secondary" href="#">Terms</a></li>
          </ul>
        </div>
      </div>


    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>