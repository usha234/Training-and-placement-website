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
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="admin_home.html" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="nav-item nav-link" href="admin_home.html">Home</a>
    <a class="nav-item dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="company_reg.html">Company Registration</a></li>
      <li><a class="dropdown-item" href="student_reg.html">Student Registration</a></li>
    </ul>
    <a class="nav-item dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#">Overall Reports</a></li>
      <li><a class="dropdown-item" href="reg_companies_reports.html">Registered Companies</a></li>
      <li><a class="dropdown-item" href="branch_wise_reports.html">Branchwise Reports</a></li>
      <li><a class="dropdown-item" href="#">Individual Reports</a></li>
    </ul>
    <a class="nav-item dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>

    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="index2.php">round1</a></li>
      <li><a class="dropdown-item" href="index3.php">round2</a></li>
      <li><a class="dropdown-item" href="index4.php">round3</a></li>
      <li><a class="dropdown-item" href="index5.php">round4</a></li>
      <li><a class="dropdown-item" href="index6.php">round5</a></li>
      <li><a class="dropdown-item" href="index7.php">round6</a></li>
      <li><a class="dropdown-item" href="index8.php">final selected</a></li>

    </ul>
    <a class="nav-item nav-link" href="about_us.html">About Us</a>
    <a class="nav-item nav-link" href="index.html">Sign Out</a>
  </nav>
</header>
<body>
  
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php  
                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Qualification of round 2</h4>
                    </div>
                    <div class="card-body">

                        <form action="insert3.php" method="POST">
                        <?php
                            $con = mysqli_connect("localhost","root","","basic");
 
                            $brand_query = "SELECT * FROM registed_std";
                            $query_run = mysqli_query($con, $brand_query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $brand)
                                {
                                    ?>
                                    <input type="checkbox" name="brandslist[]" value="<?= $brand['rollnumber'];  ?>"  value="<?= $brand['stdname']; ?>" value="<?= $brand['branch'];?>"; value="<?= $brand['companyreg'];?>" value="<?= $brand['date']; ?>"  /> <?= $brand['rollnumber']; ?> <?= $brand['stdname']; ?>  <?= $brand['branch']; ?>  <?= $brand['companyreg']; ?>    <?= $brand['date']; ?> <br/>
                                    <?php
                                } 
                            }
                            else
                            {
                                echo "No Record Found";
                            }
                        ?>
                            <div class="form-group mt-3">
                                <button name="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
