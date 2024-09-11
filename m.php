<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>ADMIN HOME PAGE</title>
  </head>

    <style>
        .bg-1 { 
    background-color:  #212020; /* Green */
    color: #ffffff;
  }
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
    
<body>
    <center>
    
        
  
      <?php error_reporting(0);?>
       <?php
        $conn = mysqli_connect("localhost", "root","", "basic");
          
      
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
       
        $companyreg = $_REQUEST['companyreg'];
		    $date =  $_REQUEST['date'];
        $package=$_REQUEST['package'];
      
	
        
   
// insert data into database
// foreach ($names as  $name) {
// foreach ($names as  $name) {
  // 
  // $sql = "INSERT INTO branch  VALUES ('$id','$name')";
  // $g=mysqli_query($conn, $sql);
// }
		
		
   $sql = "INSERT INTO campany  VALUES ('$companyreg','$date','$package')";
    if(mysqli_query($conn, $sql))
    {
			echo "success";
		} else
    {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
	}
		
		// Close connection





    