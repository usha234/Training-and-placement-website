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
    

<main>
  <!--static image-->
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">GPCET - T & P</h1>
      <p class="lead fw-normal">Your Bright Future is Our Mission</p>
      <a class="btn btn-outline-secondary" href="#">Reports</a>
    </div>
  </div>




  <html>
    <body>
        <center>
    <h1>Bar Chart w.r.t the company wise selection total</h1>
    
    <?php
    /* Database config */
    $db_host		= 'localhost';
    $db_user		= 'root';
    $db_pass		= '';
    $db_database	= 'basic'; 
     
    /* End config */
     
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = $db->prepare("SELECT count(*) FROM brands where branch = 'cse' ");
    $sql1 = $db->prepare("SELECT count(*) FROM brands where branch = 'ece' ");
    $sql2 = $db->prepare("SELECT count(*) FROM brands where branch = 'iot' ");
    $sql3 = $db->prepare("SELECT count(*) FROM brands where branch = 'ai' ");
    $sql4 = $db->prepare("SELECT count(*) FROM brands where branch = 'eee' ");
    $sql5 = $db->prepare("SELECT count(*) FROM brands where branch = 'mechanical' ");
    $sql6 = $db->prepare("SELECT count(*) FROM brands where branch = 'civil' ");
    
      $sql->execute();
      $rows = $sql->fetch(PDO::FETCH_NUM);
      $numberofrowscse=$rows[0];
    
        $sql1->execute();
      $rows = $sql1->fetch(PDO::FETCH_NUM);
      $numberofrowsece=$rows[0];
    
        $sql2->execute();
      $rows = $sql2->fetch(PDO::FETCH_NUM);
      $numberofrowsiot=$rows[0];
    
        $sql3->execute();
      $rows = $sql3->fetch(PDO::FETCH_NUM);
      $numberofrowsai=$rows[0];
    
        $sql4->execute();
      $rows = $sql4->fetch(PDO::FETCH_NUM);
      $numberofrowseee=$rows[0];
    
        $sql5->execute();
      $rows = $sql5->fetch(PDO::FETCH_NUM);
      $numberofrowsmechanical=$rows[0];
    
        $sql6->execute();
      $rows = $sql6->fetch(PDO::FETCH_NUM);
      $numberofrowscivil=$rows[0];
    
       
      echo 'CSE : '.$numberofrowscse;
      echo 'ECE : '.$numberofrowsece;
      echo 'IOT : '.$numberofrowsiot;
        echo 'ai : '.$numberofrowsai;
      echo 'ECE : '.$numberofrowseee;
        echo 'Mechanical : '.$numberofrowsmechanical;
        echo 'civil : '.$numberofrowscivil;
    
    ?>
   
    <br>
    <br>
    <br>
    <br>
    <br>
        <br>
    <table class="graph">
      
        <br>
        <br>
      <thead>
        <tr>
          <th scope="col">Departments</th>
          <th scope="col">total % </th>
        </tr>
      </thead><tbody>
        <tr style="height:<?php echo $numberofrowscse ?>%">
          <th scope="row">CSE</th>
          <td><span><?php echo $numberofrowscse ?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowsece ?>%">
          <th scope="row">ECE</th>
          <td><span><?php echo $numberofrowsece ?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowsiot ?>%">
          <th scope="row">IoT</th>
          <td><span><?php echo $numberofrowsiot ?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowsai ?>%">
          <th scope="row">ai</th>
          <td><span><?php echo $numberofrowsai ?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowseee ?>%">
          <th scope="row">EEE</th>
          <td><span><?php echo $numberofrowseee?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowsmechanical ?>%">
          <th scope="row">Mechanical</th>
          <td><span><?php echo $numberofrowsmechanical ?>%</span></td>
        </tr>
        <tr style="height:<?php echo $numberofrowscivil ?>%">
          <th scope="row">Civil</th>
          <td><span><?php echo $numberofrowscivil ?>%</span></td>
        </tr>
        
      </tbody>
    </table>
    
    </body>
    
    <style >
    
    
    body, table, input, select, textarea {
    
    }
    
    
    .graph {
      margin-bottom:1em;
      font:normal 100%/150% arial,helvetica,sans-serif;
    }
    
    .graph caption {
      font:bold 150%/120% arial,helvetica,sans-serif;
      padding-bottom:0.33em;
    }
    
    .graph tbody th {
      text-align:right;
    }
    
    @supports (display:grid) {
    
      @media (min-width:32em) {
    
        .graph {
          display:block;
          width:600px;
          height:300px;
        }
    
        .graph caption {
          display:block;
        }
    
        .graph thead {
          display:none;
        }
    
        .graph tbody {
          position:relative;
          display:grid;
          grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));
          column-gap:2.5%;
          align-items:end;
          height:100%;
          margin:3em 0 1em 2.8em;
          padding:0 1em;
          border-bottom:2px solid rgba(0,0,0,0.5);
          background:repeating-linear-gradient(
            180deg,
            rgba(170,170,170,0.7) 0,
            rgba(170,170,170,0.7) 1px,
            transparent 1px,
            transparent 20%
          );
        }
    
        .graph tbody:before,
        .graph tbody:after {
          position:absolute;
          left:-3.2em;
          width:2.8em;
          text-align:right;
          font:bold 80%/120% arial,helvetica,sans-serif;
        }
    
        .graph tbody:before {
          content:"100%";
          top:-0.6em;
        }
    
        .graph tbody:after {
          content:"0%";
          bottom:-0.6em;
        }
    
        .graph tr {
          position:relative;
          display:block;
        }
    
        .graph tr:hover {
          z-index:999;
        }
    
        .graph th,
        .graph td {
          display:block;
          text-align:center;
        }
    
        .graph tbody th {
          position:absolute;
          top:-3em;
          left:0;
          width:100%;
          font-weight:normal;
          text-align:center;
          white-space:nowrap;
          text-indent:0;
          transform:rotate(-45deg);
        }
    
        .graph tbody th:after {
          content:"";
        }
    
        .graph td {
          width:100%;
          height:100%;
          background:#F63;
          border-radius:0.5em 0.5em 0 0;
          transition:background 0.5s;
        }
    
        .graph tr:hover td {
          opacity:0.7;
        }
    
        .graph td span {
          overflow:hidden;
          position:absolute;
          left:50%;
          top:50%;
          width:0;
          padding:0.5em 0;
          margin:-1em 0 0;
          font:normal 85%/120% arial,helvetica,sans-serif;
    /* 			background:white; */
    /* 			box-shadow:0 0 0.25em rgba(0,0,0,0.6); */
          font-weight:bold;
          opacity:0;
          transition:opacity 0.5s;
          color:white;
        }
    
        .toggleGraph:checked + table td span,
        .graph tr:hover td span {
          width:4em;
          margin-left:-2em; /* 1/2 the declared width */
          opacity:1;
        }
    
    
    
        
    
    
      } /* min-width:32em */
    
    } /* grid only */
        </style>
    
    
        </html>

        </center>



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
