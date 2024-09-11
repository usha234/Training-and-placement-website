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
    background-color: #212020;
    /* Green */
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
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
          <title>GPCET</title>
          <circle cx="12" cy="12" r="10" />
          <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </svg>
      </a>
      <a class="nav-item nav-link text-light " href="admin_home.php">Home</a>
      <a class="nav-item dropdown nav-link dropdown-toggle text-light " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
      <ul class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item text-dark" href="company_reg.html">Company Registration</a></li>
        <li><a class="dropdown-item text-dark" href="student_reg.html">Student Registration</a></li>
      </ul>
      <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item text-dark" href="statistics.html">Statistics</a></li>
        <li><a class="dropdown-item text-dark" href="reg_companies_reports.html">Registered Companies</a></li>
        <li><a class="dropdown-item text-dark" href="branch_wise_reports.html">Branchwise Reports</a></li>
        <li><a class="dropdown-item text-dark" href="individual_report.html">Individual Reports</a></li>
      </ul>
      <!-- <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
    
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item  text-dark" href="index2.php">Round1</a></li>
          <li><a class="dropdown-item text-dark" href="index3.php">Round2</a></li>
          <li><a class="dropdown-item text-dark" href="index4.php">Round3</a></li>
          <li><a class="dropdown-item text-dark" href="index5.php">Round4</a></li>
          <li><a class="dropdown-item text-dark" href="index6.php">Round5</a></li>
          <li><a class="dropdown-item text-dark" href="index7.php">Round6</a></li>
          <li><a class="dropdown-item text-dark" href="index8.php">Final Selected</a></li>
    
        </ul> -->
      <a class="nav-item nav-link text-light" href="about_us.html">About Us</a>
      <a class="nav-item nav-link text-light" href="index.html">Sign Out</a>
    </nav>
  </header>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>LANDING HOME PAGE</title>
  </head>

  <style>
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    .jumbotron {
      background-color: #212020;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
    }

    .container-fluid {
      padding: 60px 50px;
    }

    .bg-1 {
      background-color: #212020;
      /* Green */
      color: #ffffff;
    }

    .bg-grey {
      background-color: #f6f6f6;
    }

    .logo-small {
      color: #212020;
      font-size: 50px;
    }

    .logo {
      color: #212020;
      font-size: 200px;
    }

    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }

    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #212020;
    }

    .carousel-indicators li {
      border-color: #212020;
    }

    .carousel-indicators li.active {
      background-color: #212020;
    }

    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    .panel {
      border: 1px solid #212020;
      border-radius: 0 !important;
      transition: box-shadow 0.5s;
    }

    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
    }

    .panel-footer .btn:hover {
      border: 1px solid #212020;
      background-color: #fff !important;
      color: #212020;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #212020 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }

    .panel-footer {
      background-color: white !important;
    }

    .panel-footer h3 {
      font-size: 32px;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #212020;
      color: #fff;
    }

    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #212020;
    }

    .slideanim {
      visibility: hidden;
    }

    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }

    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }

    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }

      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
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

    section {
      margin-top: 20px;
      /* increase the distance from the nav bar */
      display: flex;
      justify-content: center;
      /* center the images horizontally */
    }

    .col {
      margin-left: 20px;
      /* increase the distance between the images */
      margin-right: 20px;
      /* increase the distance between the images */
    }
  </style>


  <div class="text-center">
    <br>
    <!-- 
  <br>
  
  <button type="button" class="btn btn-dark btn-lg mr-2  " ><a href="cse_dept_selectr1.php" class="text-light">cse</a></button>
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="iot_dept_selectr1.php" class="text-light">cso</a></button>
  
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="ai_dept_selectr1.php" class="text-light">cai</a></button>
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="ece_dept_selectr1.php" class="text-light">ece</a></button>
 
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="eee_dept_selectr1.php" class="text-light">eee</a></button>
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="me_dept_selectr1.php" class="text-light">me</a></button>
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="civil_dept_selectr1.php" class="text-light">civil</a></button>  
  <button type="button" class="btn btn-dark btn-lg mr-2"><a href="final_dept_selectr1.php" class="text-light">final</a></button>   -->

  </div>
  <center>
    <table>
      <tr>

        <td><img class="mb-4" src="pictures/gpcetlogo.jpeg" alt="" width="72" height="57"></td>
        <td><strong>
            <h2>G.Pullaiah College of Engineering and Technology</h2>
          </strong></td>
      </tr>
    </table>
    <center>
      <h4><strong>(Autonomous)</strong></h4>
    </center>



    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Registered Companies</h4> -->
    <?php
    
    error_reporting(0);

    // $host="localhost";//host name  
    // $username="root"; //database username  
    // $word="";//database word  
    // $db_name="basic";//database name  
    // $tbl_name="campany"; //table name  
    // $conn=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
    // $brandlist = $_POST['brandslist']; 

    // foreach($brandlist as $branditems)
    // {

    // $arraydata = explode("-",$branditems);
    // // print_r($arraydata);

    //  $query = "INSERT INTO nin (SNO,roll,name,ssc,inter,eamcet,branch,year,mento,percentage,backlogs,gender,stay,board,loca) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','$arraydata[6]','$arraydata[7]','$arraydata[8]','$arraydata[9]','$arraydata[10]','$arraydata[11]','$arraydata[12]','$arraydata[13]','$arraydata[14]')";
    //  $query_run = mysqli_query($con, $query); 
    // } 

    // $query = "SELECT companyreg from campany";
    // $result = mysqli_query($conn, $query);
    ?>

    <?php
    // if (mysqli_num_rows($result) > 0) {
    //   $sn=1;
    //   foreach($result as $arraydata) {
    // $arraydata = explode("-",$branditems);
    ?>
    <tr>




      <!-- <button type="button" class="btn btn-dark btn-lg mr-2  " ><a href="manage1.php" class="text-light"><td> <?php // echo $arraydata['companyreg']; 
                                                                                                                    ?> </td></a></button> -->



    <tr>
      <?php
      //}}
      ?>
      </table ?>



      </diV>
      </div>
      </div>
      </div>
      </div>
      <?php
    
      error_reporting(0);

      $host = "localhost"; //host name  
      $username = "root"; //database username  
      $word = ""; //database word  
      $db_name = "basic"; //database name  
      $tbl_name = "branch"; //table name  
      $conn = mysqli_connect("$host", "$username", "$word", "$db_name") or die("cannot connect"); //connection string  
      // $brandlist = $_POST['brandslist']; 

      // foreach($brandlist as $branditems)
      // {

      // $arraydata = explode("-",$branditems);
      // // print_r($arraydata);

      //  $query = "INSERT INTO nin (SNO,roll,name,ssc,inter,eamcet,branch,year,mento,percentage,backlogs,gender,stay,board,loca) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','$arraydata[6]','$arraydata[7]','$arraydata[8]','$arraydata[9]','$arraydata[10]','$arraydata[11]','$arraydata[12]','$arraydata[13]','$arraydata[14]')";
      //  $query_run = mysqli_query($con, $query); 
      // } 

      // $query = "SELECT branch from branch";
      // $result = mysqli_query($conn, $query);
      ?>

      <?php
      // if (mysqli_num_rows($result) > 0) {
      //   $sn=1;
      //   foreach($result as $arraydata) {
      // $arraydata = explode("-",$branditems);
      ?>
    <tr>




      <!-- <button type="button" class="btn btn-dark btn-lg mr-2  " ><a href="manage1.php" class="text-light"><td><?php //echo $arraydata['branch']; 
                                                                                                                  ?> </td></a></button> -->



    <tr>
      <?php
      //}}
      ?>
      </table>

      <center>

        <?php
        //$conn = mysqli_connect("localhost","root","","basic");
        if (isset($_SESSION['status'])) {
          echo "<h4>" . $_SESSION['status'] . "</h4>";
          unset($_SESSION['status']);
        }
        ?>
        <div class="card mt-5">
          <div class="card-header">
            <h4>Selection of students</h4>
          </div>
          <table border="1">
            <tr>
              <th>Roll</th>
              <th>name</th>
              <th>percentage</th>
              <th>Backlogs</th>
             </tr>
          
      </table>
          <div class="card-body">

            <form action="trial.php" method="POST">

              <?php
              session_start();
              $conn = mysqli_connect("localhost", "root", "", "basic");


              $us = $_REQUEST['branch'];
              $ha = $_REQUEST['nc'];
              $_SESSION["company"]='$ha';
              
            
              if ($us == 'all') {
                $brand_query = "SELECT distinct(roll),name,nc,branch,academicyear FROM qualified where nc='$ha'";
              } else {
                $brand_query = "SELECT distinct(roll),name,nc,branch,academicyear FROM qualified where nc='$ha' and branch='$us'";
              }
              $query_run = mysqli_query($conn, $brand_query);

              if (mysqli_num_rows($query_run) > 0) {
                $sn = 1;
                foreach ($query_run as $brand) {
                  $str= $brand['roll'] . "-" .$brand['name']."-".$brand['nc']."-".$brand['branch']. "-" .$brand['academicyear'];
              
                    // $str=$brand['roll'];
                  ?>
                  <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
                  <!-- <input type="" name="com" value="<?= $ha ?>"><?= $ha ?><br> -->

                 
    

              


















              <?php
                }
                ?>
                <input type="" name="com" value="<?= $ha ?>"><?= $ha ?><br>
                <?php
              }
              
              

              




















              
              // $con = mysqli_connect("localhost","root","","basic");

