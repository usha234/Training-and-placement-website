<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        background-color: rgba(0, 0, 0, 0.73);
        border: solid rgba(0, 0, 0, 0.1);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, 0.1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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
  
     <nav class="navbar navbar-expand-lg sticky-top " style=" 
        background: linear-gradient(to right, rgb(115, 223, 244, .5) 30%, rgb(209, 117, 170, .5) 65%, rgb(89, 223, 207, .5));
        background-size: 200% 200%;
        animation: gradient-animation 16s ease infinite;
       padding-bottom: 5%;
        width: 100%;
        padding-top: 3%;
        /* position: absolute; */

        border-radius: 0px 0px 25% 25%/40%;
">
        <div class="container-fluid  " style=" margin-left: 50px;">
            
             <a class=" navbar-brand" href="admin_home.html" aria-label="Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Registration
                        </a>
                          <ul class="dropdown-menu">
                      <li class="">
                          <a class="dropdown-item" href="aca.php">Academic_year Registration</a>
                      </li>
                      <li class="">
                          <a class="dropdown-item" href="branch.php" >Branch Registration</a>
                      </li>
                      <li class="">
                          <a class="dropdown-item" href="co.php" >Company Registration</a>
                      </li>
                      <li class="">
                          <a class="dropdown-item" href="ment.php" >Mentor Registration</a>
                      </li>
                      <li class="">
                          <a class="dropdown-item"  href="stu_register.html">Student Registration</a>
                      </li>
                      <li>
                                <hr class="dropdown-divider">
                            </li>
                      <li class="">
                          <a class="dropdown-item"  href="mana2.php">Mapping</a></a>
                      </li>
                      </ul>
                    </li>

      






                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Reports
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="results.php">Results</a></li>
                            <li><a class="dropdown-item"  href="statistics.html">Statistics</a></li>
                            <li><a class="dropdown-item" href="reg_companies_reports.html">Registered Companies</a></li>
                            <li><a class="dropdown-item" href="branch_wise_reports.html">Branchwise Reports</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="individual_report.html">Individual Reports</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="manage.php">Manage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about_us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.html">Sign Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    

<main>

  <!--static image-->
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light "> 
   
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal ">GPCET - T & P</h1>
      <p class="lead fw-normal">Your Bright Future is Our Mission</p>
      <a class="btn btn-outline-secondary" href="#">Reports</a>
    </div>
    </div>
  </div>
  
  
  
  <!--corousel slider-->
  <div class="container my-4">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="pictures/action.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>GPCET - T & P</h5>
            <p>Pioneering Innovative Education.</p>
            <button type="button" class="btn btn-light">ACTION</button>
            <button type="button" class="btn btn-light">COMMUNICATE</button>
            <button type="button" class="btn btn-light">TECHNOLOGY</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="pictures/communication.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>GPCET - T & P</h5>
            <p>Pioneering Innovative Education.</p>
            <button type="button" class="btn btn-light">ACTION</button>
            <button type="button" class="btn btn-light">COMMUNICATE</button>
            <button type="button" class="btn btn-light">TECHNOLOGY</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="pictures/technical.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>GPCET - T & P</h5>
            <p>Pioneering Innovative Education.</p>
            <button type="button" class="btn btn-light">ACTION</button>
            <button type="button" class="btn btn-light">COMMUNICATE</button>
            <button type="button" class="btn btn-light">TECHNOLOGY</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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
        <li><a class="link-secondary" href="stu_register.html">Student registration</a></li>
        <li><a class="link-secondary" href="mana.html">Mapping</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>