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
  <!--static image-->


  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">GPCET - T & P</h1>
      <p class="lead fw-normal">Your Bright Future is Our Mission</p>
      <a class="btn btn-outline-secondary"  href=" student_reg.html"  >
        <h3>Added students are</h3>
        <?php error_reporting(0); ?>
        <?php 
    if (isset($_POST['submit'])) {
        $fn = $_FILES['csv']['name']; //name, tmp_name, size, type 
        move_uploaded_file($_FILES['csv']['tmp_name'], $fn);
        $fp = fopen($fn, "r");
        $con= mysqli_connect("localhost", "root", "", "basic") or die("Connection Error");
        $arr = fgetcsv ($fp);
       
        for ($arr = fgetcsv($fp); !feof($fp); $arr  = fgetcsv($fp)) { 
            $insert = "insert into nin values ( '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]','$arr[6]','$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]','$arr[12]','$arr[13]','$arr[14]')";
            mysqli_query($con, $insert) or die("Insertion Error");
        }

    //$companyreg = $_REQUEST['companyreg'];
		//$date =  $_REQUEST['date'];
    //$sql = "INSERT INTO company VALUES ('$companyreg','$date')";
    

    }
    ?>
     <?php error_reporting(0);?>
    <?php
    $db= $con;
    $tableName="nin";
    $columns= ['id', 'roll','name','branch','percentage','backlogs'];
    $fetchData = fetch_data($db, $tableName, $columns);
    
    function fetch_data($db, $tableName, $columns){
     if(empty($db)){
      $msg= "Database connection error";
     }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
     }elseif(empty($tableName)){
       $msg= "Table Name is empty";
    }else{
    
    $columnName = implode(", ", $columns);
    $query = "SELECT DISTINCT ".$columnName." FROM $tableName"." ORDER BY id";
    $result = $db->query($query);
    
    if($result== true){ 
     if ($result->num_rows > 0) {
       $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg= $row;
     } else {
       $msg= "No Data Found"; 
     }
    }else{
      $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
    ?>

      
       
        <table border="1">
           <thead>
    
             <th>id</th>
             <th>Rollnumber</th>
             <th>StudentName</th>
             <th>branch</th>
             <th>percentage</th>
             <th>backlogs</th>

             
        </thead>
        <tbody>
      <?php error_reporting(0); ?>    
      <?php
         if(is_array($fetchData)){      
          $sn=1;
          foreach($fetchData as $data){
        ?>
          <tr>
        
          <td><?php echo $data['id']??''; ?></td>
          <td><?php echo $data['roll']??''; ?></td>
          <td><?php echo $data['name']??''; ?></td>
      
          <td><?php echo $data['branch']??''; ?></td>
          <td><?php echo $data['percentage']??''; ?></td>
          <td><?php echo $data['backlogs']??''; ?></td>

          
         </tr>
         <?php
          $sn++;}}else{ ?>
          <tr>
            <td colspan="8">
        <?php 
        echo $fetchData; ?>
      </td>
        <tr>
        <?php
          }
        
        ?>
        </tbody>
         </table>
       </div>
    </div>
    </div>
    </div>

        
        Back</a>

    </div>
  </div>

      
  

  
  <!--3 images section-->
  <section>
    <div class="container my-3">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/action.jpg">
          <div class="card-body">
            <p class="card-text">ACTION</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/communication.jpg">
          <div class="card-body">
            <p class="card-text">COMMUNICATE</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/technical.jfif">
          <div class="card-body">
            <p class="card-text">TECHNICAL KNOWLEDGE</p>
          </div>
        </div>
      </div>
    </section>

    
  
</main>

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
        <li><a class="link-secondary" href="student_reg.html">Student registration</a></li>
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