// if(isset($_POST['submit']))
// {
          
  
     
//      $comp=$_POST['com'];
//      echo $comp;

//     $brandlist = $_POST['brandslist'];
     
    
//     foreach($brandlist as $branditems)
//     { 
//         // echo $branditems."<br>";
//         $arraydata = explode("-",$branditems);
//        // print_r($arraydata);
//             $l='Aptitude';
//         $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$l')";
//         $query_run = mysqli_query($con, $query);
        
//     }


//     if($query_run){
//         echo "success";
//     }
// }  
              
              

              
              
               
    // $comp = $_POST['com'];
    // $_SESSION["company"]=$comp;
    
    // $c=$_SESSION['company']; 
    // echo $c;
    $ac = "SELECT DISTINCT Rounds FROM " . $ha . "rounds";
    $res = $conn->query($ac);
    
    echo "<select name='ac' class ='form-control'>";
    echo "<option> choose the round </option>";
    while ($row2 = $res->fetch_assoc()) {
        echo "<option value='" . $row2['Rounds'] . "'>" . $row2['Rounds'] . "</option>";
    }
    echo "</select>";
    
    echo nl2br("\n");
    echo nl2br("\n");
    // $n = $_REQUEST['ac'];
    // echo "<input type='text' name='yt' value='" . $n . "' style='display:none'>";
    // echo $n;
    // echo "<div class='row'>";
    // echo "<button type='submit' class='btn btn-primary' value='Submit'>go</button>";
    
    
    // echo "</div>";
    ?>







              



              <div class="form-group mt-3">
                <!-- <input type="text" name="n" value="$nc" style="display:none"> -->
                <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.php" class="btn btn-primary">BACK</a>
              </div>

            </form>


            <?php
// session_start();
// $con = mysqli_connect("localhost","root","","basic");
// if(isset($_POST['submit']))
// {
//      $brandlist = $_POST['brandslist'];
     
    
//     foreach($brandlist as $branditems)
//     { 
//         // echo $branditems."<br>";
//         $arraydata = explode("-",$branditems);
//        // print_r($arraydata);

//         $query = "INSERT INTO qualifiedround (id,roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','aptitude')";
//         $query_run = mysqli_query($con, $query);
//     }
  
//     if($query_run)
//     {
//         $_SESSION['status'] = "Inserted Successfully";
//         header("Location: test.php");
//     }
//     else
//     {
//         $_SESSION['status'] = "Not Inserted";
//         header("Location: test.php");
//     }
// }
?>

















            

      </center>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <br>



      <br>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>